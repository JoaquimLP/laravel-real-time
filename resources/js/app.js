require('./bootstrap');

import Vue from 'vue/dist/vue.js';
import VueToastity from 'vue-toastify';

Vue.use(VueToastity);

const app = new Vue({
    el: '#app'
})
