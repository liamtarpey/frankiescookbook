<div class="wrapper">
    <div class="recipe-list__featured">
        <?php
            $featured_recipe_counter = 0;
            if ( have_posts() ) : while ( have_posts() ) : the_post(); $featured_recipe_counter++;
            if($featured_recipe_counter == 2) {
        ?>
        <?php
            $featured_recipe_img = wp_get_attachment_image_src(get_field('recipe_image'), 'width-500');
            $featured_recipe_img_url = $featured_recipe_img[0];
        ?>
        <div class="recipe-list__featured-details">
            <span class="recipe-list__featured-category">
                <?php the_category(); ?>
            </span>
            <h2><?php the_title(); ?></h2>
            <div class="recipe-list__featured-excerpt">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="cta-link">View recipe &gt;</a>
            </div>
        </div>
        <a href="<?php the_permalink(); ?>" class="recipe-list__featured-image" style="background-image:url(<?php echo $featured_recipe_img_url; ?>)"></a>
        <?php }; endwhile; endif; ?>
    </div>
</div>

<?php wp_reset_query(); ?>
