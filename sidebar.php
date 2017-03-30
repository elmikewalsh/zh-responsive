<section id="sidebar"> 

	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
	<p id="tagline"><a href="/"><?php bloginfo('description'); ?></a></p> 

	<subscribe>
		<ul> 
			<li><small>Subscribe: <a href="http://www.facebook.com/pages/Imaginalgo/153230814714604" target="_blank">facebook</a> | <a href="http://twitter.com/#!/imaginalgo" target="_blank">twitter</a> | <a href="https://plus.google.com/b/109181901531994213965/" target="_blank">+</a></small></li> 
			<li><small>Join 225,000 sexy readers</small></li> 
		</ul> 
	</subscribe>

<nav id="nav-wrap">
<ul id="nav">
<?php wp_nav_menu( array('theme_location'  => 'sidebar_menu' ,'sort_column' => 'menu_order', 'container_class' => 'sidebar_menu' ) ); ?>
</ul>
</nav>



</section> 
