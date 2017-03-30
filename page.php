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


			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">

				<?php the_content(__('<p class="serif">Read the rest of this page &raquo;</p>')); ?>

				<?php wp_link_pages(array('before' => __('<p><strong>Pages:</strong> '), 'after' => '</p>', 'next_or_number' => 'number')); ?>

	<small><?php edit_post_link(__('Edit'), '<p>', '</p>'); ?></small>
		</div>

		</div>
				
		<?php endwhile; endif; ?>

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