<?php get_header(); ?>

<div class="go-down">
	<?php get_sidebar(); ?>
	<div class="content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 	<h2>
 		<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
 			<?php the_title(); ?>
 		</a>
 		<?php the_content(); ?>
 	</h2>
	<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>