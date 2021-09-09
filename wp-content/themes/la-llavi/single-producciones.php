<?php 
template('header/header-content.php');
?>
<section class="producciones middle-center-menu" >
    <h4><?php the_title();?></h4>

    <?php 
    foreach(CFS()->get('producciones', FALSE) as &$im) {
        echo "<div class='producciones-item' data-weight='" . reset($im['peso']) ."' x='0' y='0'>
            <a href='" . $im['link'] . "' target='_blank'>    
                <img width='100%' data-src='" . $im['imagen'] . "' />
            </a>    
        </div>";
    } 
    ?>

</section>
<?php 
template('footer/footer-content.php');
?>