<?php get_header(); ?>

<main class="single-blog-post">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post-content">

            <h1 class="post-title"><?php the_title(); ?></h1>

            <div class="post-meta">
                <div class="post-categories"><?php the_category(', '); ?></div>
            </div>

			<?php if (has_post_thumbnail()) : ?>
				<div class="post-thumbnail">
					<?php the_post_thumbnail('large'); ?>
				</div>
			<?php endif; ?>

			<div class="post-body">
				<?php the_content(); ?>
			</div>

            <div class="post-meta">
                <div class="post-tags"><?php the_tags('', ' '); ?></div>
            </div>

		</article>

		<div class="post-navigation">
			<div class="prev-post">
				<?php previous_post_link('%link', '&laquo; Previous: %title'); ?>
			</div>
			<div class="next-post">
				<?php next_post_link('%link', 'Next: %title &raquo;'); ?>
			</div>
		</div>

	<?php endwhile; else : ?>
		<p><?php esc_html_e('No content found.', 'text-domain'); ?></p>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
