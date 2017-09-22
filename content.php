<?php if(is_search() || is_archive()): ?>
	<div class="archive-post">
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<p class="meta"><?php echo __('Created by') ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a> <?php echo __("on"); ?> <?php the_time('F j, Y g:i'); ?>
		</p>
	</div>
<?php else: ?>
	<article class="post">
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<p class="meta"><?php echo __('Created by') ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a> <?php echo __("on"); ?> <?php the_time('F j, Y g:i'); ?> | <?php echo __("Posted in");  ?>
		<?php 
			$categories = get_the_category();
			$separator = ", ";
			$output = null;
			if($categories){
				foreach ($categories as $category) {
					$output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>' . $separator;
				}
			}
		?>
		<?php echo trim($output, $separator); ?>
		</p>
		<?php if(has_post_thumbnail()): ?>
			<div class="post-image">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>

		<?php if(is_single()): ?>
			<?php the_content(); ?>
		<?php else: ?>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="button"><?php echo __("Read More"); ?></a>
		<?php endif; ?>
	</article>
<?php endif; ?>