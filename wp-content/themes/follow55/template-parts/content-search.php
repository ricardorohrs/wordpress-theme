<article <?php post_class(['class' => 'featured']); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>

    <div class="meta-info">
        <?php if (has_category()): ?>
            <p>Categorias: <?php the_category(', '); ?></p>
        <?php endif; ?>
        <p><?php the_tags('Tags: ', ', '); ?></p>
    </div>

    <?php the_excerpt(); ?>
</article>