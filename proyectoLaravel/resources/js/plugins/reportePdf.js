// Utility: generate the Cocatop production report PDF using jsPDF + autotable
import jsPDF from 'jspdf';
import autoTable from 'jspdf-autotable';

/**
 * @param {Object} datos - response from /api/reportes/pdf/datos
 */
export function generarReportePDF(datos) {
  const doc = new jsPDF({ orientation: 'landscape', unit: 'mm', format: 'a4' });

  const pageW = doc.internal.pageSize.getWidth();
  const localFecha = new Date().toLocaleString('es-ES', {
    day: '2-digit', month: '2-digit', year: 'numeric',
    hour: '2-digit', minute: '2-digit'
  });

  // ── Header (B&W) ────────────────────────────────────────────────
  doc.setTextColor(0, 0, 0); // Black
  doc.setFont('helvetica', 'bold');
  doc.setFontSize(22);
  doc.text('REPORTE GENERAL DE COSECHA', pageW / 2, 20, { align: 'center' });

  doc.setFont('helvetica', 'normal');
  doc.setFontSize(12);
  doc.text('Sistema Cocatop — Gestión de Producción de Hoja de Coca', pageW / 2, 28, { align: 'center' });
  doc.setFontSize(10);
  doc.text(`Fecha de generación: ${localFecha}`, pageW / 2, 34, { align: 'center' });

  // ── Config info row (B&W) ─────────────────────────────────────────
  doc.setDrawColor(0, 0, 0);
  doc.setFontSize(10);
  doc.text(`Divisor: ${datos.divisor}   |   Pago por tirada: Bs ${datos.pago_por_tirada}   |   Total cosechadores: ${datos.filas.length}`, pageW / 2, 44, { align: 'center' });

  // ── Main Table ────────────────────────────────────────────────────
  const tableHead = [
    ['N°', 'Cosechador', 'Libras cosechadas', 'Total Libras', `Tiradas/${datos.divisor} `, 'Pago por tirada', 'Total a Pagar (Bs)']
  ];

  const tableBody = datos.filas.map((fila, i) => [
    i + 1,
    fila.cosechador,
    fila.pesajes.join(' + '),
    Math.round(fila.total_libras), // Integer as requested
    fila.tirada.toFixed(2),
    fila.pago_por_tirada,
    `Bs ${fila.total_pagar}`
  ]);

  // Totals row (B&W)
  tableBody.push([
    { content: 'TOTAL', colSpan: 3, styles: { halign: 'right', fontStyle: 'bold' } },
    { content: Math.round(datos.totales.total_libras).toString(), styles: { fontStyle: 'bold' } },
    { content: '—', styles: { halign: 'center' } },
    { content: '—', styles: { halign: 'center' } },
    { content: `Bs ${datos.totales.total_pagar}`, styles: { fontStyle: 'bold' } },
  ]);

  autoTable(doc, {
    startY: 52,
    head: tableHead,
    body: tableBody,
    theme: 'grid',
    headStyles: {
      fillColor: [255, 255, 255], // White header
      textColor: [0, 0, 0], // Black text
      lineWidth: 0.1,
      lineColor: [0, 0, 0],
      fontStyle: 'bold',
      fontSize: 11,
      halign: 'center',
    },
    bodyStyles: {
      fontSize: 10,
      textColor: [0, 0, 0], // Black text
      fillColor: [255, 255, 255], // White background
    },
    alternateRowStyles: {
      fillColor: [250, 250, 250], // Light gray
    },
    columnStyles: {
      0: { halign: 'center', cellWidth: 12 },
      1: { cellWidth: 65 },
      2: { cellWidth: 80, fontSize: 9 },
      3: { halign: 'right', cellWidth: 28 },
      4: { halign: 'right', cellWidth: 28 },
      5: { halign: 'right', cellWidth: 32 },
      6: { halign: 'right', cellWidth: 32 },
    },
    styles: { lineColor: [0, 0, 0], lineWidth: 0.1 },
    margin: { left: 10, right: 10 },
  });

  // ── Footer ───────────────────────────────────────────────────────
  const finalY = doc.lastAutoTable.finalY + 8;
  doc.setFontSize(8);
  doc.setTextColor(100, 100, 100);
  doc.text('Cocatop — Sistema de Gestión de Hoja de Coca', 10, finalY);
  doc.text(`Generado: ${localFecha}`, pageW - 10, finalY, { align: 'right' });

  // ── Open in New Tab ─────────────────────────────────────────────
  window.open(doc.output('bloburl'), '_blank');
}
