<?php include "templates/html-header.php"; ?>
<body class="l-page l-page_single">
<?php include "templates/inc-topbar.php"; ?>

<div class="row">
    <article class="m-story">


        <div class="row">
            <div class="large-6 columns">
                <article class="mm-featured">
                    <header>
                        <a href="" target="_blank" title="">
                            <div class="m-item--image"><img src="/assets/modul.png" alt="" /></div>
                            <h1 class="m-item--hed"><a href="" target="_blank" title="">title</a></h1>
                            <div class="m-item--meta">kategorie</div>
                        </a>
                    </header>
                </article>
            </div>
            <div class="large-6 columns">
                <article class="mm-featured">
                    <header>
                        <a href="" target="_blank" title="">
                            <div class="m-item--image"><img src="/assets/modul.png" alt="" /></div>
                            <h1 class="m-item--hed"><a href="" target="_blank" title="">title</a></h1>
                            <div class="m-item--meta">kategorie</div>
                        </a>
                    </header>
                </article>
            </div>
        </div>

        <div class="row">
            <?php for ($i = 1; $i <= 8; $i++) { ?>
                <div class="large-3 columns">
                    <article class="mm-featured">
                        <header>
                            <a href="" target="_blank" title="">
                                <div class="m-item--image"><img src="/assets/modul.png" alt="" /></div>
                                <h1 class="m-item--hed"><a href="" target="_blank" title="">title</a></h1>
                                <div class="m-item--meta">kategorie</div>
                            </a>
                        </header>
                    </article>
                </div>
            <?php } ?>
        </div>


        <div class="row">
            <div class="small-12 large-3 small-centered columns">
                <ul class="pagination">
                    <li class="arrow unavailable"><a href="">&laquo;</a></li>
                    <li class="current"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li class="unavailable"><a href="">&hellip;</a></li>
                    <li><a href="">13</a></li>
                    <li class="arrow"><a href="">&raquo;</a></li>
                </ul>
            </div>
        </div>


        <div class="row">
            <div class="large-3 columns">ikona</div>
            <div class="large-4 columns">

                <h2>Další články o pavilonu & EXPO2015</h2>
                 <?php for ($i = 1; $i <= 9; $i++) { ?>
                     <article class="mm-featured">
                         <header>
                                 <h1 class="m-item--hed"><a href="" target="_blank" title="">title</a></h1>
                                 <div class="m-item--meta">kategorie</div>
                         </header>
                     </article>
                  <?php } ?>
            </div>

            <div class="large-4 large-offset-1 columns">
                <h2>Další články o pavilonu & EXPO2015</h2>
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <article class="mm-featured">
                        <header>
                            <h1 class="m-item--hed"><a href="" target="_blank" title="">title</a></h1>
                            <div class="m-item--meta">kategorie</div>
                        </header>
                    </article>
                <?php } ?>
            </div>
        </div>


        <div class="row">
            <?php
            $totalImages = 16;
            for ($i = 1; $i <= $totalImages; $i++) {
                $gridclass = '';
                if ($i == $totalImages) {
                    $gridclass = 'end';
                }
                ?>
                <div class="small-6 medium-4 large-3 xlarge-2 columns <?php echo $gridclass; ?> ">
                    <img src="/assets/modul.png" alt="" />
                </div>
            <?php } ?>
        </div>

        <div class="row">
            <div class="small-12 columns">
                <div class="flex-video widescreen vimeo">
                    <iframe src="http://player.vimeo.com/video/60122989" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
            </div>
        </div>

    </article>
</div>

<?php include "templates/inc-footer-partner.php"; ?>
<?php include "templates/inc-footer.php"; ?>

<script src="/js/app.js"></script>
</body>
<?php include "templates/html-footer.php"; ?>
