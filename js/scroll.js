{
    var poziceHeader;
    var headerObsah;
}

function f() {
    headerObsah = document.getElementById("anchorScroll");
    poziceHeader = headerObsah.offsetTop;
}

$(window).scroll(function(e){
    var $el = $('.sectionObsah-static');
    var $el2 = $('.GoToUpContainer');
    var $el3 = $('.NavBar_Gridl');
    poziceHeader = headerObsah.offsetTop;
    var isPositionFixed = ($el.css('position') === 'fixed');

    if ($(this).scrollTop() > poziceHeader && !isPositionFixed){
        $el.css({'position': 'fixed', 'top': '0px', 'box-shadow:': '-1px 4px 10px -4px rgba(0,0,0,1)'});
        $el2.css({'display': 'flex'});
        //$el3.css({'margin-left': '0'});
    }
    if ($(this).scrollTop() < poziceHeader && isPositionFixed){
        $el.css({'position': 'static', 'top': '0px', 'box-shadow:': '0px 0px 0px 0px rgba(0,0,0,0)'});
        $el2.css({'display': 'none'});
    }
});

addEventListener('resize', (event) => {
    poziceHeader = headerObsah.offsetTop;

});