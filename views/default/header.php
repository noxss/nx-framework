<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?=$title?></title>
	<?php
	//call CSS
	if(isset($css)){
		foreach($css as $key => $value){
			echo '<link rel="stylesheet" href="'. $base . $css_path . $value .'" type="text/css" />' . "\n\t"; 
		}
	}
	?>

</head>

<body>