<?php
/*
Template Name: videojuegos
*/
?>
<?php get_header(); ?>

<!-- titulo-->


<!-- presentacion pagina videojuegos -->


<div class="container-fluid ">
    <?php if (have_posts()) : ?>
    <?php query_posts("category_name=game"); ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="titulojuego text-center ">
                <h2><?php the_field('game'); ?></h2>
                <div class="linea-amarillaa"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="imagengrande">
                <?php 
                    $image = get_field('imagengame');
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

<!--   seccion ajax ( no funcionó)

<div class="container-fluid mt-5">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=game"); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-3 mx-auto">

            <button id="boton">Has click aqui para tu recompensa</button>
            <div id="llamado">

            </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>                                                 --> 

<!-- cambiar fondo -->

<div class="container mt-5">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=game"); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-4 mt-4 mb-4 text-center">
            <button class="btn botoncolor" onClick="colorbody()">MODO CLARO ☀️</button>

        </div>
        <div class="col-md-4 text-center">
            <div class="logoautob">
                <?php 
                    $image = get_field('imagensaga');
                    if( !empty( $image ) ):  ?>
                <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-4 mt-4 text-center">
            <button class="btn botoncolor2" onClick="colorbody2()">MODO OSCURO 🌙</button>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-- titulo juegos -->

<div class="container-fluid mt-5">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=game"); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-4 mx-auto">
            <div class="gamess">
                <h2><?php the_field('titulo'); ?></h2>
                <div class="linea-amarilla"></div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-- caratulas y descripcion de todos los juegos -->

<div class="container text-center my-3 ">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=juegos&showposts=6&paged=$paged"); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-4  mt-5 ">
            <div class="card cardcont card-body1">
                <?php   $image = get_field('caratula');
                    if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" class="img-thumbnail card-body4" alt="" />
                <?php endif; ?>
                <div class="card-body bg-gradient">
                    <h5 class="card-title"><?php the_field('titulo'); ?></h5>
                    <p class="card-text"><?php the_field('descripcion'); ?></p>

                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>




<!--formulario  -->

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=form"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="form">
                <h2 class="formulario"> <?php the_title(); ?> </h2>
                <p> <?php the_content(); ?> </p>
            </div>


            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>