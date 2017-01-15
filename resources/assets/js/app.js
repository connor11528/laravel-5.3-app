
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

import { load } from 'vue-google-maps'
import { store } from './store'

load({
  key: 'AIzaSyC2wEaK7ov2WrNNicuJ33KNb6Xp4JGG93k',
  v: '3.24',             // Google Maps API version
  libraries: 'places',   // for places input
});

Vue.component('locationInput', require('./components/LocationInput.vue'));
Vue.component('candidatesForm', require('./components/CandidatesForm.vue'));
Vue.component('company-list', require('./components/CompanyList.vue'));

const app = new Vue({
    el: 'body',
    data: store
});


