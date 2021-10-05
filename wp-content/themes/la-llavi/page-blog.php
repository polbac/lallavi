<?php 
$GLOBALS["THEME_CLASS"] = 'gray';
template('header/header-content.php');
?>
<section class="blog blog-home">
    
    <h4 class="alpina">Blog</h4>
</section>

<?php 
$GLOBALS["HIDE_BLOG_BUTTONS"] = 'gray';
template('content/blog-navigation.php');
template('footer/footer-content.php');
?>