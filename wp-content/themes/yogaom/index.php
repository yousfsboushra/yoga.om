<?php get_header(); ?>
<?php
$current_page = get_post(get_option( 'page_for_posts' ));
$acf_fields = get_fields($current_page->ID, 0);

$offer = null;
$offer_acf_fields = array();
if(isset($acf_fields['offer']) && isset($acf_fields['offer'][0])){
    $offer = get_post($acf_fields['offer'][0]);
    $offer_acf_fields = get_fields($offer, 0);
}
?>
<?php echo get_the_post_thumbnail_url(); ?>
<main id="site-content" class="container-fluid" role="main">
    <div class="row classes-intro">
        <div class="col pt-5">
            <div class="square-circle-design mt-5">
                <div class="placeholder"></div>
                <div class="circle circle1 bg-purple-light shadow"></div>
                <div class="circle circle2 bg-purple shadow"></div>
                <div class="circle circle3 bg-transparent" style="background-image: url('<?php echo get_the_post_thumbnail_url($current_page->ID); ?>');"></div>
            </div>
            <?php if($offer != null){ ?>
            <div class="circle-design offer">
                <div class="circle bg-3 bg-white shadow"></div>
                <div class="circle border-1">
                </div>
                <div class="circle border-3"></div>
                <div class="circle content offer-content">
                    <p class="font-xxlarge font-sans-bold uppercase"><?php echo $offer_acf_fields['percentage']; ?> <span class="font-xlarge font-sans-light">%</span></p>
                    <p class="font-small font-sans-regular">OFF</p>
                </div>
            </div>
            <?php } ?>
            <div class="intro-text">
                <?php if($offer != null){ ?>
                    <h1 class="font-large font-sans-bold font-white uppercase mb-5"><?php echo $offer->post_title; ?> <br /><span class="font-sans-regular"><?php echo $offer_acf_fields['second_heading']; ?></span></h1>
                    <p class="font-xxxsmall font-white m-0"><?php echo date("d.m.Y", strtotime($offer_acf_fields['start_date'])); ?></p>
                    <p class="font-xxxsmall font-white"><?php echo date("d.m.Y", strtotime($offer_acf_fields['end_date'])); ?></p>
                <?php }else{ ?>
                    <h1 class="font-large font-sans-bold font-white uppercase mb-5"><?php echo $current_page->post_title; ?></h1>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php
    $meta_query = array(
        'relation'		=> 'AND',
        array(
            'key'	  	=> 'is_summer_class',
            'value'	  	=> "1",
            'compare' 	=> '=',
        )
    );
    if($offer != null){
        $meta_query['relation'] = 'AND';
        $meta_query[] = array(
            'key'	  	=> 'offer',
            'value'	  	=> '"' . $offer->ID . '"',
            'compare' 	=> 'LIKE',
        );
    }
    $args = array(
        'meta_query' => $meta_query
    );
    $yoga_classes = yoga_classes_get_number_of_posts_of_type_with_args_in_chunks(2, 'yoga_class', $args, 2);
    $counter = 1;
    $yoga_classes_ids = array();
    ?>
    <?php if(!empty($yoga_classes[0])){ ?>
        <?php for($class_index=0;$class_index<sizeof($yoga_classes[0]);$class_index++){ ?>
            <?php
                $current_class = $yoga_classes[0][$class_index];
                $yoga_classes_ids[] = $current_class['post']->ID;
            ?>
            <div class="row class-details <?php echo ($counter%2==0)? 'right' : 'left'; ?> bg-gray-light">
                <div class="bg bg-white"></div>
                <div class="col col-12 col-lg-6 image">
                    <div class="circle-design">
                        <div class="circle bg-3 bg-white shadow"></div>
                        <div class="circle border-1 bg-transparent">
                            <div class="circle pin bg-purple top left"></div>
                            <div class="circle pin bg-purple bottom right"></div>
                        </div>
                        <div class="circle border-2 bg-transparent"></div>
                        <div class="circle border-3 bg-transparent"></div>
                        <div class="circle content bg-transparent">
                            <div class="class-image circle" style="background-image: url('<?php echo get_the_post_thumbnail_url($current_class['post']->ID); ?>');"></div>
                        </div>
                    </div>
                    <div class="d-none d-lg-block vertical-text uppercase font-xxxsmall float-<?php echo ($counter%2==0)? 'left' : 'right'; ?> mx-5"><?php echo $current_class['post']->post_title; ?></div>
                </div>
                <div class="col col-12 col-lg-6 text">
                    <h2 class="font-large font-sans-bold uppercase pb-5"><?php echo $current_class['acf_fields']['dynamics_label']; ?> <br /><span class="font-sans-light">dynamics</span></h3>
                    <h3 class="font-xsmall font-sans-regular uppercase pt-3"><a href="<?php echo get_post_permalink($current_class['post']->ID); ?>"><?php echo $counter++; ?>. <span class="font-sans-bold"><?php echo $current_class['post']->post_title; ?></span> Yoga</a></h3>
                    <p class="class-text font-xxxsmall font-sans-regular pt-3 pb-4"><?php echo $current_class['post']->post_content; ?></p>
                    <p class="font-xxxsmall font-sans-bold pt-3 mb-4"><?php echo $current_class['acf_fields']['modules']; ?> modules <br /> divided into <?php echo $current_class['acf_fields']['weekends']; ?> weekends</p>
                    <div class="more-info font-xxxsmall font-sans-bold">
                        <div class="start-date">
                            <label>Start</label>
                            <p class="font-sans-regular"><?php echo date("F d", strtotime($current_class['acf_fields']['start_date'])); ?><br /><?php echo implode(":",array_slice(explode(':', $current_class['acf_fields']['time']), 0, 2)); ?> hs</p>
                        </div>
                        <div class="price">
                            <label>Price</label>
                            <p class="font-sans-light">$<?php echo ($offer != null)? ($current_class['acf_fields']['price'] * (100 - $offer_acf_fields['percentage']) / 100) : $current_class['acf_fields']['price']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>

    <div class="row meet-header mt-5">
        <div class="meet-header-text w-100 my-5">
            <h3 class="font-medium font-sans-light uppercase mt-3">look at our<br /><span class="font-sans-bold">Summer classes</span></h3>
        </div>
    </div>
    <?php
    $meta_query = array(
    );
    $args = array(
        'meta_query' => $meta_query
    );
    if(!empty($yoga_classes_ids)){
        $args['post__not_in'] = $yoga_classes_ids;
    }
    $summer_classes = yoga_classes_get_number_of_posts_of_type_with_args_in_chunks(3, 'yoga_class', $args, 3);
    ?>
    <div class="row meet mt-5">
        <div class="col col-sm-1"></div>
        <div class="col col-sm-10">
            <?php for($row_index=0;$row_index<sizeof($summer_classes);$row_index++){ ?>
                <div class="row">
                    <?php $row_size = sizeof($summer_classes[$row_index]); ?>
                    <?php for($class_index=0;$class_index<$row_size;$class_index++){ ?>
                        <?php $current_class = $summer_classes[$row_index][$class_index]; ?>
                        <div class="col col-lg-<?php echo 12/$row_size; ?> col-xs-12 px-5 mt-5">
                            <div class="yoga-class mx-auto">
                                <div class="class-image circle" style="background-image: url('<?php echo get_the_post_thumbnail_url($current_class['post']->ID); ?>');"></div>
                                <div class="class-info pl-3">
                                    <h4 class="font-xsmall font-sans-bold mt-4"><a href="<?php echo get_post_permalink($current_class['post']->ID); ?>"><?php echo $current_class['post']->post_title; ?></a></h4>
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