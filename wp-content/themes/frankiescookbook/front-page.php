<?php get_header() ;?>

<div class="wrapper">

    <h1>All recipes</h1>

    <div class="layout-wrap">

        <div class="main-content">
            <ul class="recipe-list">

            <!-- + Recipe list -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php
                    $image = wp_get_attachment_image_src(get_field('image'), 'width-500');
                    $image_url = $image[0];
                ?>

                <li class="recipe-list__item">
                    <a href="<?php the_permalink();?>" style="background-image:url(<?php echo $image_url; ?>)" class="recipe-list__image"></a>
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
                    <a href="<?php the_permalink();?>" class="no-link">
                        <h2 class="recipe-list__title"><?php the_title(); ?></h2>
                    </a>
                    </a>
                </li>
            <?php endwhile; endif; ?>
            <!-- / Recipe list -->

            </ul>
        </div>

        <?php include('sidebar.php'); ?>

    </div>

</div>

<?php get_footer() ;?>
