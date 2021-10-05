<?php 
$GLOBALS["THEME_CLASS"] = 'gray';
template('header/header-content.php');
?>
<section class="blog blog-content">
    <h4 class="alpina"><?php the_title();?></h4>
    <?php
    if (CFS()->get('slider', FALSE)) {
    ?>
    <div class="slider-container">
        <div class="swiper">
            <div class="swiper-wrapper">
                    <?php
                    foreach(CFS()->get('slider', FALSE) as &$im) {
                        echo "<div class='swiper-slide'><img width='100%' src='" . $im['imagen'] . "' /></div>";
                    } 
                    ?>
            </div>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <?php
    }
    ?>

    <?php the_content();?>
</section>

<?php
template('content/blog-navigation.php');
template('footer/footer-content.php');
?>