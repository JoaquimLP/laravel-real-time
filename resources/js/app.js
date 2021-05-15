require('./bootstrap');

import Vue from 'vue/dist/vue.js';
import VueToastity from 'vue-toastify';

Vue.use(VueToastity);

Vue.component('posts-components', require('./components/post/Post.vue').default)

const app = new Vue({
    el: '#app'
})
