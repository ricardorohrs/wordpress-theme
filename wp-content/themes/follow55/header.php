<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php wp_head();?>

        <title>Follow 55</title>
    </head>

    <body <?php body_class(); ?>>
        <header>
            <section class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="social-media-icons col-xl-9 col-sm-7 col-6">Ícones</div>
                        <div class="search col-xl-3 col-sm-5 col-6 text-end">Pesquisa</div>
                    </div>
                </div>
            </section>

            <section class="menu-area">
                <div class="container">
                    <div class="row">
                        <section class="logo col-md-2 col-12 text-center">Logo</section>
                        <nav class="main-menu col-md-10 text-end">
                            <?php wp_nav_menu(['theme_location' => 'main_menu']) ?>
                        </nav>
                    </div>
                </div>
            </section>
        </header>