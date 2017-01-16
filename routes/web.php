<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{params}', function ($params) {
	
	function strmerge(&$output, $item, $separator = "") {
		
		if ((strlen($output) > 0) && (strlen($item) > 0)) {
			$output = $output . $separator;
		}
		
		$output = $output . $item;
	
	}

	function get_vars() {

		$s_args = "";
		$s_keys = array_keys($_GET);
		
		for ($i=0;$i<count($s_keys);$i++) {
			
			$argkey = $s_keys[$i];
			$s_temp = $_GET[$argkey];

			if (!is_array($s_temp)) {
		
				strmerge($s_args, "$argkey=$s_temp", "&");
		
			} else {

				for ($a=0;$a<count($s_temp);$a++) {
					strmerge($s_args, "$argkey" . "[]=" . $s_temp[$a], "&");
				}

			}

		}

		return $s_args;

	}

	$s_args = get_vars();
	$sender = $_SERVER['REMOTE_ADDR'];
	
	$HttpLog = new App\HttpLog;
	$HttpLog->parameter = $s_args;
	$HttpLog->sender = $sender;
	$HttpLog->save();
});