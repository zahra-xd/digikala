$('.sub-menu-right-list-a').hover(function() {

    $(".sub-menu-right-list-a").removeClass("active")
    $(this).addClass("active");
    var indexr = $(this).index();

    $(".sub-menu-left-section .section").hide();
    $(".sub-menu-left-section .section").eq(indexr).show();
})

function hover() {

    var navLis = $('.nav-level-1-li');
    var navUl = $('.nav-level-1-ul');
    var offsetleftUl = navUl.offset().left;
    // console.log(offsetleftUl);
    var widthUl = navUl.width();
    // console.log(widthUl);
    var navHover = $('.nav-hover');

    navLis.hover(function() {
        var self = $(this);
        var widthCurrentLi = self.width();
        // console.log(widthCurrentLi);
        var offsetleftCurrentLi = self.offset().left;
        // console.log(offsetleftCurrentLi);
        navHover.css({
            'width': widthCurrentLi
        })
        navHover.css({
            'right': widthUl - (offsetleftCurrentLi + widthCurrentLi) + offsetleftUl
        });

        navHover.css('transform', 'scalex(1)');
        $('.t-header-search-lately').hide();
        $('.input-t-header-search').removeClass('bg-white')
        if (self.hasClass('has-sub')) {
            $('.overlay').addClass('is-active');
        }
    }, function() {
        $('.overlay').removeClass('is-active');
        navHover.css('transform', 'scalex(0)');
    })

}

hover();
window.onresize = function() {
    hover()
}