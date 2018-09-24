
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import {rutas} from './rutas.js';

axios.defaults.baseURL = 'http://calificaciones.com/api/';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);


const enrutador = new VueRouter({
	routes: rutas,
	mode: 'history'
});

Vue.router = enrutador;

/*Vue.component('login', require('./components/Autentificacion/Login.vue'));
Vue.component('register', require('./components/Autentificacion/Register.vue'));*/
Vue.prototype.$eventHub = new Vue({
    data: {
        Modal: false,
        ModalRegister: false
    }
}); // Global event bus


Vue.use(require('@websanova/vue-auth'), {
    auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
    http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
  });

const app = new Vue({
    el: '#app',
    router: enrutador,
    created(){
        this.$eventHub.$on('show-modal', this.showedModal);
    },
    methods:{
        showedModal(showModal){
            this.$eventHub.Modal = showModal;

            $("#btn-register").click(function(){
                this.$eventHub.ModalRegister = showModal;
                this.$eventHub.Modal = !showModal;
            });
        }
    }
});

