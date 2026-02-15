<?php

/**
 * Generic Content Template
 * @package BinaryAxis
 */

get_header(); ?>

<main id="primary" class="site-main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <section class="pt-32 pb-[100px] sm:pt-36 md:pt-42 xl:pt-[180px]">
                    <div class="main-container">

                        <div class="space-y-[60px] md:space-y-[75px]">

                            <header class="space-y-2">
                                <h1 class="text-heading-2" data-ns-animate data-delay="0.1">
                                    <?php the_title(); ?>
                                </h1>
                                <?php if (is_page()) : ?>
                                    <p class="text-tagline-1" data-ns-animate data-delay="0.2">
                                        Last Updated:
                                        <span class="text-secondary dark:text-accent">
                                            <?php echo get_the_modified_date('F d, Y'); ?>
                                        </span>
                                    </p>
                                <?php endif; ?>
                            </header>

                            <div class="generic-content-wrapper space-y-8" data-ns-animate data-delay="0.3">
                                <div class="prose prose-lg dark:prose-invert max-w-none">
                                    <?php the_content(); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </article>

        <?php endwhile;
    else : ?>
        <section class="py-20 text-center">
            <div class="main-container">
                <h1>Content Not Found</h1>
            </div>
        </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>