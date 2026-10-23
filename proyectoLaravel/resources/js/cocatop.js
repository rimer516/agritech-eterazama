import '../css/modules.css';

import { createApp, h } from 'vue';
import router from './plugins/router.js';
import CocatopLayout from './layouts/CocatopLayout.vue';

const app = createApp({
    render: () => h(CocatopLayout),
});

app.use(router);
app.mount('#cocatop-app');
