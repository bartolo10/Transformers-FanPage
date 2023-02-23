<?php
/*
Template Name: saga
*/
?>

<?php get_header(); ?>

<!-- titulo de saga -->

<section>
    <div class="container-fluid  ">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=seccion1saga"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-12">

                <div class="grande2 ">
                    <?php 
                    $image = get_field('imagendino');
                    if( !empty( $image ) ):  ?>
                    <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                    <div class="textogrande">
                        <h2><?php the_field('dino'); ?><span class="conoce">Michael Bay</span></h2>
                        <div class="linea-amarilla"></div>
                    </div>

                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!-- boton para mirar escenas -->

<section>
    <div class="container text-center">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=sagacompleta"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-8 mx-auto">
                <div class="textopregunta">
                    <?php 
                    $image = get_field('imagendino');
                    if( !empty( $image ) ):  ?>
                    <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>

                    <div class="linea-amarilla"></div>

                    <h5 class="mt-5 tituloclip"><?php the_field('titulosaga'); ?></h5>
                    <a href="<?php the_permalink(); ?>" type="button" class="btn btn-warning text-center">VIDEO CLIPS</a>

                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!-- comienzo de imagenes y textos de toda la saga  -->

<section>
    <div class="container">
        <div class="row  ">
            <div class="col-md-8 mx-auto">
                <div data-aos="fade-right">
                    <div class="iii">
                        <h2>V</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row  separacion">
            <div class="col-md-12 ">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=imagengrande1"); ?>
                <?php while (have_posts()) : the_post(); ?>
                <div data-aos="fade-down">
                    <div class="imagengrande">
                        <?php 
                    $image = get_field('imagendino');
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
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=imagenytexto"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-7 text-center">
                <div data-aos="fade-up" <div class="textolast ">
                    <h6><?php the_field('subtitulosaga'); ?></h6>
                    <h2><?php the_field('titulosaga'); ?></h2>
                    <p><?php the_field('textosaga'); ?></p>

                </div>

            </div>
            <div class="col-md-5">
                <div data-aos="zoom-out">
                    <div class="imagengrande">
                        <?php 
                    $image = get_field('imagensaga');
                    if( !empty( $image ) ):  ?>
                        <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                    </div>
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
    <div class="container">
        <div class="row  separacion">
            <div class="col-md-8 mx-auto">
                <div data-aos="fade-right">
                    <div class="iii">
                        <h2>IV</h2>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row  separacion">
            <div class="col-md-12">

                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=imagengrande2"); ?>
                <?php while (have_posts()) : the_post(); ?>
                <div data-aos="fade-down">
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
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=imagenytexto2"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-7 text-center">
                <div data-aos="fade-up">
                    <div class="textolast ">

                        <p><?php the_field('textosaga'); ?></p>

                        <h2><?php the_field('titulosaga'); ?></h2>

                        <h6><?php the_field('subtitulosaga'); ?></h6>

                    </div>

                </div>

            </div>
            <div class="col-md-5">
                <div data-aos="zoom-out">
                    <div class="imagengrande">
                        <?php 
                    $image = get_field('imagensaga');
                    if( !empty( $image ) ):  ?>
                        <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                    </div>
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
    <div class="container">
        <div class="row  separacion">
            <div class="col-md-8 mx-auto">
                <div data-aos="fade-right">
                    <div class="iii">
                        <h2>III</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row  separacion">
            <div class="col-md-12">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=imagengrande3"); ?>
                <?php while (have_posts()) : the_post(); ?>
                <div data-aos="fade-down">
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
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=imagenytexto3"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-7 text-center">
                <div data-aos="fade-up">
                    <div class="textolast ">


                        <h6><?php the_field('subtitulosaga'); ?></h6>

                        <h2><?php the_field('titulosaga'); ?></h2>

                        <p><?php the_field('textosaga'); ?></p>

                    </div>
                </div>

            </div>
            <div class="col-md-5">
                <div data-aos="zoom-out">
                    <div class="imagengrande">
                        <?php 
                    $image = get_field('imagensaga');
                    if( !empty( $image ) ):  ?>
                        <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                    </div>
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
    <div class="container">
        <div class="row  separacion">
            <div class="col-md-8 mx-auto">
                <div data-aos="fade-right">
                    <div class="iii">
                        <h2>II</h2>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row  separacion">
            <div class="col-md-12">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=imagengrande4"); ?>
                <?php while (have_posts()) : the_post(); ?>
                <div data-aos="fade-down">
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
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=imagenytexto4"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-7 text-center">
                <div data-aos="fade-up">
                    <div class="textolast ">

                        <h6><?php the_field('subtitulosaga'); ?></h6>



                        <h2><?php the_field('titulosaga'); ?></h2>

                        <p><?php the_field('textosaga'); ?></p>

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div data-aos="zoom-out">
                    <div class="imagengrande">
                        <?php 
                    $image = get_field('imagensaga');
                    if( !empty( $image ) ):  ?>
                        <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                    </div>
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
    <div class="container">
        <div class="row  separacion">
            <div class="col-md-8 mx-auto">
                <div data-aos="fade-right">
                    <div class="iii">
                        <h2>I</h2>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row  separacion">
            <div class="col-md-12">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=imagengrande5"); ?>
                <?php while (have_posts()) : the_post(); ?>
                <div data-aos="fade-down">
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
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=imagenytexto5"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-7 text-center">
                <div data-aos="fade-up">
                    <div class="textolast ">

                        <h6><?php the_field('subtitulosaga'); ?></h6>



                        <h2><?php the_field('titulosaga'); ?></h2>

                        <p><?php the_field('textosaga'); ?></p>

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div data-aos="zoom-out">
                    <div class="imagengrande">
                        <?php 
                    $image = get_field('imagensaga');
                    if( !empty( $image ) ):  ?>
                        <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                    </div>
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