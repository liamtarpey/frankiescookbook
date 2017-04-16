<?php
    $featured_tag_args = array('post_type' => 'featured');
    $featured_tag_query = new WP_Query( $featured_tag_args );
?>
<?php if ( have_posts() ) : while ( $featured_tag_query->have_posts() ) : $featured_tag_query->the_post(); ?>
    <?php
        $featured_tag_img = wp_get_attachment_image_src(get_field('tag_image'), 'width-full');
        $featured_tag_img_url = $featured_tag_img[0];
    ?>
    <div class="featured-tag" style="background-image:url(<?php echo $featured_tag_img_url; ?>);">
        <div class="featured-tag__cta">
            <h2><?php the_field('tag_title'); ?></h2>
            <a href="/recipes/tag/<?php the_field('tag'); ?>" class="btn">See more</a>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
