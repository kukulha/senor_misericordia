require('./bootstrap');
require('materialize-css/dist/js/materialize.min');

$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel.carousel-slider').carousel({
    	fullWidth:true,
    	indicators:true
    });
    $('.datepicker').datepicker({
    	format: 'yyyy-mm-dd',
    });
});