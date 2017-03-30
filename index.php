<?php get_header(); ?>

	
	<!-- Outer Start -->
	<div id="outer">
		
		<!-- Wrap Start -->
		<div id="wrap">
			
			
			<!-- Sidebar Start -->
<?php get_sidebar(); ?>
			<!-- Sidebar End -->
			
			<!-- Content Start -->
			<div id="content">
				
		<div class="entry">

<?php if (have_posts()) : ?>
<?php query_posts( 'posts_per_page=1' ); ?>
		<?php while (have_posts()) : the_post(); ?>


				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<div class="post">
        <h6><?php echo __('Post written by:'); ?>  <?php the_author_posts_link() ?></h6>
				<?php the_content('&raquo; Continue your journey &raquo;'); ?>
		</div>
<br />
				<div class="all_posts"><a href="<?php echo esc_url( home_url( '/' ) ); ?>archives/"><?php echo __('See all posts &raquo;'); ?></a></div>


		<?php endwhile; ?>


	<?php else : ?>

		<h2 class="center"><?php echo __('Not Found'); ?></h2>
		<p class="center"><?php echo __('Sorry, but you are looking for something that isn\'t here.'); ?></p>

	<?php endif; ?>
				
			</div>
			<!-- Content End -->			
			<div class="push"></div>
			
		</div>
		<!-- Wrap End -->
		
<?php get_footer(); ?>
	</div>
	<!-- Outer End -->
	
</body>
</html>