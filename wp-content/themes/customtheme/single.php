<?php
/**
 * The template for displaying the posts
 *
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : ?>
            
                <?php while ( have_posts() ) : the_post(); ?>
                  <?php get_template_part('template-parts/content', 'single'); ?>
        <?php
            if ( comments_open() || get_comments_number() ) {
            comments_template();
        }
        ?>
    <?php endwhile; ?> 
    
    <?php endif; ?>  

    <?php 
        if ( is_singular( 'post' ) ) {
            the_post_navigation( array(
                'next_text' => 'Next',
                'prev_text' => 'Previous'
        ) );    
    }
?>    
</div>
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>    
    </div>
</div>

<?php get_footer(); ?>