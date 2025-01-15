<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
			<?php the_post_thumbnail('medium'); ?>
        </a>
	<?php endif; ?>
    <div class="post-content">
        <div class="post-title-wrap">
            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
        </div>
        <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
        <button class="post-view-button" onclick="location.href='<?php the_permalink(); ?>'"><?php _e('View', 'vision-prime-child'); ?></button>
    </div>
</article>