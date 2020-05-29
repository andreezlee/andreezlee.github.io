<!DOCTYPE html>
<?php include "library.php"; add_stylesheet(); ?>
<html>
	<head>
		<?php make_header(0); ?>
	</head>
	<body>
		<?php
			$style = '<style>
			.contents {display: grid;grid-template-columns: repeat(4, 1fr);}
			.profile {grid-column-start: 1;grid-column-end: 1;margin:0;padding:0;line-height:20px}
			.info {grid-column-start: 2;grid-column-end: -1;}
			img {width: 100%;}
			</style>';

			$profile = '<div class="profile">
			<li style="list-style-type: none">
			<ul><img src="Profile.jpg"></ul>
			<ul><h2>Cornell University 2020</h2></ul>
			<ul><h3>Computing and Information Science</h3></ul>
			<ul><h4>Master of Engineering in Computer Science</h4></ul>
			<ul><h3>College of Arts and Sciences</h3></ul>
			<ul><h4>Bachelor of Arts in Computer Science</h4></ul>
			</li>
			</div>';
			make_body(0, $style . $profile);
		?>
	</body>
</html>