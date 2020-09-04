<?php get_header(); ?>
<?php
global $post;
$acf_fields = get_fields($post, 0);
?>
<main id="site-content" class="container-fluid" role="main">
    <div class="row home-intro" style="background-image: url('<?php echo wp_get_attachment_url($acf_fields['intro_image']); ?>')">
        <div class="col">
            <div class="circle-design">
                <div class="circle bg-1"></div>
                <div class="circle bg-2"></div>
                <div class="circle bg-3"></div>
                <div class="circle border-1">
                    <div class="circle pin top right"></div>
                    <div class="circle pin bottom left"></div>
                </div>
                <div class="circle border-2"></div>
                <div class="circle border-3"></div>
                <div class="circle content pt-5">
                    <h3 class="font-medium font-sans-light"><?php echo str_replace('&', '<span class="font-xxxsmall">&</span>', $acf_fields['first_heading']); ?></h3>
                    <h1 class="font-xlarge font-sans-bold mt-5 m-4 uppercase"><?php echo $acf_fields['second_heading']; ?></h1>
                    <p class="font-xxxsmall font-sans-bold"><?php echo $acf_fields['paragraph']; ?></p>
                    <img src="<?php echo wp_get_attachment_url($acf_fields['icon']); ?>" class="mt-4" />
                </div>
            </div>
        </div>
    </div>
    <div class="row meet-header">
        <div class="circle meet-header-bg"></div>
        <div class="meet-header-text w-100 my-5">
            <h3 class="font-medium font-sans-light uppercase mt-3"><?php echo $acf_fields['classes_first_heading']; ?></h3>
            <h3 class="font-medium font-sans-bold uppercase"><?php echo $acf_fields['classes_second_heading']; ?></h3>
            <?php
            $number_of_classes = 3;
            $classes_per_row = 3;
            $yoga_classes = yoga_classes_get_number_of_posts_of_type_in_chunks($number_of_classes, 'yoga_class', $classes_per_row);
            ?>
        </div>
    </div>
    
    <div class="row meet mt-5">
        <div class="col col-sm-1"></div>
        <div class="col col-sm-10">
            <?php for($row_index=0;$row_index<sizeof($yoga_classes);$row_index++){ ?>
                <div class="row">
                    <?php $row_size = sizeof($yoga_classes[$row_index]); ?>
                    <?php for($class_index=0;$class_index<$row_size;$class_index++){ ?>
                        <?php $current_class = $yoga_classes[$row_index][$class_index]; ?>
                        <div class="col col-lg-<?php echo 12/$row_size; ?> col-xs-12 px-5 mt-5">
                            <div class="yoga-class mx-auto">
                                <?php // print_r( $current_class); ?>
                                <div class="class-image circle" style="background-image: url('<?php echo get_the_post_thumbnail_url($current_class['post']->ID); ?>');"></div>
                                <div class="class-info pl-3">
                                    <h5 class="font-xsmall font-sans-bold mt-4"><a href="<?php echo get_post_permalink($current_class['post']->ID); ?>"><?php echo $current_class['post']->post_title; ?></a></h5>
                                    <p class="font-xxxsmall font-sans-light class-text pb-3"><?php echo substr($current_class['post']->post_excerpt, 0, 45); ?>...</p>
                                    <div class="font-xxsmall font-sans-light"><span class="font-sans-bold"><?php echo ucfirst($current_class['acf_fields']['day']); ?></span> <?php echo implode(":",array_slice(explode(':', $current_class['acf_fields']['time']), 0, 2)); ?> hs.</div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="col col-sm-1"></div>
    </div>
</main>

<?php
get_footer();