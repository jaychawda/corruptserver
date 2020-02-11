<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST['payload']) && isset($_REQUEST['hmac'])) {

    $payload = $_REQUEST['payload'];
    $hmac = $_REQUEST['hmac'];
    $calculated_hmac = strrev( $payload );
    if(strcmp($hmac,$calculated_hmac)==0)
 	{
    	http_response_code(200);
    	echo $payload;
    }
    else{
    	http_response_code(406);
    }
    
}else{
	http_response_code(401);
}
?>