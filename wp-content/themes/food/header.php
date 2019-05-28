<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<? bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Croissant+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<!--    <link rel="stylesheet" href="owl.carousel.min.css">-->
<!--    <link rel="stylesheet" href="owl.theme.default.min.css">-->
<!--    <link rel="stylesheet" href="stellarnav.min.css">-->
<!--    <link rel="stylesheet" href="style.css">-->

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="page-header">

    <div class="page-header-inner">

        <div class="brand">
                <img src="<?php echo bloginfo( 'template_url' ); ?>/images/logo-bowl.svg" alt="Logo" class="logo">
        </div><!-- .brand -->

<!--        <form class="search-form" action="#" method="GET">-->
<!--            <input type="text" name="keywords" placeholder="Rechercher">-->
<!--            <button type="submit" name="send"><i class="fas fa-search"></i><span-->
<!--                    class="hidden-text">Valider</span></button>-->
<!--        </form>-->

        <div class="slogan">

            <p>Le Bowl d'énergie qui réveille les papilles !</p>

        </div>

    </div>

    <div class="page-header-content">


        <nav class="page-header-nav stellarnav">
            <?php wp_nav_menu(array( 'theme_location' => 'menu-principal' , 'container' => 'nav')); ?>

<!--            <ul class="">-->
<!--                <li>-->
<!--                    <a href="#">Accueil</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#franchise">Franchise</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#bowlz">Nos Bowls</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#resto">Nos Restaurants</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#commu">Communauté</a>-->
<!--                </li>-->
<!--            </ul>-->
        </nav>

        <!-- .page-header-content -->

    </div>
    <!-- .page-header-inner -->

</header>

<!-- HEADER -->
