require('./bootstrap');

window.Vue = require('vue');

window.VueRouter=require('vue-router').default;

window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;

const DocumentsIndex = Vue.component('DocumentsIndex', require('./components/DocumentsIndex.vue'));
const DocumentsCreate = Vue.component('DocumentsCreate', require('./components/DocumentsCreate.vue'));
const DocumentsEdit = Vue.component('DocumentsEdit', require('./components/DocumentsEdit.vue'));

Vue.use(VueRouter, VueAxios, axios);

const routes = [
    {path: '/', component: DocumentsIndex, name: 'index'},
    {path: '/create', component: DocumentsCreate, name: 'createDocument'},
    {path: '/edit/:id', component: DocumentsEdit, name: 'editDocument'},
]

const router = new VueRouter({ mode: 'history', routes: routes});

new Vue({ router }).$mount('#app');
