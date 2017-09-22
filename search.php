<?php get_header(); ?>
	<div class="container content">
		<div class="main block">
			<h1 class="page-header">
				<?php echo __("Search Results") ?>
			</h1>
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post(); ?>
					<?php get_template_part('content', get_post_format()); ?>
				<?php endwhile; ?>	
			<?php else: ?>
				<h3>					
					<?php echo __("There are no posts matching your search criteria."); ?>
				</h3>
			<?php endif; ?>
		</div>

		<div class="side">
			<div class="block">
				<?php if(is_active_sidebar('widget-1')): ?>
					<?php dynamic_sidebar('widget-1'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>