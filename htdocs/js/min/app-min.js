/**
 * Created by hotovec on 25.9.2014.
 */

$(function () {

    $("#top-nav .m-nav--button").click(function() {
        var el = $(this);
        console.log("c");
        el.parent().toggleClass("is-opened");
    });

});
