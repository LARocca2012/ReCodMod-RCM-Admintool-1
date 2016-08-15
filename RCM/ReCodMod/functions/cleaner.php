<?php
function hx($sc)
{
    $sc = str_replace(array(
        "/ReCodMod/functions"
    ), '', $sc);
    $sc = str_replace(array(
        "//ReCodMod//functions"
    ), '', $sc);	
    $sc = str_replace(array(
        "\ReCodMod\functions"
    ), '', $sc);
    $sc = str_replace(array(
        "\\ReCodMod\\functions"
    ), '', $sc);	
    $sc = str_replace(array(
        "cleaner.php"
    ), '', $sc);
    return $sc . "";
}
$cpath = hx(__FILE__);
$x_ff = 1;
/* - Load configurations - */
require $cpath . 'ReCodMod/functions/_c.php';
//echo phpinfo();
echo  "\n         Welcome to ".$z_set." (c) http://recod.ru/ \n\n\n";
/* - Load functions - */
include($cpath . "ReCodMod/functions/functions.php");		
        $datetime = date('Y.m.d H:i:s');
        $date     = date('Y.m.d H:i:s');
        $dtx2     = date('Y-m-d H:i:s');
	
/* - Load functions - */
require $cpath . 'ReCodMod/functions/inc_functions.php'; 

//if(file_exists($cpath . 'ReCodMod/functions/install.php')){
require $cpath . 'ReCodMod/functions/install.php';
//$fh = fopen($cpath . 'ReCodMod/functions/install.php', 'a');
//fwrite($fh, 'DIE');
//fclose($fh);
//unlink($cpath . 'ReCodMod/functions/install.php');
//}

$fp=fopen($cpath."ReCodMod/x_cache/pos.txt", "a+");
fputs($fp, "0");
fclose($fp);


if(!file_exists($log_folder.'/g_log.log')){											
$fy = file($log_folder.'/g_log.log');
foreach ($fy as $parseglog) { $mplogfiler = $parseglog; }}



if (strpos($_SERVER['OS'], 'Windows') !== false)
{
$exec = exec("hostname");
$hostname = trim($exec);
$localIP = gethostbyname($hostname);  

if(empty($localIP))
$localIP = $server_ip;

if ($server_ip != $localIP){
echo " 
\n \n \n You use wrong localhost adress ($server_ip) in [cfg/_connection.php]. 
\n Your server localhost IP adress is ".$localIP."\n \n \n";
sleep (3000);
exit; }
  
}else{
//echo $localIP = getHostByName(php_uname('n'));
$command="/sbin/ifconfig eth0 | grep 'inet addr:' | cut -d: -f2 | awk '{ print $1}'";
$localIP = exec ($command);

if(empty($localIP))
$localIP = $server_ip;	


if ($server_ip != $localIP){
echo " \n \n \n You use wrong localhost adress ($server_ip) in [cfg/_connection.php]. \n Your server localhost IP adress is ".$localIP."\n \n \n";
sleep (3000);
exit; 
}

}




usleep($sleep_rcon);
require $cpath.'ReCodMod/functions/getinfo/rconpass.php';
fclose($connx);


if (empty($rconpassss)){ 
echo "
\n\n RCM NOT WORK 
\n YOUR GAME SERVER NOT STARTED!,
\n OR YOU USE WRONG server_ip AND server_port IN [cfg/_connection.php]!,
\n fix it for RCM working! 
\n THAN RESTART go FILE! \n\n\n";
	sleep (7000);
	exit;}


if (preg_match("/Bad rcon/i", $rconpassss)){ 
echo "\n\n Your use wrong rcon password -> ($server_rconpass = ) 
\n GAME server rcon password need add in [cfg/_connection.php], 
\n FROM your game server config file,
\n fix it for RCM working! 
\n OR TRY RESTART go FILE! 
\n  RCM NOT WORK \n\n";
	sleep (7000);
	exit;}

	
if (preg_match("/No rconpassword/i", $rconpassss)){ 
echo "\n\n No rconpassword set on your game server!\n\n";
	sleep (17000);
	exit;}	
	
	
usleep($sleep_rcon);
require $cpath.'ReCodMod/functions/getinfo/fs_homepath.php';
fclose($connx);
if(empty($homepthh)){
	echo "\n\n You use wrong ($server_rconpass = )rcon password in [cfg/_connection.php],\n or in your game server config files, \n fix it for RCM working! \n\n";
	sleep (3000);
	exit;}
	
    list($vv9cm, $vv12nm, $xxkm , $xxkmb) = explode('"', $homepthh);
$pppath = sevenofff($xxkmb);
usleep($sleep_rcon*3);
require $cpath.'ReCodMod/functions/getinfo/g_log.php';
fclose($connx);
      list($vv9cl, $vv12nl, $xxkl, $xxkml) = explode('"', $gloggs);
              
 usleep($sleep_rcon*3);
 require $cpath.'ReCodMod/functions/getinfo/fs_game.php';
 fclose($connx);
       list($onee, $twoo, $threee, $fourr) = explode('"', $fssgame);              
	  
if (strpos($_SERVER['OS'], 'Windows') !== false)
{
		if (strpos($xxkmb, '\^7') !== false)
		$pppath = $pppath.'\main';
	
  $mplogfilenew = $pppath.'\##&###'.sevenofff($xxkml).'\##&###'.sevenofff($fourr);
  
$exec = exec("hostname");
$hostname = trim($exec);
$localIP = gethostbyname($hostname);  

if(empty($localIP))
$localIP = $server_ip;

if ($server_ip != $localIP){
echo " 
\n \n \n You use wrong localhost adress ($server_ip) in [cfg/_connection.php]. 
\n Your server localhost IP adress is ".$localIP."\n \n \n";
sleep (3000);
exit; }
  
}else{
	if (strpos($xxkmb, '/^7') !== false)
		$pppath = $pppath.'/main';
	
  $mplogfilenew = $pppath.'/'.sevenofff($xxkml).'/'.sevenofff($fourr);
  

//echo $localIP = getHostByName(php_uname('n'));
$command="/sbin/ifconfig eth0 | grep 'inet addr:' | cut -d: -f2 | awk '{ print $1}'";
$localIP = exec ($command);

if(empty($localIP))
$localIP = $server_ip;	


if ($server_ip != $localIP){
echo " \n \n \n You use wrong localhost adress ($server_ip) in [cfg/_connection.php]. \n Your server localhost IP adress is ".$localIP."\n \n \n";
sleep (3000);
exit; 
}



}

$mplogfiler = sevenofff($mplogfilenew);
AddToparsser($mplogfiler);

if(!file_exists($mplogfilexl))
{echo "\n error! 
\n DO NOT STARTING! 
\n YOU HAVE PROBLEM WITH settings 
\n g_log in mplogfile line ([cfg/_connection.php]) it is incorrect 
\n PLEASE ADD CORRECT GAME LOGFILE FOLDER ADRESS! \n
"; 

echo "\n   TRY ADD in mplogfile line ([cfg/_connection.php]): ".$mplogfiler = sevenofff($mplogfilenew)." \n \n";

sleep(7000); exit;}
else{
                        usleep($sleep_rcon);
                        require $cpath . 'ReCodMod/functions/inc_functions2.php';
                        for ($i = 0; $i < 1; $i++) {
                            require $cpath . 'ReCodMod/functions/inc_functions3.php';
                            //if ((!$valid_id) || (!$valid_ping))
                            //    Continue;
                           
                        //FOR SERVERS ADMINISTRATOR WHO DON'T UNDERSTAND  HOW NEED USE GAME SERVER CONFIGURATION FILE! 
                            usleep($sleep_rcon*2);
			    rcon('set g_log games_mp.log', '');
			    usleep($sleep_rcon*2);
                            rcon('set g_logsync 1', '');}	
}


if(!file_exists($mplogfilexl)) 	
//{echo " logfile ok \n\n";
//}
//else 
{
	echo "\n error! 
\n DO NOT STARTING! 
\n YOU HAVE PROBLEM WITH settings 
\n g_log in mplogfile line ([cfg/_connection.php]) it is incorrect 
\n PLEASE ADD CORRECT GAME LOGFILE FOLDER ADRESS! 
\n OR TRY RESTART RCM ADMIN TOOL!";
echo "\n   TRY ADD THIS in mplogfile line ([cfg/_connection.php]): ".$mplogfiler = sevenofff($mplogfilenew)." \n \n";
                             usleep($sleep_rcon);
                        require $cpath . 'ReCodMod/functions/inc_functions2.php';
                        for ($i = 0; $i < 1; $i++) {
                            require $cpath . 'ReCodMod/functions/inc_functions3.php';
                            //if ((!$valid_id) || (!$valid_ping))
                            //    Continue;
                           
                        //FOR SERVERS ADMINISTRATOR WHO DON'T UNDERSTAND  HOW NEED USE GAME SERVER CONFIGURATION FILE! 
                            usleep($sleep_rcon*2);
			    rcon('set g_log games_mp.log', '');
			    usleep($sleep_rcon*2);
                            rcon('set g_logsync 1', '');}
                            
echo "\n MAYBE NEED ADD THIS PATH ADRESS IN [[cfg/_connection.php]] mplogfile LINE  -> ".$mplogfiler."
\n";
AddToparsser($mplogfiler);                            
                            
         sleep(3000); exit;                    
}

$vvvvv = @fopen($mplogfilexl, "w+");
@ftruncate($mplogfilexl, 0);
fclose($vvvvv);
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos);
							
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='silver'> LogFile game_mp.log starting auto reset! </font> "); 
AddToLog1clear ("[".$datetime."] Server : LogFile game_mp.log starting auto reset! "); 
//echo "\n Cache logfiles restarted......\n";
                        usleep($sleep_rcon);
                        require $cpath . 'ReCodMod/functions/inc_functions2.php';
                        for ($i = 0; $i < 1; $i++) {
                            require $cpath . 'ReCodMod/functions/inc_functions3.php';
                            //if ((!$valid_id) || (!$valid_ping))
                            //    Continue;
                            usleep($sleep_rcon);
                            rcon('sets _'.$z_set.'', '');
							usleep($sleep_rcon);
                            rcon('set g_logsync 1', '');}

$f = fopen($cpath."ReCodMod/x_logs/parsed_code.log", "wb");
$file = file_get_contents($codecon); 
fwrite($f, $file);
fclose($f);
for ($i = 0; $i < 70; $i++) {
	
$parsexrcm = trim(readloglinercx($cpath.'ReCodMod/x_logs/parsed_code.log'));
	
if (preg_match("/admin/i", $admin_code1)){ 
	if ($admin_code1 != "xadmin")
{	
	
$pwrcm = md5(md5($admin_code));
if (preg_match("/$pwrcm/i", $parsexrcm)) {
   list($ipg, $pwrrr) = explode('/', $parsexrcm);
try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
	$db->exec("DELETE FROM x_db_admins WHERE s_adm='$ipg'");
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$ipg' LIMIT 1";
 $stat = $db->query($sql)->fetchColumn();
if($stat > 0)
{
   $db->exec("UPDATE x_db_admins SET s_group='0' WHERE s_adm='$ipg'");
      echo '-Created-';    
 
	  }
  else {
 if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$ipg', '$date', '0', '$pwrcm')") > 0) {
echo 'ADMIN Inserted in database' . "\n"; 
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/ 
}
}
$res = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
	} //else {echo "-.";}
}}	
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////////		
if (preg_match("/moderator/i", $moderator_code1)){ 
	if ($moderator_code1 != "xmoderator")
{
$pwrcm = md5(md5($moderator_code));
if (preg_match("/$pwrcm/i", $parsexrcm)) {
   list($ipg, $pwrrr) = explode('/', $parsexrcm);
try
  {
		   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
	$db->exec("DELETE FROM x_db_admins WHERE s_adm='$ipg'");
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$ipg' LIMIT 1";
 $stat = $db->query($sql)->fetchColumn();
if($stat > 0)
{
   $db->exec("UPDATE x_db_admins SET s_group='md' WHERE s_adm='$ipg'");
      echo '-Created-';  
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/	  
	  }
  else {
 if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$ipg', '$date', 'md', '$pwrcm')") > 0) {
echo 'moderator Inserted in database' . "\n"; 
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/ 
}
}
$res = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
	} //else {echo "-";}
}}	
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////////		

	
if (preg_match("/specialguests/i", $specialguests_code1)){	
	if ($specialguests_code1 != "xspecialguests")
{
$pwrcm = md5(md5($specialguests_code));
if (preg_match("/$pwrcm/i", $parsexrcm)) {
   list($ipg, $pwrrr) = explode('/', $parsexrcm);
try
  {
		   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
	$db->exec("DELETE FROM x_db_admins WHERE s_adm='$ipg'");
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$ipg' LIMIT 1";
 $stat = $db->query($sql)->fetchColumn();
if($stat > 0)
{
   $db->exec("UPDATE x_db_admins SET s_group='5' WHERE s_adm='$ipg'");
      echo '-Created-';  
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/	  
	  }
  else {
 if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$ipg', '$date', '5', '$pwrcm')") > 0) {
echo 'SPECIAL GUEST Inserted in database' . "\n"; 
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/ 
}
}
$res = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
	} //else {echo "-";}
}}	
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////////			
if (!empty($vip_code1) && (preg_match("/vip/i", $vip_code1))){	
	if ($vip_code1 != "xvip")
{
$pwrcm = md5(md5($vip_code));
if (preg_match("/$pwrcm/i", $parsexrcm)) {
   list($ipg, $pwrrr) = explode('/', $parsexrcm);
try
  {
		   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
	$db->exec("DELETE FROM x_db_admins WHERE s_adm='$ipg'");
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$ipg' LIMIT 1";
 $stat = $db->query($sql)->fetchColumn();
if($stat > 0)
{
   $db->exec("UPDATE x_db_admins SET s_group='2' WHERE s_adm='$ipg'");
      echo '-Created-';  
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/	  
	  }
  else {
 if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$ipg', '$date', '2', '$pwrcm')") > 0) {
echo 'VIP Inserted in database' . "\n"; 
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/ 
}
}
$res = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
	} //else {echo "-";}
}}		
	
	
	}
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos);

echo "\n          YOUR (games_mp.log) possible log file path is: \n          ".$mplogfiler = sevenofff($mplogfilenew)." \n \n";

	usleep($sleep_rcon*2);
require $cpath.'ReCodMod/functions/getinfo/sv_hostname.php';

Prservv($servername);

usleep($sleep_rcon*2);
require $cpath.'ReCodMod/functions/getinfo/gamename.php';
fclose($connx);
      list($vee, $vrr, $xgg, $xff) = explode('"', $gamename);	  
Prgamename($xff);	  
	  
usleep($sleep_rcon*2);
require $cpath.'ReCodMod/functions/getinfo/shortversion.php';
fclose($connx);
      list($kll, $cbv, $tyh, $mmn) = explode('"', $shoortversion);  
Prshortver($mmn);

echo "\n Game: ".$xff = sevenofff($xff);
echo "\n Patch: ".$mmn = sevenofff($mmn)."\n";
echo "\n Pre loading - OK! ";
	  
						
?>
