$(document).ready(function() {
    console.log('ok');
    $('.js-section').waypoint(function(direction) {
        if (direction == "down") {
            $('.bloc-menu-visible').addClass('masquer');
            $('.row-menu .menu-fixed').addClass('afficher')
        }else{
            $('.bloc-menu-visible').removeClass('masquer');
            $('.row-menu .menu-fixed').removeClass('afficher')
        }
    })
})