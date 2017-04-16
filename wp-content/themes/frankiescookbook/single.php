<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php
            $single_recipe_img = wp_get_attachment_image_src(get_field('recipe_image'), 'width-full');
            $single_recipe_img_url = $single_recipe_img[0];
        ?>

        <div class="single-recipe__hero" style="background-image:url(<?php echo $single_recipe_img_url; ?>)">
            <h1><?php the_title(); ?></h1>
        </div>

        <div class="wrapper wrapper--padding wrapper--narrow">
            <div class="rte">
                <?php the_content(); ?>
            </div>
        </div>

        <div class="wrapper wrapper--padding">
            <div class="single-recipe__full-method">
                <div class="single-recipe__ingredients">
                    <h2>Ingredients</h2>
                    <?php the_field('recipe_ingredients'); ?>
                </div>
                <div class="single-recipe__method">
                    <h2>Method</h2>
                    <?php the_field('recipe_method'); ?>
                </div>
            </div>
        </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>
