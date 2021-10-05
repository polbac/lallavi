<div class='blog-navigation alpina'>
    <?php 
    $previous_post_url = get_adjacent_post(false,'',true) ? get_permalink( get_adjacent_post(false,'',true)->ID ) : '';        
    $next_post_url = get_adjacent_post(false,'',false) ? get_permalink( get_adjacent_post(false,'',false)->ID ) : '';
    
    if (isset($GLOBALS["HIDE_BLOG_BUTTONS"])) {
        $previous_post_url = '';
        $next_post_url = '';
    }
    ?>
    
    <?php echo $previous_post_url ? '<a class="prev" href="' .  $previous_post_url . '"><span>Anterior</span></a>' : '<p></p>'; ?>
    
    <a class="archive">Archivo</a>
    <?php echo  $next_post_url ? '<a class="next" href="' .  $next_post_url . '"><span>Siguiente</span></a>' : '<p></p>'; ?>
</div>

<div class="blog-list">
    <div id="close-blog-list">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
    </div>
    <?php
    $args = array(
        'numberposts'	=> NULL,
        'post_type'		=> 'blog'
    );
    $posts = get_posts( $args );
    
    foreach ( $posts as $post ) {
    ?>
        <a href="<?php echo get_permalink( $post->ID); ?>">
            <?php echo $post->post_title ?>
    <?php } ?>
</div>