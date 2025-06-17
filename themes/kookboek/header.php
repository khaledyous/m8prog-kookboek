<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>
        <?php
        if ( is_front_page() ) {
            bloginfo('name');
        } elseif ( is_single() || is_page() ) {
            the_title();
            echo ' | ';
            bloginfo('name');
        } else {
            bloginfo('name');
        }
        ?>
    </title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">MijnSite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
            if ( has_nav_menu('main-menu') ) {
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0',
                    'container'      => false,
                    'add_li_class'   => 'nav-item',
                    'add_a_class'    => 'nav-link',
                ));
            } else {
                echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
                wp_list_pages(array(
                    'title_li'    => '',
                    'depth'       => 1,
                    'link_before' => '<span class="nav-link">',
                    'link_after'  => '</span>',
                ));
                echo '</ul>';
            }
            ?>

            <form class="d-flex" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!-- Bootstrap JS Bundle (voor toggler) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+OY1zW5nE3moB6oI1UOeFltc6YOc+" crossorigin="anonymous"></script>
