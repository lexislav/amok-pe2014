Math.degrees = function (rad) {
    return rad * (180 / Math.PI);
};

Math.radians = function (deg) {
    return deg * (Math.PI / 180);
};

var currentPos;
var skewAngle = 10;
var draggerButtonBottomOffset = 200;
var root = $("#ags-slider");
var inner = root.find(".inner");
var bgcontent = root.find(".ags-bg--content");
var content = root.find(".ags-front--content");
var overlayLeft = bgcontent.find(".overlay");
var overlayRight = content.find(".overlay");
var contentImage = content.find("img");
var dragger = root.find(".dragger");
var dragButton = dragger.find(".drag-button");
var dragButtonMidOffset = (dragButton.width() / 2);
var cover = root.find(".cover");
var rootWidth;
var rootHeight;
var id;

var skewOffset;

root.css('height', $(window).height() );
overlayLeft.css("opacity", 0);
overlayRight.css("opacity", 0);


function setSize() {
    rootWidth = root.width();
    rootHeight = root.height();
    skewOffset = Math.tan(Math.radians(skewAngle)) * rootHeight;
    dragButtonOffset = Math.tan(Math.radians(skewAngle)) * 100;

    bgcontent.width(rootWidth);
    bgcontent.height(rootHeight);

    dragger.height(rootHeight);
    dragger.width(skewOffset);
    dragger.css('top', (rootHeight / 2) - (dragger.height() / 2));
    dragger.css('margin-left', - (skewOffset / 2));

    tb = ((draggerButtonBottomOffset / Math.sin(Math.radians(90 - skewAngle)))) * Math.cos(Math.radians(90 - skewAngle));

    dragButton.css('top', (dragger.height() - draggerButtonBottomOffset));
    dragButton.css('left', tb - dragButtonMidOffset);

    inner.width(rootWidth);
    inner.transition({ skewX: '-' + skewAngle + 'deg', delay: 100 });

    content.width(rootWidth + skewOffset);
    contentImage.width(rootWidth + skewOffset);
    content.transition({ skewX: skewAngle + 'deg', delay: 100 });

    inner.css('margin-left', - (skewOffset / 2)); // skew compensate
}

function setPos(dragPos) {
    var perc = ((dragPos + (skewOffset / 2)) / (rootWidth + skewOffset));


    //overlayLeft.css("opacity", perc - 0.3);
    //overlayRight.css("opacity", (1 - perc) -0.3);
    inner.width((rootWidth + skewOffset) * perc);

}

function doneResizing() {
    console.log("res");
    setSize();
    setPos(currentPos);
    //$("#angle-slider > .dragger").css("left", currentPos);
}

$(function () {
    console.log("ready!");
    currentPos = $("#ags-slider").width() / 6 * 4.3;

    /*cover.transition({
        opacity: 0,
    });*/

    cover.fadeOut(1000);

    setSize();
    setPos(currentPos);

    Draggable.create("#ags-slider > .dragger", {
        type: "left",
        edgeResistance:.5,
        throwProps: true,
        bounds: "#ags-slider-bounds",
        onThrowUpdate: function () {
            setPos(this.x);
            //console.log(">> " + this.x );
        },
        onDrag: function () {
            setPos(this.x);
            //console.log(">> " + this.x );
        }
    });

    $("#ags-slider > .dragger").css("left", currentPos);


    $(window).resize(function () {
        clearTimeout(id);
        id = setTimeout(doneResizing, 30);
    });


});
