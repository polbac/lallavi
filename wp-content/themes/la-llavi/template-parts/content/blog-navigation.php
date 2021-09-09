<div class='blog-navigation'>
    <?php 
    $previous_post_url = get_adjacent_post(false,'',true) ? get_permalink( get_adjacent_post(false,'',true)->ID ) : '';        
    $next_post_url = get_adjacent_post(false,'',false) ? get_permalink( get_adjacent_post(false,'',false)->ID ) : '';

    ?>
    
    <?php echo $previous_post_url ? '<a class="prev" href="' .  $previous_post_url . '">Anterior</a>' : '<p></p>'; ?>
    
    <a class="archive">Archivo</a>
    <?php echo  $next_post_url ? '<a class="next" href="' .  $next_post_url . '">Siguiente</a>' : '<p></p>'; ?>
</div>

<div class="blog-list">
    <?php
    $posts = new WP_Query(["post_type" => "blog"]);
    
    foreach($posts->posts as $post){
        
    ?>
        <a href="<?php echo get_permalink( get_the_id()); ?>">
            <?php $post->post_title ?>
        </a>
    <?php } ?>
</div>