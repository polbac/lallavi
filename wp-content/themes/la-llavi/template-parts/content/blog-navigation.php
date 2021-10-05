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
    <?php
    $posts = new WP_Query(["post_type" => "blog"]);
    
    foreach($posts->posts as $p){
        
    ?>
        <a href="<?php echo get_permalink( get_the_id()); ?>">
            <?php echo $p->post_title ?>
    <?php } ?>
</div>