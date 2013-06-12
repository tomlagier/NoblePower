<?
/*
Template Name: NPE Homepage
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
<article id="content" class="span9">
<?php the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-content">
<?php 
if ( has_post_thumbnail() ) {
the_post_thumbnail();
} 
?>
<div class="row-fluid">
    <div class="homepage-slider span12">Slider goes here</div>
    <div id="sm-address-overlay" class="slider-overlay span12">Santa Maria address and map</div>
    <div id="slo-address-overlay" class="slider-overlay span12">SLO address and map</div>
</div>
<div class="row-fluid">
    <div class="homepage-about span9">
        <h3 id="homepage-about-heading" class="homepage-heading">About Noble</h3>
        <p>    
            <?php 
                $about_post = get_post(84);
                echo $about_post->post_content;
            ?>
        </p>
    </div>
    <div class="homepage-facebook span3">
        <h3 id="homepage-facebook-feed" class="homepage-heading">Facebook Feed</h3>
        <p>Facebook feed</p>
    </div> 
</div>
<?php edit_post_link( __( 'Edit', 'blankslate' ), '<div class="edit-link">', '</div>' ) ?>
</div>
</div>
</article>
</div>
<?php get_footer(); ?>