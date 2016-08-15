<?php

if ($x_stop_lp == 0 ) {
$datetime = date('Y.m.d H:i:s');
 if(empty($mmmsg))
$mmmsg = rand(0,count($messages)-1);

$text=array();
for($i=0;$i<1;$i++)
    { ++$mmmsg;
      
 if((count($messages)-1) < ($mmmsg-1))
 { $mmmsg = 1;}

 $ran = count($messages)-$mmmsg;

 if($ran < 0)
 { $ran = 0;
$mmmsg = 1;}

if(!in_array($messages[$ran],$text))
{$text[]=$messages[$ran];}else{$i--;}}
foreach($text as $message) {
 
}

if(empty($message))
$message = $messages[1];


if (strpos($message, 'today') !== false)
	$message = $message;
else
    $message = iconv("utf-8", "windows-1251//IGNORE", $message);

usleep($sleep_rcon);
	rcon('say "^6^7 '.$message.'"', '');
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='red'>" .meessagee($message)."</font>");
echo " \n\n [".$datetime."] Message -> ".meessagee($message)." \n Paused -> ".$tfinishh = (microtime(true) - $start)." seconds \n";
++$x_stop_lp; 



}
?>
 

