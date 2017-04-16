<ul class="recipe-list">

<!-- + Recipe list -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
        $image = wp_get_attachment_image_src(get_field('recipe_image'), 'width-500');
        $image_url = $image[0];
    ?>

    <li class="recipe-list__item">
        <a href="<?php the_permalink();?>" style="background-image:url(<?php echo $image_url; ?>)" class="recipe-list__image"></a>
        <a href="<?php the_permalink();?>" class="no-link recipe-list__title">
            <h3><?php the_title(); ?></h3>
        </a>
        <div class="recipe-list__meta">
            <div class="recipe-list__meta-item">
                <svg class="icon icon-clock">
                    <use xlink:href="#icon-clock"></use>
                </svg>
                <span>Prep: <?php the_field('prep_time'); ?>m / Cooking: <?php the_field('cooking_time'); ?>m</span>
            </div>
            <div class="recipe-list__meta-item">
                <svg class="icon icon-user">
                    <use xlink:href="#icon-user"></use>
                </svg>
                <span>Serves: <?php the_field('serves'); ?></span>
            </div>
        </div>
        </a>
    </li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<!-- / Recipe list -->

</ul>
