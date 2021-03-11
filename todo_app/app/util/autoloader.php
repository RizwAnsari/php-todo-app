<?php
spl_autoload_register(function($className) {
	// echo $className . "<br>";
	$path = str_replace('\\','/',$className);
	$file = $path . '.php';
	if (file_exists($file)) {
		// echo $file . "<br>";
		include $file;
	}
});