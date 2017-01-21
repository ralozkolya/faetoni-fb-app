<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function get_full_language($lang) {
	
	if($lang === GE) {
		return 'georgian';
	}

	elseif($lang === EN) {
		return 'english';
	}

	else {
		return 'russian';
	}
}