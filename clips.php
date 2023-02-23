<?php get_header(); ?>

<!-- singles/ videos de youtube -->

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="cajaclips">
                <h1><?php the_field('textosaga'); ?></h1>
                <div class="linea-amarilla"></div>
            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-6">

           
                <h2 class="tf" >TF1</h2>
                <div class="cajavideos">
                <?php the_field('video'); ?>
                </div>


        </div>
        <div class="col-md-6">
            <div class="cajavideos">
            <?php the_field('video2'); ?>
            </div>
       


        </div>
        
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-6">

           
                <h2 class="tf" >TF2</h2>
                <div class="cajavideos">
                <?php the_field('videotf2'); ?>
                </div>


        </div>
        <div class="col-md-6">
            <div class="cajavideos">
            <?php the_field('videotf2_2'); ?>
            </div>
       


        </div>
        
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-6">

           
                <h2 class="tf" >TF3</h2>
                <div class="cajavideos">
                <?php the_field('videotf3'); ?>
                </div>


        </div>
        <div class="col-md-6">
            <div class="cajavideos">
            <?php the_field('videotf3_2'); ?>
            </div>
       


        </div>
        
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>
<div class="container-fluid my-5">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-6">

           
                <h2 class="tf" >TF4</h2>
                <div class="cajavideos">
                <?php the_field('videotf4'); ?>
                </div>


        </div>
        <div class="col-md-6">
            <div class="cajavideos">
            <?php the_field('videotf4_2'); ?>
            </div>
       


        </div>
        
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>
<div class="container-fluid my-5">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-6">

           
                <h2 class="tf" >TF5</h2>
                <div class="cajavideos">
                <?php the_field('videotf5'); ?>
                </div>
               


        </div>
        <div class="col-md-6">
            <div class="cajavideos">
            <?php the_field('videotf5_2'); ?>
            </div>
            <div class="mt-5 botonatras">
                <a class="btn btn-warning atras" href="<?=$_SERVER["HTTP_REFERER"]?>">Atras</a>
                </div>
                
       


        </div>
        
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>


               

<?php get_sidebar(); ?>
<?php get_footer(); ?>