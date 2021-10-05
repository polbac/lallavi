<?php 
$GLOBALS["THEME_CLASS"] = 'gray';
template('header/header-content.php');
?>
<section class="blog blog-home">
    
    <h4 class="alpina">Blog</h4>

    <div class="slider-container">
        <div class="swiper">
            <div class="swiper-wrapper">
    <?php
    $args = array(
        'numberposts'	=> NULL,
        'post_type'		=> 'blog'
    );
    $posts = get_posts( $args );
    
    foreach ( $posts as $post ) {
        $destacado = CFS()->get('destacado', $post->ID);
        if ($destacado) {
            $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
            echo "<div class='swiper-slide'><a href='" . get_post_permalink($post->ID) . "'><img width='100%' src='" . $image . "' /></a></div>";
        }
    }
    ?>
    </div>
    </div>
    </div>
</section>

<?php 
$GLOBALS["HIDE_BLOG_BUTTONS"] = 'gray';
template('content/blog-navigation.php');
template('footer/footer-content.php');
?>