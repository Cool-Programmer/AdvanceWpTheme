<?php get_header(); ?>
	<div class="container content">
		<div class="main block">
			<h1 class="page-header">
				<?php 
					if (is_category()) {
						single_cat_title();
					}elseif(is_author()){
						the_post();
						echo "Archives by: " . get_the_author();
					}elseif(is_tag()){
						single_tag_title();
					}elseif(is_day()){
						echo "Archives by day: " . get_the_date();
					}elseif(is_month()){
						echo "Archives by month" . get_the_date('F Y');
					}elseif(is_year()){
						echo "Archives by year" . get_the_date('Y');
					}else{
						echo "Archives";
					}
				?>
			</h1>
			<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
			<div class="archive-post">
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<p class="meta"><?php echo __('Created by') ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a> <?php echo __("on"); ?> <?php the_time('F j, Y g:i'); ?>
				</p>
			</div>
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