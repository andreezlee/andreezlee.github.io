<?php

$num_pgs = 4;
$pgs = array("index", "experience", "past_projects", "contact");
$pg_names = array("About Me", "Experience", "Past Projects", "Contact Me");

function add_stylesheet() {
	echo '<style type="text/css">
		body {margin: 0; padding: 0;background-color: #777;position: relative;}

		.topnav {height: 10%; list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: darkslateblue;}
		.topnav a {float: left;display: block;color: lightblue;text-align: center;padding: 14px 16px;text-decoration: none;}
		.topnav a:hover{background-color: black;}

		.contents {color: white;}
		</style>';
}

function make_header($index){
	global $pg_names;
	echo '<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>'. $pg_names[$index] .'</title>';
}

function make_body($index, $contents){
	global $num_pgs, $pgs, $pg_names;
	echo '<ul class="topnav">';
	for ($i=0; $i < $num_pgs; $i++) {
		if ($index == $i) {
			echo '<li><a href="' . $pgs[$i] . '.php" style = "color: white">' . $pg_names[$i] . '</a></li>';
		} else {
			echo '<li><a href="' . $pgs[$i] . '.php">' . $pg_names[$i] . '</a></li>';
		}
	}
	echo '</ul>';

	echo '<div class="contents">';
	echo $contents;
	echo '</div>';
}

?>