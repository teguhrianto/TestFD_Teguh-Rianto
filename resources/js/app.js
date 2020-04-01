import './bootstrap';
import Vue from 'vue';
window.Vue = Vue;

//Components
import Example from './components/ExampleComponent';

Vue.component('example-component', Example);

const app = new Vue({
    el: '#app',
});
