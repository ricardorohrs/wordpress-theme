<?php get_header(); ?>
    <div class="banner">
        <img class="img-fluid" src="<?php header_image();?>" height="300px" width="<?php echo get_custom_header()->width ?>" alt="">
    </div>
    <div class="content-area">
        <main>

            <section class="middle-area">
                <div class="container">
                    <div class="row">

                        <div class="news col-md-8">

                            <?php
                                if(have_posts()):
                                    while(have_posts()): the_post();
                            ?>

                            <?php get_template_part('template-parts/content', get_post_format())?>

                            <?php endwhile; ?>

                                <div class="row">
                                    <div class="pages text-left col-6">
                                        <?php previous_posts_link('<< Mais recentes'); ?>
                                    </div>
                                    <div class="pages text-right col-6">
                                        <?php next_posts_link('Mais antigos >>'); ?>
                                    </div>
                                </div>

                            <?php else: ?>

                            <p>Sem postagens</p>

                            <?php
                                endif;
                            ?>
                        </div>

                        <?php get_sidebar('blog') ?>
                    </div>
                </div>
            </section>

        </main>
    </div>
<?php get_footer(); ?>
