<?php

/**
 * Download data from url or you can authenticate and get data from url
 *
 * @param $url
 * @param $auth
 * @param $username
 * @param $password
 *
 * @return bool|mixed
 */
function get( $url, $auth = false, $username = false, $password = false ) {

	global $redirect_url;

	$isOk = false;

	if ( ! filter_var( $url, FILTER_VALIDATE_URL ) ) {
		return false;
	}

	$userAgent = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36';

	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
	if ( $auth == true ) {
		curl_setopt( $ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
		curl_setopt( $ch, CURLOPT_USERPWD, "$username:$password" );
	}
	curl_setopt( $ch, CURLOPT_USERAGENT, $userAgent );
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

	$result = curl_exec( $ch );

	if ( $result !== false ) {
		$statusCode   = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
		$redirect_url = curl_getinfo( $ch, CURLINFO_EFFECTIVE_URL );

		if ( $statusCode == 200 ) {
			$isOk = true;
		} else {
			echo 'Bad Status code: ' . $statusCode . PHP_EOL;
		}

	}
	curl_close( $ch );

	if ( $isOk ) {
		return $result;
	}

	return false;
}

/**
 * Extract content data between delimiters
 *
 * @param $data
 * @param $start
 * @param $end
 *
 * @return bool|mixed
 */
function extractTag( $data, $start, $end ) {
	$explode = explode( $start, $data );
	@$explode2 = explode( $end, $explode[1] );

	if ( strlen( $explode2[0] ) > 0 ) {
		return $explode2[0];
	}

	return false;
}

/**
 * Extract all the content between all matching delimiters
 *
 * @param $content
 * @param $start
 * @param $end
 *
 * @return array|bool|string
 */
function extractTags( $content, $start, $end ) {
	$values  = '';
	$extract = explode( $start, $content );
	$counter = count( $extract );
	for ( $i = 1; $i < $counter; $i ++ ) {
		$extract2 = explode( $end, $extract[ $i ] );
		if ( strlen( $extract2[0] ) > 1 ) {
			$values[] = $extract2[0];
		}
	}
	if ( count( $values ) > 0 ) {
		return $values;
	}

	return false;
}
