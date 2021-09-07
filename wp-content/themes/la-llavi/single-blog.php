<?php 
template('header/header-content.php');
?>
<section class="blog">
    <?php the_title();?>
    <?php the_content();?>
</section>
<?php 
template('footer/footer-content.php');
?>