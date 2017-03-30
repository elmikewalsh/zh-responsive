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

	<h2><?php echo __('page lost, a haiku'); ?></h2>
		<div class="post">

<br>
<p><?php echo __('our search is lonely'); ?></p>

<p><?php echo __('a footprint left in pure snow'); ?></p>

<p><?php echo __('blown into'); ?> <a href="<?php echo get_option('home'); ?>/"><?php echo __('nothing'); ?></a></p>

	</div>
	</div>

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