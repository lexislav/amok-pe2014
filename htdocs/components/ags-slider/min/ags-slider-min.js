function setSize(){rootWidth=root.width(),rootHeight=root.height(),skewOffset=Math.tan(Math.radians(skewAngle))*rootHeight,bgcontent.width(rootWidth),bgcontent.height(rootHeight),dragger.height(rootHeight),dragger.width(skewOffset),dragger.css("top",rootHeight/2-dragger.height()/2),dragger.css("margin-left",-(skewOffset/2)),inner.width(rootWidth),inner.transition({skewX:"-"+skewAngle+"deg",delay:100}),content.width(rootWidth+skewOffset),contentImage.width(rootWidth+skewOffset),content.transition({skewX:skewAngle+"deg",delay:100}),inner.css("margin-left",-(skewOffset/2))}function setPos(t){var e=(t+skewOffset/2)/(rootWidth+skewOffset);inner.width((rootWidth+skewOffset)*e)}function doneResizing(){console.log("res"),setSize(),setPos(currentPos)}Math.degrees=function(t){return t*(180/Math.PI)},Math.radians=function(t){return t*(Math.PI/180)};var currentPos,skewAngle=10,root=$("#ags-slider"),inner=root.find(".inner"),bgcontent=root.find(".ags-bg--content"),content=root.find(".ags-front--content"),overlayLeft=bgcontent.find(".overlay"),overlayRight=content.find(".overlay"),contentImage=content.find("img"),dragger=root.find(".dragger"),cover=root.find(".cover"),rootWidth,rootHeight,id,skewOffset;$(function(){console.log("ready!"),currentPos=$("#ags-slider").width()/6*4.3,cover.fadeOut(1e3),setSize(),setPos(currentPos),Draggable.create("#ags-slider > .dragger",{type:"left",edgeResistance:.5,throwProps:!0,bounds:"#ags-slider-bounds",onThrowUpdate:function(){setPos(this.x)},onDrag:function(){setPos(this.x)}}),$("#ags-slider > .dragger").css("left",currentPos),$(window).resize(function(){clearTimeout(id),id=setTimeout(doneResizing,30)})});