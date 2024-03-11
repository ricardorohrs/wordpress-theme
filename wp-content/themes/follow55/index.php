<?php get_header(); ?>
    <img class="img-fluid" src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->wigth ?>" alt="">
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">
                        Slide
                    </div>
                </div>
            </section>

            <section class="services">
                <div class="container">
                    <div class="row">
                        Serviços
                    </div>
                </div>
            </section>

            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-4">Barra lateral</aside>
                        <div class="news col-md-8">

                            <?php
                                if(have_posts()):
                                    while(have_posts()): the_post();
                            ?>

                            <?php get_template_part('template-parts/content', get_post_format())?>

                            <?php
                                endwhile;
                                else:
                            ?>

                            <p>Sem postagens</p>

                            <?php
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="map">
                <div class="container">
                    <div class="row">
                        Mapa
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>
