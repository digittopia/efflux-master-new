require('./bootstrap');

import Vue from 'vue';
import VueRouter from "vue-router";
import Form from "./utilities/Form";
import router from './routes';

window.Vue = Vue;
window.Form = Form;

Vue.use(VueRouter);

Vue.component('statbox-list', require('./components/statboxList.vue').default);
Vue.component('statbox', require('./components/statBox.vue').default);
Vue.component('editor', require('./components/editor.vue').default);
Vue.component('modal', require('./components/modal.vue').default);
Vue.component('campaigns-table', require('./components/campaignsTable.vue').default);
Vue.component('domains-table', require('./components/domainsTable.vue').default);

const app = new Vue({
    el: '#app',
    router
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
$(document).on('click','a.social-auth',function(event){
    event.preventDefault();
    alert('Sorry!\nSocial Oauth Not yet enabled...');
});