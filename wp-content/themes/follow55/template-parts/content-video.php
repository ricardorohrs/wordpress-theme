<article>
    <h2><?php the_title()?></h2>
<!--    --><?php //the_post_thumbnail([200, 200]);?>
<!--    <p>Publicado em --><?php //echo get_the_date(); ?><!-- por --><?php //the_author_posts_link(); ?><!-- </p>-->
    <p>Categorias: <?php the_category(', '); ?></p>
<!--    <p>--><?php //the_tags('Tags:'. ', '); ?><!--</p>-->
    <?php the_content(); ?>
</article>