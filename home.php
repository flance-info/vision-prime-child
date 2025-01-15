<?php get_header(); ?>

<main class="blog-archive">
    <div class="content-wrapper">

        <div class="main-content">

            <div class="post-list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part('templates/blog/content','item'); ?>

                <?php endwhile; ?>

                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'prev_text' => __('&laquo; Previous'),
                            'next_text' => __('Next &raquo;'),
                        ));
                        ?>
                    </div>

                <?php else : ?>
                    <p><?php esc_html_e('No posts found.', 'vision-prime'); ?></p>
                <?php endif; ?>
            </div>

        </div>

        <aside class="blog-sidebar">
		    <?php if (is_active_sidebar('primary-sidebar')) : ?>
			    <?php dynamic_sidebar('primary-sidebar'); ?>
		    <?php endif; ?>
        </aside>

    </div>
</main>

<?php get_footer(); ?>
