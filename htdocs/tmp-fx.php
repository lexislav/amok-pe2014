<?php include "templates/html-header.php"; ?>
<body class="l-page l-page_home">

<?php include "templates/inc-topbar.php"; ?>

<div class="row">
    <div class="medium-12 columns">
    <div class="l-schema m-schema" >

        <div class="m-schema--image np1"></div>
        <div class="m-schema--image np2" data-anchor-target="#animAnchor2" data-center-top="opacity:0; transform:translate(0px,0px)" data-top="opacity:1 ;transform:translate(0px,100px) "></div>
        <div class="m-schema--image np3" data-anchor-target="#animAnchor3" data-center-top="opacity:0; transform:translate(0px,0px)" data-top="opacity:1 ;transform:translate(0px,100px) "></div>
        <div class="m-schema--image np4" data-anchor-target="#animAnchor4" data-center-top="opacity:0; transform:translate(0px,0px)" data-top="opacity:1 ;transform:translate(0px,100px) "></div>

    </div>
    </div>
</div>

<div id="skrollr-body">

    <header>
        <div id="ags-slider" class="ags-slider">

            <div class="ags-bg--content">
                <div class="infobox">Hello this is background content</div>
                <div class="overlay">over</div>
            </div>
            <div class="inner">
                <div class="content">
                    <div class="ags-front--content">
                        <div class="infobox2">Hello this is background content</div>
                        <div class="overlay">over</div>
                    </div>
                </div>
            </div>
            <div class="dragger">
                <img src="/assets/dragbutton.svg" alt="" class="drag-button" />
            </div>
            <div class="cover"></div>
        </div>
    </header>

    <div class="m-schema-control" id="animAnchor"></div>
    <div class="m-schema-control" id="animAnchor2"></div>
    <div class="m-schema-control" id="animAnchor3"></div>
    <div class="m-schema-control" id="animAnchor4"></div>


    <?php include("templates/inc-footer.php"); ?>

</div>

<script src="/components/ags-slider/ags-slider.js"></script>
<script type="text/javascript">
    var s = skrollr.init();
</script>
</body>

<?php include "templates/html-footer.php"; ?>
