
require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('dashboard', require('./components/dashboard.vue').dashboard);


const app = new Vue({
    el: '#app',
    components:{
        dashboard
    }
});
