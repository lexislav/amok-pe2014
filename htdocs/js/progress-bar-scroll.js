/**
 * Created by hotovec on 22.9.2014.
 */
$(function () {

    Draggable.create("#drg-progress-bar", {
        type: "scrollLeft",
        edgeResistance: .5,
        throwProps: true,
        bounds: "#drg-progress-bar-bounds",
        onThrowUpdate: function () {
            ///setPos(this.x);
        },
        onDrag: function () {
            //setPos(this.x);
        }
    });


});
