/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;


import Vue from 'vue'
import router from './router'

let Home = require('./components/Home.vue').default;
let Input = require('./components/InputText').default;

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('Home', require('./components/Home').default);



const app = new Vue({
    el: '#app',
    router,
    components :{Home, Input}
});
