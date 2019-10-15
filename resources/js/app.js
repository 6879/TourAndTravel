/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 Vue.config.devtools = true;

const app = new Vue({
    el: '#app',
    data:{
      members:[],
       name: 'rasel',
       email:'amin35-1260@diu.edu.bd'
      
    },
    created: function(){
        this.init();
       },
    methods:{

      editStatus : function(id){
      
       axios.get('http://localhost/tour/public/project/admin/allMembers/editStatus/'+id)
        .then(function(res){
             axios.get('http://localhost/tour/public/project/admin/allMembers/get')
            .then(function(res){
              app.members=res.data
            })
              Swal.fire({
             title:"Good job!",
             text:"You clicked the button!",
             type:"success",
             confirmButtonClass:"btn btn-confirm mt-2"
            })

            })
      },
       cancleMember : function(id){
      
       axios.get('http://localhost/tour/public/project/admin/allMembers/cancleMember/'+id)
        .then(function(res){
             axios.get('http://localhost/tour/public/project/admin/allMembers/get')
            .then(function(res){
              app.members=res.data
            })
            })
      },

         init : function(){
         axios.get('http://localhost/tour/public/project/admin/allMembers/get')
            .then(function(res){
              app.members=res.data
            })
          },
    alert: function(){
    	alert(this.name+this.email+this.id)
    }
    },
});
