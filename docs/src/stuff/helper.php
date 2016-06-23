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
