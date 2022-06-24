
window.Vue = require('vue').default;


Vue.component('people-component', require('./components/PeopleComponent.vue').default);
Vue.component('peopleDescription-component', require('./components/PeopleDescriptionComponent.vue'));

const app = new Vue({
    el: '#app',
});


