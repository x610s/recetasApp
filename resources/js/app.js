require('./bootstrap');
window.Vue = require('vue').default;

import VueSweetalert2 from 'vue-sweetalert2';

// If you don't need the styles, do not connect
import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueSweetalert2);
Vue.component('fecha-receta', require('./components/FechaReceta.vue').default);
Vue.component('delete-receta', require('./components/DeleteReceta.vue').default);

const app = new Vue({
    el: '#app',
});



