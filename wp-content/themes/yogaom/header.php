<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="container-fluid position-fixed header">
            <div class="row align-items-center h-100">
                <div class="col col-sm-6 logo">
                    <?php
                    echo yogaom_site_logo(array(
                        'logo_class' => 'ml-5',
                    ));
                    ?>
                </div>
                <div class="col col-sm-6 menu font-nunito-bold font-xxxsmall">
                    <nav class="float-right mt-5">
                        <ul class="navigation-menu">
                            <?php
                            wp_nav_menu(
                                array(
                                    'menu' => 'Navigation Menu',
                                    'container'  => '',
                                    'items_wrap' => '%3$s',
                                    'theme_location' => 'primary',
                                )
                            );
                            ?>
                        </ul>
                    </nav>
                </div>
            </div> 
        </div>