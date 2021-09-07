<?php 
 $GLOBALS["THEME_CLASS"] = 'gray';
template('header/header-content.php');
?>
<section class="nosotrxs nosotrxs-que-es-la-llavi" data-aos="fade-up" data-aos-duration="2000">
    <h2 class="alpina"><?php the_title();?></h2>
    <div>

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
    
    
    
    
    </div>

    <div class="description">
    <?php
    echo CFS()->get('descripcion', FALSE);
    ?>
    </div>

    <div class="more-links">
        <a class="alpina hover-italic" href="<?php echo CFS()->get('mas_historia_link', FALSE);?>">Más historia</a>
        <a class="alpina hover-italic" href="<?php echo CFS()->get('ver_locacion_link', FALSE);?>">Ver locación</a>
    </div>
</section>
<?php 
template('footer/footer-content.php');
?>