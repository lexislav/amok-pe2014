/**
 * Created by hotovec on 25.9.2014.
 */

$(function () {

    $(".m-nav--button").click(function() {
        var el = $(this);
        //el.parent().toggleClass("is-opened");
        $(".m-nav--overlay").fadeIn(80);
    });

    $(".m-nav--overlay").click(function() {
        var el = $(this);
        //el.parent().toggleClass("is-opened");
        $(".m-nav--overlay").fadeOut(60);
    });



});
