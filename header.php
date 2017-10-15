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

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="/" class="navbar-brand">
            <img src="<?php echo get_theme_file_uri('/images/logo.svg'); ?>" width="30" height="30">
            cosmology.pro
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Навигация">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">Главная</a>
                </li>
                <?php
                    $categories = wp_list_categories([
                        'echo' => false,
                        'exclude' => '1',
                        'hide_empty' => false,
                        'orderby' => 'name',
                        'title_li' => '',
                        'use_desc_for_title' => false
                    ]);

                    $categories = str_replace('class="cat-item', 'class="nav-item', $categories);
                    $categories = str_replace('href="', 'class="nav-link" href="', $categories);
                    echo $categories;
                ?>
                <li class="nav-item">
                    <a href="/about" class="nav-link">О сайте</a>
                </li>
            </ul>
            <form action="http://www.google.com" class="form-inline my-2 my-lg-0" method="GET" target="_blank">
                <input type="hidden" name="cx" value="015482176942469738949:edc_azamkjc">
                <input type="hidden" name="ie" value="UTF-8">
                <input type="text" name="q" class="form-control border-warning mr-sm-2" placeholder="Search for..." aria-label="Search for...">
                <button type="submit" name="sa" class="btn btn-outline-warning my-2 my-sm-0" value="OK">Go!</button>
            </form>
        </div>
    </div>
</nav>

<main class="container">