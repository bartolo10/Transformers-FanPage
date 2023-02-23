<?php
/*
Template Name: vehiculos
*/
?>
<?php get_header(); ?>

<!-- seccion principal  -->

<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=camarofondo"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="camarofondo">
                <div class="textofondo">
                    <h2><?php the_field('mira'); ?><span class="conoce">RODAJE DE FILMACION</span></h2>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<!--titulo  -->

<section>
    <div class="container text-center py-5">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=camarofondo"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-8 mx-auto">
                <div class="textopregunta">
                    <h2><?php the_title(); ?></h2>
                    <div class="linea-amarilla"></div>
                    <p><?php the_content(''); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!--seccion autos decepcticons  -->

<section>
    <div class="container mt-5">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=camarofondo"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-5 mx-auto">
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
</section>

<!--modal para caracteristicas de cada auto  -->

<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">

            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="container ">
    <?php if (have_posts()) : ?>
    <?php query_posts("category_name=camarofondo"); ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="row separacion">
        <div class="col-md-7">
            <div class="barricade">
                <h2><?php the_field('autodecepticon1'); ?></h2>
                <div class="text-center mb-5">
                    <button type="button" id="boton" class="btn btn-warning" data-bs-auto="Ford Mustang Saleen s281"
                        data-bs-texto="El motor es el V8 Coyote de 5.0 litros del Mustang GT preparado por la propia firma, que incluye un kit de sobrealimentación que eleva la potencia a 790 CV y 853 Nm de par máximo. Además del aumento de potencia cuenta con mejoras de bastidor, como nueva suspensión preparada por Saleen"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ACERCA DE ESTE AUTO
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto1barricade');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto3barricade');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto2barricade');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row separacion">
        <div class="col-md-7">
            <div class="barricade">
                <h2><?php the_field('autodecepticon2'); ?></h2>
                <div class="text-center mb-5">
                    <button type="button" id="boton" class="btn btn-warning"
                        data-bs-auto="Lamborghini Aventador Perankan"
                        data-bs-texto="El Lamborghini Aventador es un superdeportivo fabricado por Lamborghini desde el año 2012. Presentado en el Salón de Ginebra de 2011, se sitúa en lo más alto de la gama convencional de Lamborghini, por encima de los modelos Urus y Huracán, teniendo como principal reclamo el uso de un motor V12 atmosférico."
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ACERCA DE ESTE AUTO
                    </button>
                </div>

            </div>

        </div>
        <div class="col-md-5">
            <div id="data" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#data" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#data" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#data" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto1lockdown');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto3lockdown');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto2lockdown');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#data" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#data" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row separacion">
        <div class="col-md-7">
            <div class="barricade">
                <h2><?php the_field('autodecepticon3'); ?></h2>
                <div class="text-center mb-5">
                    <button type="button" id="boton" class="btn btn-warning" data-bs-auto=" Mercedes Benz SLS AMG"
                        data-bs-texto=" Una de las últimas joyas deportivas de la marca alemana. Se distingue por las tradicionales puertas tipo “alas de gaviota”. Este cuenta con un motor V8 de 6.2 litros capaz de producir hasta 583 caballos de potencia."
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ACERCA DE ESTE AUTO
                    </button>
                </div>


            </div>
        </div>
        <div class="col-md-5">
            <div id="data2" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto1sound');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto2sound');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto3sound');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#data2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#data2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>

<!-- seccion autos autobots -->

<div class="container ">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=camarofondo"); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-8 mx-auto">
            <div class="imagengrande">
                <?php 
                    $image = get_field('imagensaga');
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


<div class="container">
    <?php if (have_posts()) : ?>
    <?php query_posts("category_name=camarofondo"); ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="row">
        <div class="col-md-7">
            <div class="barricade ">
                <div class="tituloautos">
                    <h2><?php the_field('autobots1'); ?></h2>
                </div>
                <div class="text-center mb-5">
                    <button type="button" id="boton" class="btn btn-warning "
                        data-bs-auto="Chevrolet Corvette Stingray Concept"
                        data-bs-texto="El diseño de este superdeportivo no puede ser más impresionante con un morro extremadamente largo y una carrocería muy baja pegada al asfalto, un rasgo de distinción típico de los Corvette, apostando también por el exotismo de las puertas de tijera, cuatro tubos de escape trapezoidales en la trasera y gigantescas entradas y salidas de aire para refrigerar el motor y el sistema de frenos."
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ACERCA DE ESTE AUTO
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div id="data3" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto1side');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto2side');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto3side');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#data3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#data3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row separacion">
        <div class="col-md-7">
            <div class="barricade">
                <h2><?php the_field('autobots2'); ?></h2>
                <div class="text-center mb-5">
                    <button type="button" id="boton" class="btn btn-warning" data-bs-auto="CAMARO SS"
                        data-bs-texto=" Cuando un motor de 455 caballos de fuerza impulsa un auto que tiene 200 libras menos que su predecesor, se establece un nuevo punto de referencia en cuanto a potencia. Y cuando esta potencia es optimizada por un arsenal de tecnologías sofisticadas de desempeño, los conductores experimentarán una sensación de agilidad y control inigualable."
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ACERCA DE ESTE AUTO
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div id="data4" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto1bum');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto2bum');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto3bum');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#data4" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#data4" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row separacion">
        <div class="col-md-7">
            <div class="barricade">
                <h2><?php the_field('autobots3'); ?></h2>
                <div class="text-center mb-5">
                    <button type="button" id="boton" class="btn btn-warning" data-bs-auto="Ferrari 458 Italia"
                        data-bs-texto=" El Ferrari 458 Italia es un modelo realizado empleando la tecnología y la experiencia que atesora Ferrari en la Formula 1 con la colaboración de Michael Schumacher y que cuenta con un motor 4.5 V8 de Ferrari con 570 CV, el motor más eficiente que se haya empleado nunca en un cavallino rampante. "
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ACERCA DE ESTE AUTO
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div id="data5" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto1mirage');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto2mirage');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="imagengrande">
                            <?php 
                    $image = get_field('foto3mirage');
                    if( !empty( $image ) ):  ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#data5" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#data5" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>