window.jQuery = window.$ = $ = require('jquery');
window.Vue = require('vue');
window.perfectScrollbar = require('perfect-scrollbar/jquery')($);
window.toastr = require('toastr');
window.DataTable = require('datatables');
require('dropzone');
require('jquery-match-height');
require('bootstrap-toggle');
require('nestable2');
require('bootstrap');
require('bootstrap-switch');
require('select2');
require('eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker');
require('./slugify');
// window.TinyMCE = window.tinymce = require('tinymce/tinymce.min');
require('./compass_tinymce');

window.helpers = require('./helpers.js');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app'
});


$(document).ready(function(){


    $('#compass-loader').fadeOut();

    $('.match-height').matchHeight();
    $('select.select2').select2({width: '100%'});

    $('.datatable').DataTable({
        "dom": '<"top"fl<"clear">>rt<"bottom"ip<"clear">>'
    });

    $('.datepicker').datetimepicker();
});