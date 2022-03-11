/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');




import myMixin from './mixins'
import locale from 'element-ui/lib/locale/lang/ar'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import moment from 'moment';
import TableComponent from 'vue-table-component';

// my mixin
Vue.mixin(myMixin);
// set arabic language to element ui
Vue.use(ElementUI, {locale});

// set moment
window.moment = require('moment');
moment.locale('en-us');
moment.lang("en");
Vue.prototype.$moment = moment;

Vue.use(TableComponent, {
    tableClass: 'table table-bordered table-hover table-custom',
    filterNoResults: 'لا يوجد بيانات',
    filterInputClass: 'form-control m-input',
    filterPlaceholder: 'بحث',
});


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
Vue.component('client-index', require('./components/client/index').default);
Vue.component('ages-index', require('./components/dashboard/ages/index').default);
Vue.component('ages-form', require('./components/dashboard/ages/form').default);

Vue.component('fg-input', require('./components/Input').default)
Vue.component('fg-select', require('./components/Select').default)
Vue.component('img-upload', require('./components/ImageUpload').default)


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
