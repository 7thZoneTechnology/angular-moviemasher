<?php

if (! function_exists('path_add_slashes')) {
	function path_add_slashes($s) {
		return add_slash_start(add_slash_end($s));
	}
}
if (! function_exists('path_add_slash_end')) {
	function path_add_slash_end($s) {
		if (empty($s)) $s = '';
		if (! substr($s, -1) == '/') $s .= '/';
		return $s;
	}
}
if (! function_exists('path_add_slash_start')) {
	function path_add_slash_start($s) {
		if (empty($s)) $s = '';
		if (! substr($s, 0, 1) == '/') $s = '/' . $s;
		return $s;
	}
}
if (! function_exists('path_concat')) {
	function path_concat($s1, $s2) {
		if (empty($s1)) $s1 = '';
		if (empty($s2)) $s2 = '';
		if (empty($s1) || empty($s2)) $s1 .= $s2;
		else $s1 = add_slash_end($s1) . strip_slash_start($s2);
		return $s1;
	}
}
if (! function_exists('path_strip_slashes')) {
	function path_strip_slashes($s) {
		return strip_slash_start(strip_slash_end(s));
	}
}

if (! function_exists('path_strip_slash_end')) {
	function path_strip_slash_end($s) {
		if (empty($s)) $s = '';
		if (substr($s, -1) == '/') $s = substr($s, 0, -1);
		return $s;
	}
}
if (! function_exists('path_strip_slash_start')) {
	function path_strip_slash_start($s) {
		if (empty($s)) $s = '';
		if (substr($s, 0, 1) == '/') $s = substr($s, 1);
		return $s;
	}
}
?>