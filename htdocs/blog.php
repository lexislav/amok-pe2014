<?php include "templates/html-header.php"; ?>
<body class="l-page l-page_blog">
<?php include "templates/inc-topbar.php"; ?>

<div class="m-theme mgr-full">
    <div class="row">
        <div class="large-6 columns">Zpravodaj Pavilonu</div>
        <div class="large-6 columns">
            sekce
        </div>
    </div>
</div>

<div class="row">
    <div class="small-12 large-6 columns">
        <article class="m-blog-item mm-subhero mm-featured">
            <header>
                <a href="/single.php" title="">
                    <div class="m-item--image"><img src="/assets/modul.png" alt="" /></div>
                    <h1 class="m-item--hed"><a href="/single.php" title="">title</a></h1>

                    <div class="m-item--meta"><a href="/single.php" class="m-item--section">kategorie</a></div>
                </a>
            </header>
        </article>
    </div>
    <div class="small-12 large-6 columns">
        <article class="m-blog-item mm-subhero mm-featured">
            <header>
                <a href="/single.php" title="">
                    <div class="m-item--image"><img src="/assets/modul.png" alt="" /></div>
                    <h1 class="m-item--hed"><a href="/single.php" title="">title</a></h1>

                    <div class="m-item--meta"><a href="/blog.php" class="m-item--section">kategorie</a></div>
                </a>
            </header>
        </article>
    </div>
</div>

<div class="row">
    <?php for ($i = 1; $i <= 8; $i++) { ?>
        <div class="small-12 medium-6 large-4 xlarge-3 columns">
            <article class="m-blog-item">
                <header>
                    <a href="/single.php" title="">
                        <div class="m-item--image"><img src="/assets/modul.png" alt="" /></div>
                        <h1 class="m-item--hed"><a href="/single.php" title="">title</a></h1>

                        <div class="m-item--meta"><a href="/blog.php" class="m-item--section">kategorie</a></div>
                    </a>
                </header>
            </article>
        </div>
    <?php } ?>
    <!-- ending-->
    <div class="small-12 medium-6 large-4 xlarge-3 columns end">
        <article class="m-blog-item mm-featured">
            <header>
                <a href="/single.php" title="">
                    <div class="m-item--image"><img src="/assets/modul.png" alt="" /></div>
                    <h1 class="m-item--hed"><a href="/single.php" title="">title</a></h1>

                    <div class="m-item--meta"><a href="/blog.php" class="m-item--section">kategorie</a></div>
                </a>
            </header>
        </article>
    </div>
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


<div class="row m-list">
    <div class="small-12 medium-12 large-2 xlarge-3 columns">ikona</div>
    <div class="small-12 medium-6 large-5 xlarge-4 columns">
        <header>
        <h2>Další články o pavilonu & EXPO2015</h2>
        </header>
        <?php for ($i = 1; $i <= 9; $i++) { ?>
            <article class="m-item">
                <header>
                    <h1 class="m-item--hed"><a href="/single.php" title="">sgjkhlsf fgkshdfgk gsd fgkjhsdfg sdfklgjhsd fgsd fgsd fgs dfgsd fgsdfgds</a></h1>

                    <div class="m-item--meta">
                        <div class="m-item--date">datum a dalsi</div>
                    </div>
                </header>
            </article>
        <?php } ?>
    </div>

    <div class="small-12 medium-6 large-5 xlarge-4 xlarge-offset-1 columns">
        <header>
            <h2>Další články o pavilonu & EXPO2015</h2>
        </header>
        <?php for ($i = 1; $i <= 3; $i++) { ?>
            <article class="m-item mm-featured">
                <header>
                    <h1 class="m-item--hed"><a href="/single.php" title="">title</a></h1>

                    <div class="m-item--meta"><div class="m-item--date">datum a dalsi</div></div>
                </header>
            </article>
        <?php } ?>
    </div>
</div>



<?php include "templates/inc-footer-partner.php"; ?>
<?php include "templates/inc-footer.php"; ?>

<script src="/js/app.js"></script>
</body>
<?php include "templates/html-footer.php"; ?>
