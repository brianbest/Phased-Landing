<?php get_header(); ?>


<div class="container-fluid">
  <div class="row">
	<div class="col-sm-12 col-md-10 col-md-offset-1">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<h4>Posted on <?php the_time('F jS, Y'); ?></h4>
			<p><?php the_content(); ?></p>
		<hr> <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	</div>

</div>
</div>

<?php get_footer(); ?>