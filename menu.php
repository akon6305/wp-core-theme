<?PHP 

function forkan_akon_theme_menu(){

register_nav_menus(array(
		'main_menu'=>'Main Menu',
		
		));


}

add_action('init','forkan_akon_theme_menu');


function akon_fallback(){

	echo '<ul class="nav navbar-nav">';
	if ('page'!=get_option('show_on_fron')) {
		echo '<li><a href="'.site_url().'">Home</a>';
	}
	echo '</ul>';
}



?>