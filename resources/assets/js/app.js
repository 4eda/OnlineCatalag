
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//Vue.component('search-component', require('./components/searchComponent.vue'));


window.Vue = require('vue');
import VueRouter from 'vue-router';
window.Vue.use(VueRouter);
//Vue.component('companies-index', require('./components/CompaniesIndex.vue'));
//Vue.component('companies-create', require('./components/CompaniesIndex.vue'));

import searchComponent from './components/companies/searchComponent.vue';
import CompaniesIndex from './components/companies/CompaniesIndex.vue';
import CompaniesCreate from './components/companies/CompaniesCreate.vue';
import CompaniesEdit from './components/companies/CompaniesEdit.vue';

const routes = [
    {
        path: '/',
        components: {
            companiesIndex: CompaniesIndex,
            searchComponent: searchComponent
            
        }
    },
    {path: 'companies/create', component: CompaniesCreate, name: 'createCompany'},
    {path: 'companies/edit/:id', component: CompaniesEdit, name: 'editCompany'},
]

const router = new VueRouter({ routes })

const app = new Vue({ 
    
    router


}).$mount('#app')

    

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


