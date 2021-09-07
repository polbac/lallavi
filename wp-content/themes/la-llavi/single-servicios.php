<?php 
$GLOBALS["THEME_CLASS"] = 'orange';
template('header/header-content.php');
?>
<section class="servicios middle-center-menu"  data-aos="fade-in" data-aos-duration="2000">
    <?php the_content();?>
</section>
<?php 
template('footer/footer-content.php');
?>