<template>
  <div class="cocatop-app">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="sidebar-brand">
        <span class="brand-icon">🌿</span>
        <span class="brand-text">Cocatop</span>
      </div>
      <nav class="sidebar-nav">
        <div class="nav-section">
          <p class="nav-section-title">Gestión</p>
          <RouterLink class="nav-link" :to="{ name: 'sindicatos.index' }">
            <span class="nav-icon">🏛️</span> Sindicatos
          </RouterLink>
          <RouterLink class="nav-link" :to="{ name: 'catos.index' }">
            <span class="nav-icon">🌱</span> Catos
          </RouterLink>
          <RouterLink class="nav-link" :to="{ name: 'cosechadores.index' }">
            <span class="nav-icon">👨‍🌾</span> Cosechadores
          </RouterLink>
          <RouterLink class="nav-link" :to="{ name: 'cosechas.index' }">
            <span class="nav-icon">📦</span> Cosechas
          </RouterLink>
        </div>
        <div class="nav-section">
          <p class="nav-section-title">Finanzas</p>
          <RouterLink class="nav-link" :to="{ name: 'pagos.index' }">
            <span class="nav-icon">💰</span> Pagos
          </RouterLink>
          <RouterLink class="nav-link" :to="{ name: 'reportes.index' }">
            <span class="nav-icon">📊</span> Reportes
          </RouterLink>
        </div>
        <div class="nav-section">
          <p class="nav-section-title">Sistema</p>
          <RouterLink class="nav-link" :to="{ name: 'configuracion.index' }">
            <span class="nav-icon">⚙️</span> Configuración
          </RouterLink>
        </div>
      </nav>
    </aside>

    <!-- Main Content -->
    <div class="main-wrapper">
      <header class="topbar">
        <div class="topbar-title">{{ pageTitle }}</div>
        <div class="topbar-user">🌿 Sistema Cocatop</div>
      </header>
      <main class="main-content">
        <RouterView />
      </main>
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();
const titles = {
  'sindicatos.index': 'Sindicatos',
  'sindicatos.create': 'Nuevo Sindicato',
  'sindicatos.edit': 'Editar Sindicato',
  'catos.index': 'Catos',
  'catos.create': 'Nuevo Cato',
  'catos.edit': 'Editar Cato',
  'cosechadores.index': 'Cosechadores',
  'cosechadores.create': 'Nuevo Cosechador',
  'cosechadores.edit': 'Editar Cosechador',
  'cosechas.index': 'Cosechas',
  'cosechas.create': 'Nueva Cosecha',
  'cosechas.edit': 'Editar Cosecha',
  'cosechas.show': 'Detalle de Cosecha',
  'pagos.index': 'Pagos',
  'pagos.show': 'Detalle de Pago',
  'reportes.index': 'Reportes',
  'reportes.detalle': 'Reporte Detallado',
  'configuracion.index': 'Configuración',
  'configuracion.edit': 'Editar Configuración',
};
const pageTitle = computed(() => titles[route.name] ?? 'Cocatop');
</script>

<style scoped>
.cocatop-app {
  display: flex;
  min-height: 100vh;
  background: #0f1117;
  font-family: 'Inter', sans-serif;
}
.sidebar {
  width: 240px;
  min-height: 100vh;
  background: #161b22;
  border-right: 1px solid #21262d;
  display: flex;
  flex-direction: column;
  position: fixed;
  left: 0; top: 0; bottom: 0;
  z-index: 100;
}
.sidebar-brand {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 24px 20px 20px;
  border-bottom: 1px solid #21262d;
}
.brand-icon { font-size: 24px; }
.brand-text {
  font-size: 20px;
  font-weight: 700;
  background: linear-gradient(135deg, #4ade80, #22d3ee);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.sidebar-nav { padding: 16px 0; flex: 1; }
.nav-section { margin-bottom: 20px; }
.nav-section-title {
  font-size: 10px;
  font-weight: 600;
  color: #6e7681;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 0 20px 8px;
  margin: 0;
}
.nav-link {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 10px 20px;
  color: #8b949e;
  text-decoration: none;
  font-size: 14px;
  font-weight: 500;
  transition: all 0.15s ease;
  border-left: 3px solid transparent;
}
.nav-link:hover { background: #1c2128; color: #e6edf3; }
.nav-link.router-link-active { background: #1c2128; color: #4ade80; border-left-color: #4ade80; }
.nav-icon { font-size: 16px; }
.main-wrapper { margin-left: 240px; flex: 1; display: flex; flex-direction: column; min-height: 100vh; }
.topbar {
  height: 60px;
  background: #161b22;
  border-bottom: 1px solid #21262d;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 32px;
  position: sticky;
  top: 0;
  z-index: 50;
}
.topbar-title { font-size: 16px; font-weight: 600; color: #e6edf3; }
.topbar-user { font-size: 13px; color: #4ade80; font-weight: 500; }
.main-content { padding: 32px; flex: 1; }
</style>
