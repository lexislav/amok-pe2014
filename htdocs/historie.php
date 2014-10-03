<?php include "templates/html-header.php"; ?>
<body class="l-page l-page_history">
<?php include "templates/inc-topbar.php"; ?>

<div class="m-carousel">
    <div class="item">
        <img src="/assets/sky.jpg" alt="slide 1" />

        <div class="orbit-caption">
            Seznamte se s historií
            českých pavilonů EXPO
        </div>
    </div>
    <div class="item">
        <img src="/assets/pavilon-theme.png" alt="slide 1" />

        <div class="orbit-caption">
            Seznamte se s historií
            českých pavilonů EXPO
        </div>
    </div>
    <div class="item">
        <img src="/assets/file-a.jpg" alt="slide 1" />

        <div class="orbit-caption">
            Seznamte se s historií
            českých pavilonů EXPO
        </div>
    </div>
</div>


<div class="row">
    <?php for ($i = 1; $i <= 20; $i++) { ?>
        <div class="small-6 large-3 columns">
            <div class="m-story mm-history">
                <header>
                    <div class="m-item--image" style="background-image: url('http://foundation.zurb.com/docs/assets/img/examples/satelite.jpg')">
                        <a href="single.php"><img src="http://foundation.zurb.com/docs/assets/img/examples/satelite.jpg"></a>
                    </div>


                    <div class="m-item--summary">
                        <h1 class="m-item--hed">1968</h1>
                        <div class="m-item--description">Paříž</div>
                    </div>
                </header>
            </div>
        </div>
    <?php } ?>
</div>




<?php include "templates/inc-footer-partner.php"; ?>
<?php include "templates/inc-footer.php"; ?>

<script type="text/javascript" src="components/slick/slick/slick.min.js"></script>


<script type="text/javascript">

    $(document).ready(function () {
        $('.m-carousel').slick({
            autoplay: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });

    });

</script>

<script src="/js/app.js"></script>

</body>
<?php include "templates/html-footer.php"; ?>
