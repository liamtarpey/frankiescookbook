<?php get_header() ;?>

<!-- Latest recipe -->
<div class="recipe-list__latest">

    <?php
        $arguments = array( 'posts_per_page' => 1 );
        $the_query = new WP_Query( $arguments );
    ?>
    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php
            $image_hero = wp_get_attachment_image_src(get_field('image'), 'width-full');
            $image_hero_url = $image_hero[0];
        ?>
        <a href="<?php the_permalink(); ?>" class="recipe-list__latest-image" id="js-hero-latest" style="background-image:url(<?php echo $image_hero_url; ?>)">
            <h1 class="recipe-list__latest-title"><?php the_title(); ?></h1>
        </a>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
</div>

<!-- Featured recipe -->
<div class="wrapper">
    <div class="recipe-list__featured">
        <?php
            $counter = 0;
            if ( have_posts() ) : while ( have_posts() ) : the_post(); $counter++;
            if($counter == 2) {
        ?>
        <?php
            $image = wp_get_attachment_image_src(get_field('image'), 'width-500');
            $image_url = $image[0];
        ?>
        <div class="recipe-list__featured-details">
            <span class="recipe-list__featured-category">
                <?php the_category(); ?>
            </span>
            <h2><?php the_title(); ?></h2>
            <div class="recipe-list__featured-excerpt">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="cta-link">Read more &gt;</a>
            </div>
        </div>
        <div class="recipe-list__featured-image" style="background-image:url(<?php echo $image_url; ?>)"></div>
        <?php }; endwhile; endif; ?>
    </div>
</div>

<!-- Latest recipes -->
<div class="wrapper">

    <h2 class="recipe-list__header">Latest recipes</h2>

    <div class="layout-wrap">

        <div class="main-content">

            <ul class="recipe-list">

            <!-- + Recipe list -->
            <?php
                $counter = 0;
                if ( have_posts() ) : while ( have_posts() ) : the_post(); $counter++;
                if($counter > 2) {
            ?>
                <?php
                    $image = wp_get_attachment_image_src(get_field('image'), 'width-500');
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
            <?php }; endwhile; endif; ?>
            <!-- / Recipe list -->

            </ul>
        </div>

    </div>

</div>

<?php get_footer() ;?>
