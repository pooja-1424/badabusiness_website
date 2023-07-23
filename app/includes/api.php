<?php
$request = $_REQUEST;
read($request);

function read($request_data){
    /* bada-business API Request */
    $curl_connection =curl_init('https://www.badabusiness-trainings.com/bbmylogin/modules/Webforms/capture.php');
    curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($curl_connection, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
    curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $request_data);
    $result = curl_exec($curl_connection);
    
    /* create logs */
   
    $logdetails= date("F j, Y, g:i a") . ': ' . 'Visitor ip='.$_SERVER['REMOTE_ADDR'] . ': ' .'Email='.$request_data['email'] . ': '.'Mobile='. $request_data['mobile'] . ': '.'ISD='.$request_data['cf_907'] . ': '.'lastname='.$request_data['lastname'] ."<br>" ;
    $fp = fopen('log_badabussiness.txt', "a+");
    fwrite($fp, $logdetails,strlen($logdetails));
    file_put_contents('log_badabussiness.txt',"\r\n",FILE_APPEND);
    //echo curl_errno($curl_connection) . '-' . curl_error($curl_connection);
    curl_close($curl_connection); 
    fclose($fp);
    return "success";
}
?>