<?php get_header(); ?>

<!-- slide inicio -->

<section>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 text-center texto">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=inicio"); ?>
                <?php while (have_posts()) : the_post(); ?>

               
                <div class="imagenprincipal mx-auto">

                    <?php the_field('slide_inicio'); ?>

                </div>



                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>
</section>

<!-- secciones destacadas -->

<section>
<div class="container-fluid  mt-5">
            <div class="row separacion">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=dino"); ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-5">
                    <div class="textotf2">
                    
                        <h2><span class="conoce">¡VISITA NUESTRA</span></h2><h2><?php the_field('dino'); ?></h2>
                        <a  href="rodaje"><button type="button" class="btn btn-warning  videoboton ">VISITA AQUÍ</button></a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="tf2">
                    <?php 
                    $image = get_field('imagendino');
                    if( !empty( $image ) ):  ?>
                <img src="<?php echo esc_url($image['url']);  ?>"  alt="<?php the_title(); ?>" />
                <?php endif; ?>
                    
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
</section>




<section>
<div class="container-fluid  mt-5">
            <div class="row separacion">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=auto"); ?>
                <?php while (have_posts()) : the_post(); ?>
                
                <div class="col-md-7">
                    <div class="tf2">
                    <?php 
                    $image = get_field('imagendino');
                    if( !empty( $image ) ):  ?>
                <img src="<?php echo esc_url($image['url']);  ?>"  alt="<?php the_title(); ?>" />
                <?php endif; ?>
                    
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="textotf2">
                    
                        <h2><span class="conoce">¡MIRA NUESTRA LISTA</span></h2><h2><?php the_field('dino'); ?></h2>
                        <a  href="vehiculos"><button type="button" class="btn btn-warning  videoboton ">VISITA AQUÍ</button></a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
</section>


<section>
<div class="container-fluid  mt-5">
            <div class="row separacion">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=tf2inicio"); ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-5">
                    <div class="textotf2">
                    
                        <h2><span class="conoce">¡CONOCE MÁS</span></h2><h2><?php the_field('dino'); ?></h2>
                        <a  href="videojuegos"><button type="button" class="btn btn-warning  videoboton ">VISITA AQUÍ</button></a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="tf2">
                    <?php 
                    $image = get_field('imagendino');
                    if( !empty( $image ) ):  ?>
                <img src="<?php echo esc_url($image['url']);  ?>"  alt="<?php the_title(); ?>" />
                <?php endif; ?>
                    
                    </div>
                </div>
               
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
</section>





<?php get_sidebar(); ?>
<?php get_footer(); ?>