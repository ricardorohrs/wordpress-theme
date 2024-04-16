<article <?php post_class(['class' => 'featured']); ?>>
    <div class="thumbnail">
        <?php the_post_thumbnail('large', ['class' => 'img-fluid']);?>
    </div>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>

    <div class="meta-info">
        <p>
            Autor: <span><?php the_author_posts_link(); ?></span>
            Categorias: <span><?php the_category(', '); ?></span>
            <?php the_tags('Tags: <span>', ', ', '</span>'); ?>
        </p>
    </div>

    <?php the_excerpt(); ?>
</article>