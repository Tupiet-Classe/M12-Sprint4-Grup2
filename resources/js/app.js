import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';

import App from '../vue/App.vue'

import Prueba from '../vue/Prueba.vue';

import Perfil from '../vue/Perfil.vue';

const app = createApp({})

app.component('andrei-prova', Prueba)

app.component('perfil-andrei', Perfil)


app.mount("#app")
