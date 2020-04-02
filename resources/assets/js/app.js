import './bootstrap';
import Vue from 'vue';
window.Vue = Vue;

//Components
import PackagesHosting from '../../components/PackagesHosting';

Vue.component('packages-hosting', PackagesHosting);

const app = new Vue({
    el: '#app',
});
