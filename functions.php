<?php 

	function load_scripts(){
		wp_enqueue_style("style", get_template_directory_uri() . "/css/style.css");
        wp_enqueue_style("icons", get_template_directory_uri() . "/css/ionicons.min.css");
        wp_enqueue_script("script", get_template_directory_uri() . "/js/script.js", array("jquery"), null, true);
        wp_enqueue_script("popper-js", "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js", null, true);
        wp_enqueue_script("js-bootstrap", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js", null, true);
	}

	add_action("wp_enqueue_scripts", "load_scripts");

	add_theme_support("post-thumbnails");

    register_nav_menus(
        array(
            "meu-menu" => "Menu principal"
        )
    );

 ?>