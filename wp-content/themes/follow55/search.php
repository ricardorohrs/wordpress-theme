<?php get_header(); ?>
<div id="primary">
    <div id="main">
        <div class="container">
            <h2>Resultados da pesquisa: </h2><?php echo get_search_query(); ?>

            <?php
                get_search_form();

                while (have_posts()): the_post();
                    get_template_part('template-parts/content', 'search');

                    if (comments_open() || get_comments_number()):
                        comments_template();
                    endif;
                endwhile;

                the_posts_pagination([
                    'prev_text' => 'Anterior',
                    'next_text' => 'Próximo',
                ]);
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
