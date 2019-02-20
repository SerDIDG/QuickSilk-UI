<?php

function get_include_contents($filename, $variables = array()) {
	if (is_file($filename)) {
		ob_start();
		global $variables;
		include $filename;
		return ob_get_clean();
	}
	return false;
}

function file_force_contents($dir, $contents){
	$parts = explode('/', $dir);
	$file = array_pop($parts);
	$dir = '';
	foreach($parts as $part)
		if(!is_dir($dir .= "/$part")) mkdir($dir);
	file_put_contents("$dir/$file", $contents);
}

function detectRequestBody() {
	$rawInput = fopen('php://input', 'r');
	$tempStream = fopen('php://temp', 'r+');
	stream_copy_to_stream($rawInput, $tempStream);
	rewind($tempStream);

	return $tempStream;
}