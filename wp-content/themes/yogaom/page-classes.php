<?php get_header(); ?>
<?php
global $post;
$acf_fields = get_fields($post, 0);
?>

<main class="container-fluid" role="main">
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
</main>

<?php
get_footer();