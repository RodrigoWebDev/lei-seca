<?php 

	function load_scripts(){
		wp_enqueue_style("style", get_template_directory_uri() . "/css/style.css");
		wp_enqueue_style("icons", get_template_directory_uri() . "/css/ionicons.min.css");
	}

	add_action("wp_enqueue_scripts", "load_scripts");

	add_theme_support("post-thumbnails");

 ?>