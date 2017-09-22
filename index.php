<?php get_header(); ?>
	<div class="container content">
		<div class="main block">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post(); ?>
					<?php get_template_part('content', get_post_format()); ?>
				<?php endwhile; ?>
			<?php else: ?>
				<h3>
					<?php echo __("There are currently no posts."); ?>
				</h3>
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