import './bootstrap';
import Vue from 'vue';
window.Vue = Vue;

//Components
import PackagesHosting from '../../components/PackagesHosting';
import PackagesFeatures from '../../components/PackagesFeatures';

Vue.component('packages-hosting', PackagesHosting);
Vue.component('packages-features', PackagesFeatures);

const app = new Vue({
    el: '#app',
});
