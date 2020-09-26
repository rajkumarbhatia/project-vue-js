require('./bootstrap');
window.Vue = require('vue');

Vue.component('navbar', require('./components/test.vue').default);
const app = new Vue({
  el: '#app'
});