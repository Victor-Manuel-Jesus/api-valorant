import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import TarjetaAgente from './components/TarjetaAgenteComponent.vue';
import ConsultaGPT from './components/ConsultaGPTComponent.vue';



app.component('example-component', ExampleComponent);
app.component('agente-valorant', TarjetaAgente);
app.component('consulta-gpt', ConsultaGPT);



app.mount('#app');
