require('./bootstrap');
window.Vue = require('vue').default;
Vue.component('fecha-receta', require('./components/FechaReceta.vue').default);



const app = new Vue({
    el: '#app',
});





/* if(window.location.pathname.includes('/recetas/create')){
require('./toggle');
}
 */