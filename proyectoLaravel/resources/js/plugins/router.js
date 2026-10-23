/*  import { createRouter, createWebHistory } from 'vue-router';

// Sindicatos
import SindicatoIndex  from '../pages/sindicato/index.vue';
import SindicatoCreate from '../pages/sindicato/create.vue';
import SindicatoEdit   from '../pages/sindicato/edit.vue';

// Catos
import CatoIndex  from '../pages/cato/index.vue';
import CatoCreate from '../pages/cato/create.vue';
import CatoEdit   from '../pages/cato/edit.vue';

// Cosechadores
import CosechadorIndex  from '../pages/cosechador/index.vue';
import CosechadorCreate from '../pages/cosechador/create.vue';
import CosechadorEdit   from '../pages/cosechador/edit.vue';

// Cosechas
import CosechaIndex  from '../pages/cosecha/index.vue';
import CosechaCreate from '../pages/cosecha/create.vue';
import CosechaEdit   from '../pages/cosecha/edit.vue';
import CosechaShow   from '../pages/cosecha/show.vue';

// Pagos
import PagoIndex from '../pages/pago/index.vue';
import PagoShow  from '../pages/pago/show.vue';

// Reportes
import ReporteIndex   from '../pages/reporte/index.vue';
import ReporteDetalle from '../pages/reporte/detalle.vue';

// Configuracion
import ConfiguracionIndex from '../pages/configuracion/index.vue';
import ConfiguracionEdit  from '../pages/configuracion/edit.vue';

const routes = [
    // Sindicatos
    { path: '/sindicatos',         component: SindicatoIndex,  name: 'sindicatos.index' },
    { path: '/sindicatos/create',  component: SindicatoCreate, name: 'sindicatos.create' },
    { path: '/sindicatos/:id/edit',component: SindicatoEdit,   name: 'sindicatos.edit' },

    // Catos
    { path: '/catos',              component: CatoIndex,  name: 'catos.index' },
    { path: '/catos/create',       component: CatoCreate, name: 'catos.create' },
    { path: '/catos/:id/edit',     component: CatoEdit,   name: 'catos.edit' },

    // Cosechadores
    { path: '/cosechadores',            component: CosechadorIndex,  name: 'cosechadores.index' },
    { path: '/cosechadores/create',     component: CosechadorCreate, name: 'cosechadores.create' },
    { path: '/cosechadores/:id/edit',   component: CosechadorEdit,   name: 'cosechadores.edit' },

    // Cosechas
    { path: '/cosechas',           component: CosechaIndex,  name: 'cosechas.index' },
    { path: '/cosechas/create',    component: CosechaCreate, name: 'cosechas.create' },
    { path: '/cosechas/:id/edit',  component: CosechaEdit,   name: 'cosechas.edit' },
    { path: '/cosechas/:id',       component: CosechaShow,   name: 'cosechas.show' },

    // Pagos
    { path: '/pagos',        component: PagoIndex, name: 'pagos.index' },
    { path: '/pagos/:id',    component: PagoShow,  name: 'pagos.show' },

    // Reportes
    { path: '/reportes',          component: ReporteIndex,   name: 'reportes.index' },
    { path: '/reportes/:id',      component: ReporteDetalle, name: 'reportes.detalle' },

    // Configuracion
    { path: '/configuracion',      component: ConfiguracionIndex, name: 'configuracion.index' },
    { path: '/configuracion/edit', component: ConfiguracionEdit,  name: 'configuracion.edit' },

    // Default redirect
    { path: '/', redirect: '/cosechas' },
];

const router = createRouter({
    history: createWebHistory('/cocatop/'),
    routes,
});

export default router;
  */