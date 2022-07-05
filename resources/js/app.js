/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import vuetify from './vuetify';
import ExampleComponent from './components/ExampleComponent'
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('card-component', require('./components/cardComponent.vue').default);
Vue.component('peopleDescription-component', require('./components/PeopleDescriptionComponent.vue').default);
Vue.component('menu-component', require('./components/menuComponent.vue').default);
Vue.component('orientacion-component', require('./components/OrientacionComponent.vue').default);
Vue.component('sexo-component', require('./components/SexoComponent.vue').default);
Vue.component('correo-component', require('./components/CorreoComponent.vue').default);
Vue.component('actividades-component', require('./components/ActividadesComponent.vue').default);
Vue.component('name-component', require('./components/NameComponent.vue').default);
Vue.component('login-component', require('./components/LoginComponent.vue').default);
Vue.component('example', require('./components/ejemplos.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    vuetify
});
