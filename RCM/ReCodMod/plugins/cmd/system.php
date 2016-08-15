<?php
if (strpos($msgr, $ixz.'sys') !== false)
    { 	
 echo 'iiii';
 $i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	 
$na1 = trim($kski[1]);
$na2 = trim($x_nickx);
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = (strpos($na1, $na2) !== false); 
else
 $jjj = ((trim($i_id) == trim($idnum)) || (strpos($na1, $na2) !== false));
    if($jjj){ 
echo 'iiittti';
 if (strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN')
 {
  $suptime = system("uptime"); 
  $syys = system("uname -a");  
//$smemmory = system("free -m"); 
//system("df -h"); 
  $ccgc = system("cat /proc/cpuinfo | grep \"model name\\|processor\"");
 
echo " \n uptime".$suptime;
echo " \n SYSTEM".$syys;
echo " \n CPU".$ccgc; 
  
usleep($sleep_rcon);
rcon('say ^6 ^3System uptime: ^7'.$suptime.'', '');		
usleep($sleep_rcon);
rcon('say ^6 ^3System: ^7'.$syys.'', '');	
usleep($sleep_rcon);
rcon('say ^6 ^3CPU: ^7'.$ccgc.'', '');
	
 ++$x_stop_lp;
}
 else
 {
	 $serveros = $_SERVER['OS'];
usleep($sleep_rcon);
rcon('tell '.$i_id.' ^6 ^3System info: ^7'.$serveros.'', '');
 ++$x_stop_lp;
}

						
 }
 
}

?>
 
