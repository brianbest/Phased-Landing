<?php get_header(); ?>
<div id="main" class="container" style="padding-top:5rem">
	<div id="content" class="row">
		<div class="col-sm-12 col-md-12">
			<h1>Blog</h1>
		</div>
	</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<h1><?php the_title(); ?></h1>
				<h4>Posted on <?php the_time('F jS, Y'); ?></h4>
			</div>
			<div class="col-sm-12 col-md-6">
				<p><?php the_excerpt(); ?></p>
				<a href="<?php echo get_permalink(); ?>"> Read More...</a>
			</div>
		</div>
			<hr> <?php endwhile; else: ?>
			<div id="content" class="row">
				<div class="col-sm-12 col-md-10 col-md-offset-2">
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				</div>
			</div>
			

		<?php endif; ?>
		
</div>
<?php get_footer(); ?>