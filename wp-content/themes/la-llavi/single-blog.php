<?php 
$GLOBALS["THEME_CLASS"] = 'gray';
template('header/header-content.php');
?>
<section class="blog blog-content">
    <h4 class="alpina"><?php the_title();?></h4>
    <?php the_content();?>
    <?php template('content/blog-navigation.php');?>
</section>
<?php 
template('footer/footer-content.php');
?>