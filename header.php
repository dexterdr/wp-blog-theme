<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Igor Ezhov">
<meta name="contact" content="dexter.gm@gmail.com">
<link rel="icon" href="../../favicon.ico">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="top d-none d-lg-block">
    <a href="/"><img src="<?php echo get_theme_file_uri('images/logo.png'); ?>" alt="Космология"></a>
</header>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark mb-3">
    <div class="container">
        <a href="/" class="navbar-brand d-lg-none">COSMOLOGY.PRO</a>

        <form action="http://www.google.com" class="form-inline d-none d-sm-flex order-lg-3" id="search" method="GET" target="_blank">
            <div class="input-group">
                <input type="hidden" name="cx" value="015482176942469738949:e57b9q-jfso">
                <input type="hidden" name="ie" value="UTF-8">
                <input type="text" name="q" class="form-control" placeholder="Поиск...">
                <span class="input-group-btn">
                    <button type="submit" name="sa" class="btn" value="OK">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M17.545 15.467l-3.779-3.779c.57-.935.898-2.035.898-3.21 0-3.417-2.961-6.377-6.378-6.377C4.869 2.1 2.1 4.87 2.1 8.287c0 3.416 2.961 6.377 6.377 6.377 1.137 0 2.2-.309 3.115-.844l3.799 3.801c.372.371.975.371 1.346 0l.943-.943c.371-.371.236-.84-.135-1.211zM4.004 8.287c0-2.366 1.917-4.283 4.282-4.283 2.366 0 4.474 2.107 4.474 4.474 0 2.365-1.918 4.283-4.283 4.283-2.366-.001-4.473-2.109-4.473-4.474z"/></svg>
                    </button>
                </span>
            </div>
        </form>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Навигация">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-lg-1 mt-2 mt-lg-0" id="mainmenu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item nav-home">
                    <a href="/" class="nav-link">Главная</a>
                </li>
                <li class="nav-item d-sm-none">
                    <a href="https://cse.google.ru/cse/publicurl?cx=015482176942469738949:edc_azamkjc" class="nav-link" target="_blank">Поиск</a>
                </li>
                <?php
                    $categories = wp_list_categories([
                        'echo' => false,
                        'hide_empty' => false,
                        'orderby' => 'name',
                        'title_li' => '',
                        'use_desc_for_title' => false
                    ]);

                    $categories = str_replace('class="cat-item', 'class="nav-item', $categories);
                    $categories = str_replace('href="', 'class="nav-link" href="', $categories);
                    echo $categories;
                ?>
            </ul>

            <div class="col-auto snet order-lg-2">
                <a href="https://twitter.com/dexterdr" rel="noopener" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M17.316 6.246c.008.162.011.326.011.488 0 4.99-3.797 10.742-10.74 10.742-2.133 0-4.116-.625-5.787-1.697.296.035.596.053.9.053 1.77 0 3.397-.604 4.688-1.615-1.651-.031-3.046-1.121-3.526-2.621.23.043.467.066.71.066.345 0 .679-.045.995-.131-1.727-.348-3.028-1.873-3.028-3.703v-.047c.509.283 1.092.453 1.71.473-1.013-.678-1.68-1.832-1.68-3.143 0-.691.186-1.34.512-1.898C3.942 5.498 6.725 7 9.862 7.158c-.064-.277-.097-.564-.097-.861 0-2.084 1.689-3.773 3.774-3.773 1.086 0 2.067.457 2.756 1.191.859-.17 1.667-.484 2.397-.916-.282.881-.881 1.621-1.66 2.088.764-.092 1.49-.293 2.168-.594-.506.758-1.146 1.422-1.884 1.953z"/></svg></a><!--
                --><a href="https://www.facebook.com/cosmology.pro/" rel="noopener" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M17 1H3c-1.1 0-2 .9-2 2v14c0 1.101.9 2 2 2h7v-7H8V9.525h2v-2.05c0-2.164 1.212-3.684 3.766-3.684l1.803.002v2.605h-1.197c-.994 0-1.372.746-1.372 1.438v1.69h2.568L15 12h-2v7h4c1.1 0 2-.899 2-2V3c0-1.1-.9-2-2-2z"/></svg></a>
            </div>
        </div>
    </div>
</nav>

<div class="container">