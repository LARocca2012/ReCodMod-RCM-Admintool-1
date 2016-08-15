<?php
if ($x_stop_lp == 0 ) {
////$r_ch = trim($chistx);

$x_admin = 0;

//$vipt = (array_search($chistx, $r_adm, true) !== false);





try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);

  $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
    foreach($result as $row)
    {

   $adm_ip  = $row['s_adm'];
   $a_grp  = $row['s_group'];
   
  $adm_ip = trim($adm_ip);
  $i_ipo = trim($i_ip);  

if(empty($guidn))
$guidn = 0; 

  if(($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ip == $i_ipo) && (($a_grp == 0) || ($a_grp == 111)) )
   {

$cron_time=filemtime($cpath."ReCodMod/x_cron/cron_time");   
if (time()-$cron_time>=300) {        
    file_put_contents($cpath."ReCodMod/x_cron/cron_time","");     
 ///admin is online
$vv = $adm_ip;
echo '      admin online='.$vv; 	
}

if ($game_ac == '0'){

                    }
                    else 
					{				
//usleep($sleep_rcon);
//rcon('say ^6 ^2Admin ^6[^7'.$i_name.'^6] ^2online', '');					
					}      
	        $x_admin = 1;
	}	
}		  
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
  if($x_admin == 0)
	      {	



try
  {
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////

  $result = $db2->query("SELECT * FROM bans");
    foreach($result as $row)
    {
	  
		$playername = $row['playername'];
		$reason  = 	$row['reason'];
	
	      $plnm = trim($playername);
          $i_nn = trim($i_name);
		  
	 if (($plnm == $i_nn) && ($i_name != ''))
		{	
  if (($x_number != 1) && (! $vip))
	{		
	//rcon('tell '. $i_id . ' ' . $i_name . ' "'.$ban_name.'"', '');
		  usleep($sleep_rcon);

if ($game_ac == '0'){
 //usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' BAN!', '');
else
        rcon('clientkick '. $i_id, '');
}
else { 
		///rcon('say  ^7' . $i_name . ' '.$ban_name_all.' "^7Reason:^1" "'.$reason.'"', '');
		  usleep($sleep_rcon);
rcon('akick '. $i_id.' " ^6[^7BANNED^6]"', ''); rcon('clientkick '. $i_id, '');}
AddToLog("[".$datetime."] BANNED NICK KICK: (" . $i_ip . ") (" . $i_name . ")");		++$x_stop_lp;	++$x_stop_lp;
		++$x_number;
		}
	} 
}	
	
//$result = null;
//$db2 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
	
	
	
	
try
  {
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////

  $result = $db2->query("SELECT * FROM bans WHERE ip='$i_ip'");
    foreach($result as $row)
    {	
	

		$ipuuu = $row['ip'];
		$playername1 = $row['playername'];
		$reason  = 	$row['reason'];		
      if (($x_number != 1) && (! $vip))
		{
		//rcon('tell '. $i_id . ' ' . $playername1 . ' "'.$ban_ip.'"', '');
		  usleep($sleep_rcon);

if ($game_ac == '0'){ 

//usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' BAN!', '');
else
        rcon('clientkick '. $i_id, '');

}
else { 
		
$cron_time=filemtime($cpath."ReCodMod/x_cron/cron_time1");        //получаем время последнего изменения файла
if (time()-$cron_time>=120) {             //сравниваем с текущим временем - 10 минут
    file_put_contents($cpath."ReCodMod/x_cron/cron_time1","");    //перезаписываем файл cron_time
		rcon('say  ^7' . $playername1 . ' '.$ban_ip_all.' "^7Reason:^1" "'.$reason.'"', '');

usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' '.$reason.'!', '');
else
        rcon('clientkick '. $i_id, '');
 usleep($sleep_rcon);
 rcon('kick '. $playername1, '');
		                    }
		  
rcon('akick '. $i_id.' " ^6[^7BANNED^6]"', ''); rcon('clientkick '. $i_id, '');}
AddToLog("[".$datetime."] BANNED IP KICK: (" . $i_ip . ") (" . $i_name . ")");		



           ++$x_stop_lp;			
		++$x_number;
		echo ' bans   '.$tfinishh = (microtime(true) - $start); 
//exit;
		}	
	}	

//$result = null;
//$db2 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }



	
/////////////////////////////////////////////////////////////////////////////////////////////////////		

try
  {
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');

  $result = $db2->query("SELECT * FROM x_words");
    foreach($result as $row)
    {

      $namer = $row['z_names'];
  if((preg_match('/'.$namer.'/si', $i_name, $namez)) && ($i_name != ''))
        {	
	  usleep($sleep_rcon);

if ($game_ac == '0'){ 


usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' Bad name!', '');
else
        rcon('clientkick '. $i_id, '');

}

else { 
	rcon('tell '. $i_id . ' "'.$rules_bad_name_msg.'"', '');
	    usleep($sleep_rcon);
rcon('akick '. $i_id.' " ^6[^7BAD NAME^6]"', ''); rcon('clientkick '. $i_id, '');}
AddToLog("[".$datetime."] BANNED NICK KICK: (" . $i_ip . ") (" . $i_name . ")");	
++$x_stop_lp;		  //echo $namez[0];       
	//echo ' proxod3   '.$tfinishh = (microtime(true) - $start);	
		}
      else
        {
       // echo 'No match found';
	   //echo ' vooooooords   '.$tfinishh = (microtime(true) - $start);
        }
    }	
	
	
	
//$result = null;
//$db2 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	
/////////////////////////////////////////////////////////////////////////////////////////////////////






 
 	if (($rules_kick_bad_named) && (array_search(strtolower($i_name), $rules_badname, true) !== false) && ($i_ping != 111) && ($i_ping != '999'))
	    {
		  usleep($sleep_rcon);

if ($game_ac == '0'){ 

usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' Bad named!', '');
else
        rcon('clientkick '. $i_id, '');

}
else { 
		rcon('tell '. $i_id . ' "'.$rules_bad_name_msg.'"', '');
		  usleep($sleep_rcon);
rcon('akick '. $i_id.' " ^6[^7BAD NAME^6]"', ''); rcon('clientkick '. $i_id, '');}
AddToLog("[".$datetime."] BANNED NICK KICK: (" . $i_ip . ") (" . $i_name . ")");
++$x_stop_lp;
		if ($rules_msgtoall_kicked_enable)
		    {
			  usleep($sleep_rcon);
			rcon('say  ^7"'.$rules_msgtoall_kicked_bad_name.'"', $i_name);
			}
		continue;
		}	
 		
//////////////////////////////============================	 IP RANGES
///////////////////////////////////////////Super Range
if ($i_ip == '')		
	{echo ' ban1 error';}else{	
	$rules_super_range[] = '000.000';
	$x_addr2 = explode(".", $i_ip); 
	$dati = '.';
	if (($rules_kick_ip_super_range) && (array_search(strtolower($x_addr2[0].$dati.$x_addr2[1]), $rules_super_range, true) !== false))
	    {
	//rcon('kick '. $i_name, '');	
	  usleep($sleep_rcon);
if ($game_ac == '0'){ 
usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' BAN!', '');
else
        rcon('clientkick '. $i_id, '');
}
else { rcon('akick '. $i_id.' " ^6[^7BANNED^6]"', ''); rcon('clientkick '. $i_id, '');}
		AddToLog("[".$datetime."] SUPER I.R. KICK: (" . $i_ip . ") (" . $i_name . ")");	
++$x_stop_lp;		//continue;
}else{ }		
	//	echo $x_addr2[0].$dati.$x_addr2[1];
}

///////////////////////////////////////////Simple Range
$dat = '.';
		$x_addr = explode(".", $i_ip); 

if ($i_ip == '')		
	{echo ' ban1 error';}else{
	


	
	
	
try
  {
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////

  $result = $db2->query("SELECT * FROM x_ranges WHERE ip_ranges='$x_addr[0].$dat.$x_addr[1]'");
    foreach($result as $row)
    {	
		$ip_r = $row['ip_ranges'];
		//rcon('kick '. $i_name, '');	
		  usleep($sleep_rcon);
if ($game_ac == '0'){ rcon('clientkick '. $i_id, '');}
else { rcon('akick '. $i_id.' " ^6[^7BANNED^6]"', ''); rcon('clientkick '. $i_id, '');}	
        AddToLog("[".$datetime."] I.R. KICK: (" . $i_ip . ") (" . $i_name . ")");		
++$x_stop_lp;		echo ' x-rangeee   '.$tfinishh = (microtime(true) - $start);	
	}
	
	
	
$result = null;
$db2 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }		
	
	
	
	
	
}	


if($stopforumspam == 1)
{


try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);

$sql = "SELECT * FROM x_db_admins WHERE s_group='$i_ip' and s_group='0' or s_group='2' LIMIT 1";
$stat = $db->query($sql)->fetchColumn();

if($stat > 0)
{ 


 echo '';	
}else{
//////////////////////////////============================	
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.stopforumspam.com/api?ip='.$i_ip);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$pattern = '/<appears>yes<\/appears>/';
if (preg_match($pattern, $response)) {
/* IP is listed, so we inform the user, than exit. */
echo 'Spammer detected '.$i_ip.' ';
usleep($sleep_rcon*4);
rcon('say ^7'.$chistx.' ^3Proxy\VPN Blacklisted IP adress ^1Detected! by ^6[^1RCM^3bot^6]', ''); 
usleep($sleep_rcon);
 rcon('clientkick '. $i_id, '');
AddToLog("[".$datetime."] STOP SPAM FORUM KICK: (" . $i_ip . ") (" . $i_name . ")");	
++$x_stop_lp;}
curl_close($ch);
//////////////////////////////============================	
}
}



//$db = NULL;
  
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }





///////////////////////////////////////////////////==========================================	
/*
function spamzzz($string) {
$string = str_replace("attacks:", "", $string);
$string = str_replace("<br", "", $string);
$string = str_replace("reports:", "", $string);
$string = str_replace("0", "", $string);
$string = str_replace(">", "", $string);
$string = str_replace("/", "", $string);
$string = str_replace(" ", "", $string);
return $string . "";
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://api.blocklist.de/api.php?ip='.$i_ip.'&start=1');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

$respvvv = spamzzz($response);
echo '--------'.$respvvv;
if (is_numeric($respvvv)) {

echo 'Spammer detected-2 '.$i_ip.' '; 
usleep($sleep_rcon);
rcon('clientkick '. $i_id, '');
AddToLog("[".$datetime."] STOP SPAM FORUM KICK-2: (" . $i_ip . ") (" . $i_name . ")");	
}
curl_close($ch);
*/
///////////////////////////////////////////////////==========================================

$x_admin = 0;
} 




}


} 
?>
 
