<?php include "templates/html-header.php"; ?>
<body class="l-page l-page_blog">
<?php include "templates/inc-topbar.php"; ?>

<div class="row">

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

</div>

<?php include "templates/inc-footer-partner.php"; ?>
<?php include "templates/inc-footer.php"; ?>

<script src="/js/app.js"></script>
</body>
<?php include "templates/html-footer.php"; ?>
