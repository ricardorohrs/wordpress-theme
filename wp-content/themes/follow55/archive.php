<?php get_header(); ?>
<div class="banner">
    <img class="img-fluid" src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->wigth ?>" alt="">
</div>
<div class="content-area">
    <main>

        <section class="middle-area">
            <div class="container">
                <div class="row">

                    <div class="archive col-md-8">

                        <?php

                        the_archive_title('<h1 class="archive-title">', '</h1>');
                        the_archive_description();

                        if(have_posts()):
                            while(have_posts()): the_post();
                                ?>

                                <?php get_template_part('template-parts/content', 'archive.php')?>

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
