require('./bootstrap');

const DocumentsIndex = Vue.component('DocumentsIndex', require('./components/DocumentsIndex.vue'));
const DocumentsCreate = Vue.component('DocumentsCreate', require('./components/DocumentsCreate.vue'));
const DocumentsView = Vue.component('DocumentsView', require('./components/DocumentsView.vue'));
const DocumentsEdit = Vue.component('DocumentsEdit', require('./components/DocumentsEdit.vue'));

const routes = [
    {path: '/', component: DocumentsIndex, name: 'index'},
    {path: '/create', component: DocumentsCreate, name: 'createDocument'},
    {path: '/view/:id', component: DocumentsView, name: 'viewDocument'},
    {path: '/edit/:id', component: DocumentsEdit, name: 'editDocument'},
]

const router = new VueRouter({ mode: 'history', routes: routes });

new Vue({ router }).$mount('#app');
