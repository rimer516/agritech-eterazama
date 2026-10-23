<?php
use App\Models\Cosecha;
use App\Models\Cosechador;
use App\Models\Pago;
use App\Models\Configuracion;

// Simulate the logic in CosechaController@finalizarPorCosechador
try {
    $cosechador = Cosechador::first();
    if (!$cosechador) {
        echo "Error: No cosechador found. Create one first.\n";
        exit;
    }
    
    $cosechador_id = $cosechador->id;
    echo "Using cosechador ID: $cosechador_id\n";

    // Ensure there are some harvests
    Cosecha::create([
        'cosechador_id' => $cosechador_id,
        'libras' => 40,
        'fecha' => date('Y-m-d'),
        'estado' => 'en_proceso'
    ]);

    $harvests = Cosecha::where('cosechador_id', $cosechador_id)
        ->where('estado', 'en_proceso')
        ->get();

    echo "Found " . $harvests->count() . " harvests.\n";

    $totalLibras = $harvests->sum('libras');
    $config = Configuracion::first();
    $divisor = $config ? $config->divisor : 12;
    $pagoPorTirada = $config ? $config->pago_por_tirada : 0;

    $tirada = $totalLibras / $divisor;
    $totalPagar = floor($tirada * $pagoPorTirada);

    echo "Total Libras: $totalLibras, Tirada: $tirada, Total Pagar: $totalPagar\n";

    $pago = Pago::create([
        'cosechador_id' => $cosechador_id,
        'total_libras'   => $totalLibras,
        'tirada'         => $tirada,
        'total_pagar'    => $totalPagar,
        'estado'         => 'pendiente',
        'fecha'          => date('Y-m-d'),
    ]);

    echo "Pago created ID: " . $pago->id . "\n";

    Cosecha::whereIn('id', $harvests->pluck('id'))->update([
        'estado' => 'finalizado',
        'pago_id' => $pago->id
    ]);

    echo "Harvests updated.\n";
    echo "SUCCESS\n";

} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString() . "\n";
}
