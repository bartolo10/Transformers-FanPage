<?php
/*
Template Name: rodaje
*/
?>
<?php get_header(); ?>

<!-- titulo rodaje  -->

<div class="container-fluid ">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=filmacion"); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-12 mt-5">
            <div class="textobay">
                <h2><?php the_title(); ?></h2>
                <div class="linea-amarilla4"></div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-- imagen representativa -->

<div class="container-fluid">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=filmacion"); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-12 ">
            <div class="imagengrande">
                <?php 
                    $image = get_field('imagen_grande_saga');
                    if( !empty( $image ) ):  ?>
                <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-- animacion -->

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mx-auto">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=filmaciongif"); ?>
            <?php while (have_posts()) : the_post(); ?>


            <?php 
                    $image = get_field('imagen_2');
                    if( !empty( $image ) ):  ?>
            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>


            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<!-- slide director y informacion  -->

<div class="container ">
    <div class="row">
        <div class="col-md-6">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=filmacion2"); ?>
            <?php while (have_posts()) : the_post(); ?>

            <h2 class="photos"><?php the_title(); ?></h2>

            <?php the_field('sliderbay'); ?>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="col-md-6">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=michael-bay"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="michaelbay2">
                <h2><?php the_title(); ?> </h2>
                <h4> <?php the_content(); ?> </h4>
            </div>
            <div class="cajalink">
                <h5><?php the_field('conoce'); ?> </h5>
                <a href="#" onclick="openwindow()">ABRIR</a>
                <a href="#" onclick="closewindow()">CERRAR</a>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>


<!-- rodaje peliculas -->

<section>
    <div class="container  mt-5">
        <div class="row">

            <div class="col-md-6">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=michael-bay"); ?>
                <?php while (have_posts()) : the_post(); ?>

                <h2 class="rodajesvideos"><?php the_field('titulosaga'); ?></h2>
                <div class="cajavideos">
                    <?php the_field('video'); ?>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="col-md-6">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=rodajetf3"); ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="rodajetf3">
                    <h2><?php the_title(); ?> </h2>
                </div>
                <div class="cajavideos">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190123.86879048817!2d-87.76987388359375!3d41.8781136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20Illinois%2C%20EE.%20UU.!5e0!3m2!1ses!2scl!4v1657244546801!5m2!1ses!2scl"
                        width="500" height="280" style="border: 2px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>

        </div>
    </div>
</section>

<!-- videos de filmacion -->

<section>
    <div class="container">
        <div class="row mt-5">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=michael-bay"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-10 mx-auto">

              <h2 class="rodajesvideos"><?php the_field('titulo'); ?></h2>
           
            </div>
            <?php endwhile; ?>
            
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-5">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=videosrodaje&showposts=2&paged=$paged"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-6">
                <?php the_field('video'); ?>
           
            </div>
            <?php endwhile; ?>
            <div class="paginacion">
                <?php wp_pagenavi(); ?>
            </div>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>