<?php

/*
 * Template Name: General Template
 */

?>


<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->wigth ?>" alt="">
<div class="content-area">
    <main>
        <section class="middle-area">
            <div class="container">
                <div class="general-template">

                    <?php
                    if (have_posts()):
                        while (have_posts()): the_post();
                            ?>

                            <article>
                                <h2><?php the_title() ?></h2>
                                <?php the_content(); ?>
                            </article>

                        <p>modelo template</p>

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
        </section>
    </main>
</div>
<?php get_footer(); ?>
