<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(array('bg-white', 'font-purple')); ?>>
        <div class="container-fluid header shadow">
            <div class="row h-100">
                <div class="col col-4 logo px-5 d-flex align-items-center justify-content-start">
                    <?php
                    echo yogaom_site_logo(array(
                        'logo_class' => 'ml-xs-0 ml-md-5 img-fluid',
                    ));
                    ?>
                </div>
                <div class="col col-8 menu font-nunito-bold font-xxxsmall h-100 d-flex align-items-center justify-content-end">
                    <nav>
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