<?php
function register_parallax_sidebar(){
	register_sidebar(array(
		'name'=>'parallax sidebar name',
		'id'=>'parallaxSidbarID',
		'description'=>'a sidebar in the parallax page, inspired by envato',
		'before_widget'=>'',
		'after_widget'=>'',
		'before_title'=>'',
		'after_title'=>''

		));
}

add_action('init','register_parallax_sidebar');

?>