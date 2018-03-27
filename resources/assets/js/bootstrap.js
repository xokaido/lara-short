
import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';

window._     = require('lodash');
window.Vue   =  Vue;
window.axios = axios;

Vue.use( VueRouter );

window.$  = require('jquery');

// try
// {
//     window.$ =  require('jquery');
//     require('bootstrap-sass');
// }
// catch (e) {}


let token = document.head.querySelector('meta[name="csrf-token"]');
window.axios.defaults.headers.common = {  'X-Requested-With': 'XMLHttpRequest',
                                          'X-CSRF-TOKEN': ( token ? token.content : '' ) 
                                        };


