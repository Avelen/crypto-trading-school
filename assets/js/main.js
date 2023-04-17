// custom scripts
jQuery(document).ready(function (){

    jQuery('.mobile-menu-btn').on('click', function (){
        jQuery(this).toggleClass('active');
        jQuery('.navbar-links').toggleClass('active');
    });
})
