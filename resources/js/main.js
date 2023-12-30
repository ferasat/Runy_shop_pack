var navItems = document.querySelectorAll(".mobile-bottom-nav__item");
navItems.forEach(function(e, i) {
    e.addEventListener("click", function(e) {
        navItems.forEach(function(e2, i2) {
            e2.classList.remove("mobile-bottom-nav__item--active");
        })
        this.classList.add("mobile-bottom-nav__item--active");
    });
});



/*---- custom-dropdown ---*/
$(function() {

    $('.custom-dropdown').on('show.bs.dropdown', function() {
        var that = $(this);
        setTimeout(function(){
            that.find('.dropdown-menu').addClass('active');
        }, 100);


    });
    $('.custom-dropdown').on('hide.bs.dropdown', function() {
        $(this).find('.dropdown-menu').removeClass('active');
    });

});
