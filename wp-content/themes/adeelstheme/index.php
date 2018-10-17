<?php get_header(); ?>

<div class="go-down">
	<?php get_sidebar(); ?>
	<div class="content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 	<h1>
 		
 			<?php the_title(); ?>
 	</h1>
 	<p><?php the_excerpt(); ?></p>
 	<p>
 		<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
 			Read Full Story
 		</a>
 	</p>
	<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>