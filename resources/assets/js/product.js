
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

 import PRODUCTO from './components/product.vue';
 import DETAIL from './components/detail.vue';
 window.eventBus = new Vue();

const app = new Vue({
    el: '#app',
    components:{
    	'producto'	: PRODUCTO,
    	'detalle'	: DETAIL
    },
    data:{
        detail:{
            clave   : '',
            nombre  : '',
            tipo    : '',
            active  : true,
        }
    },
    methods:{
        save(){
            axios.post('/producto/modificar',{
                'data'      : this.detail,
                '_method'   : 'PATCH'
            })
            .then(function(response){
                if( response.status==200 ){
                    window.location.reload();
                    $('#myModal').modal('hide');
                }
            });
        },
        add_product(){
            this.$root.detail.clave     = "";
            this.$root.detail.nombre    = "";
            this.$root.detail.tipo      = 0;
            this.$root.detail.id        = 0;
            this.$root.detail.active    = 1;
            eventBus.$emit('providers',[]);
            $('#myModal').modal('show');
        },
        add_provider(){
            eventBus.$emit('add_provider');
        }
    }
});
