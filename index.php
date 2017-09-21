<?php get_header(); ?>
	<div class="container content">
		<div class="main block">
			<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
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
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="button"><?php echo __("Read More"); ?></a>
			</article>
			<?php endwhile; ?>
			<?php else: ?>
				<h3><?php echo __("There are currently no posts."); ?></h3>
			<?php endif; ?>
		</div>

		<div class="side">
			<div class="block">
				<h3>Sidebar Header</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur id asperiores perspiciatis nobis maiores dicta, eveniet maxime explicabo ipsa vel soluta expedita, error! Fuga, aliquid iure?
				</p>
				<a href="#" class="button">More</a>
			</div>
		</div>
	</div>
<?php get_footer(); ?>