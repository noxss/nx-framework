
<?php
	//loading JS
	if(isset($js)){
		foreach($js as $key => $value){
			echo '<script src="'. $base . $js_path . $value .'"></script>' . "\n";
		}
	}
?>
</body>

</html>