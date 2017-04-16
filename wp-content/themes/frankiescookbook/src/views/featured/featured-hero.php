<div class="recipe-list__latest">

    <?php
        $featured_hero_args = array( 'post_type' => 'featured' );
        $featured_hero_query = new WP_Query( $featured_hero_args );
    ?>
    <?php if ( have_posts() ) : while ( $featured_hero_query->have_posts() ) : $featured_hero_query->the_post(); ?>
        <?php
            $featured_hero_img = wp_get_attachment_image_src(get_field('recipe_image'), 'width-full');
            $featured_hero_img_url = $featured_hero_img[0];
        ?>
        <a href="<?php the_permalink(); ?>" class="recipe-list__latest-image" id="js-hero-latest" style="background-image:url(<?php echo $featured_hero_img_url; ?>)">
            <h1 class="recipe-list__latest-title"><?php the_title(); ?></h1>
        </a>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
</div>
