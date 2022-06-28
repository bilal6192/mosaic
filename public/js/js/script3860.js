function openNav() {
    document.getElementById("res-nav").style.width = "100%";
}
function closeNav() {
    document.getElementById("res-nav").style.width = "0%";
}

//end of document ready
window.addEventListener("scroll",function (){
    var $nav = $(".navbar-light");
    var $search_form_top = $(".search_form_top");
    $nav.toggleClass('scroll_background_important', $(this).scrollTop() > $nav.height());
    $search_form_top.toggleClass('search_form_display', $(this).scrollTop() > $nav.height());
});

$(".res-search").click(function () {
    $(".drop-search").slideToggle("slow");
});



