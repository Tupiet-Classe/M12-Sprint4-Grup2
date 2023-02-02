import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';

import App from '../vue/App.vue'

import Prueba from '../vue/Prueba.vue';

const app = createApp({})

app.component('andrei-prova', Prueba)

app.mount("#app")