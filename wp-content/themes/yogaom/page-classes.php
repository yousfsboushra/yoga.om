<?php get_header(); ?>
<?php
global $post;
$acf_fields = get_fields($post, 0);
?>

<main class="container-fluid" role="main">
    <div class="row">
        <div class="col col-sm-21 font-purple">
            CLASSES
        </div>
    </div>
</main>

<?php
get_footer();