<?php get_header(); ?>
<div class="banner">
    <img class="img-fluid" src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->wigth ?>" alt="">
</div>
<div class="content-area">
    <main>

        <section class="middle-area">
            <div class="container">
                <div class="row">

                    <div class="error-404">
                        <header>
                            <h1 style="color: #000 !important;">Página não encontrada</h1>
                            <p>Infelizmente a página que você busca não existe neste site.</p>
                        </header>

                        <div class="error">
                            <span>Que tal buscar outra página?</span>
                            <br>
                            <?php get_search_form(); ?>
                            <br>
                            <?php the_widget('WP_Widget_Recent_Posts', ['title' => 'Últimos posts', 'number' => 3]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>
<?php get_footer(); ?>
