<?php  
			if ($game_patch == 'cod1_1.1')
			$i_name1c = 17;
			else
		    $i_name1c = 22;

$server_addr = "udp://" . $server_ip;
@$connect = fsockopen($server_addr, $server_port, $re, $errstr, 30);
if (!$connect) { die('Can\'t connect to COD gameserver.'); }
//socket_set_timeout ($connect, 1, 000000);  // bylo2
stream_set_timeout ($connect, 0, 36000); //1e5
$send = "\xff\xff\xff\xff" . 'rcon "' . $server_rconpass . '" status';
fwrite($connect, $send);
$output = fread ($connect, 1);
if (!empty($output)) {
do {
$status_pre = socket_get_status ($connect);
$output = $output . fread ($connect, 1024);  //1024
$status_post = socket_get_status ($connect);
} while ($status_pre['unread_bytes'] != $status_post['unread_bytes']);
};

$output = explode ("\xff\xff\xff\xffprint\n", $output);
 $sffg = $output;
$output = implode ('!', $output);
$output = explode ("\n",$output);

foreach ($output as $value) {
$pos  = strripos($value, 'map:');
if ($pos !== false) { 
list($user, $mmapname) = explode(": ", $value);   
}}

if(empty($mmapname))
	$mmapname = 'Unknown';

$mmapname = trim($mmapname);


$player_cnt = count($output);


$rec_ok = ($player_cnt>3);
if (!$rec_ok)
	{
/////////////////echo "\n ---inc_functions2.php exit?---";
//exit;

}

unset($output[0],$output[1],$output[2],$output[$player_cnt-2],$output[$player_cnt-1]);
$output = array_values($output);
$player_cnt = count($output);

?>