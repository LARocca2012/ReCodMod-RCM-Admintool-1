<?php
if ($x_stop_lp == 0 ) {
 
   if (strpos($msgr, $ixz.'list') !== false)
    { 	
 //$knownplayr = 0;
 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
 echo  $mmm = substr(trim($x_nickx), 0, 2);
 echo  $nnn = substr(trim($x_namex), 0, 2);
 
 $isrtsdt = afdasfawf($i_name);
 if(strpos(chatrr($nickr), $isrtsdt) !== false)
  $unkwnplyersx = $i_id; 
 
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = (strpos($mmm, $nnn) !== false); 
else if ($adminguidctl == 1)
$jjj = ((array_search($guidn, $adminguids, true) !== false) && ($idnum == $i_id));
else
$jjj = ((array_search(strtolower($i_ip), $adminIP, true) !== false) || (trim($i_id) == trim($idnum)) || (strpos($mmm, $nnn) !== false));
    if($jjj){
 ++$knownplayr;
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk);
			  $newid = $i_id;
			  $newip2 = $i_ip;
try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$newip2' ");
 		
    foreach($result as $row)
    { 	
	
 echo ' '.  $adm_ip  = $row['s_adm'];
 echo ' '.  $a_grph  = $row['s_group'];
 
  $adm_ip = trim($adm_ip);
  $i_ipn = trim($newip2);   
  if((($adminguidctl == 1) && (array_search($guidn, $adminguids, true) !== false) && ($idnum == $i_id))|| (array_search(strtolower($i_ip), $adminIP, true) !== false) || ($adm_ip == $i_ipn) && (($a_grph == 0) || ($a_grph == 111) || ($a_grph == 555)))
	      { 	
		  
		echo '---'.$i_namex.'---';
		
++$x_number;		
		 }
	}
	
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	
	
	
	
}
	
if ($x_number > 0){
usleep($sleep_rcon);		 	
require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<$player_cnt; $i++)
	{	
$colorb=$i%2>0? '^6':'^3';
$colora=$i%2>0? '^7':'^7';
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
/////////////////////////////////////////////////
/////////////////////////////////////////////////
/////////////////////////////////////////////////
//include("geoip_bases/MaxMD/geoipcity.inc");       
//include("geoip_bases/MaxMD/geoipregionvars.php");
if((empty($i_ip)) 
	|| (strpos($i_ip, '192.168') !== false)
    || (strpos($i_ip, '255.255') !== false)
	|| (strpos($i_ip, 'localhost') !== false)
	|| (strpos($i_ip, '127.0.0.1') !== false)
	)
$i_ip = '37.120.56.200';
	
$gi = geoip_open($cpath."ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi,$i_ip);
$xxxnw = ($record->country_name . ", ".$record->city."");
try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
 
    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
 		
    foreach($result as $row)
    {	
 		
$statuszl  = $row['s_group'];
}
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1";
 $stat = $db->query($sql)->fetchColumn();
if(empty($statuszl))
$statuszl = '^9Player';
if(!$stat)
{
	$statuszl = '^2Player';}
else if ($statuszl == 0){$statuszl = '^1Admin';}
else if ($statuszl == 111){$statuszl = '^1Developer';}
else if ($statuszl == 555){$statuszl = '^6Moderator';}
else if ($statuszl == 1){$statuszl = '^7Clan member';}
else if ($statuszl == 2){$statuszl = '^3VIP';}
else if ($statuszl == 3){$statuszl = '^2Registered';}
else if ($statuszl == 4){$statuszl = '^4PRO';}
else if ($statuszl == 5){$statuszl = '^5Special guest';}
//else if(($adminguidctl == 1) && (array_search(strtolower(trim($guidn)), trim($adminguids), true) !== false)){$statuszl = '^8Admin';}
/*   Groups 
Admins - 0
Clan members - 1
Vip - 2
Members - 3 (Gamers on website)
Pro player - 4
Special guests - 5
Top player - 6
Noob - 7
Worst - 8
*/
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk);

if(($adminguidctl == 1) && (array_search($guidn, $adminguids, true) !== false) && ($idnum == $i_id))  {$statuszl = '^1GUID^8Admin';}
	
if(!empty($chistx)){
if (!preg_match("/^bot\d+$/",  $chistx, $tmp2n))
{	
	usleep($sleep_rcon);	
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam')){	
rcon('say ^6 '.$colorb.'#Id:'.$colorb.'  '.$colora.$i_id.' '.$colorb.' Nick: '.$colorb. $colora .$i_namex.' '.$colorb.'Status: ^4('.$statuszl.'^4) '.$colorb.' Ip: '. $colora .substr($i_ip, 0, 7).'** "'.$colorb.' From: ^4(^2'.$xxxnw.'^4)"', '');	
   //echo $i_namex. ' "^2from:^3 '.ciity($country_name['country']['iso']." , ".$country_name['city']['name_en']);	
}	

else if ($adminguidctl == 1){
rcon('tell '. $idnum .' ^6 '.$colorb.'#Id:'.$colorb.'  '.$colora.$i_id.' '.$colorb.' Nick: '.$colorb. $colora .$i_namex.' '.$colorb.'Status: ^9('.$statuszl.'^9) '.$colorb.' Ip: '. $colora .$i_ip.' "'.$colorb.' From: ^9(^2'.$xxxnw.'^9)"', '');	
	
	}else{
		
		
rcon('tell '. $newid .' ^6 '.$colorb.'#Id:'.$colorb.'  '.$colora.$i_id.' '.$colorb.' Nick: '.$colorb. $colora .$i_namex.' '.$colorb.'Status: ^9('.$statuszl.'^9) '.$colorb.' Ip: '. $colora .$i_ip.' "'.$colorb.' From: ^9(^2'.$xxxnw.'^9)"', '');	
   //echo $i_namex. ' "^2from:^3 '.ciity($country_name['country']['iso']." , ".$country_name['city']['name_en']);		
}	
}
}
	
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	
	
	
	}
	AddToLogInfo("[".$datetime."] GEO: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");    	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;	
}

/*
//$vipt = (array_search($chistx, $r_adm, true) !== false);
if($knownplayr == 0){	
usleep($sleep_rcon);
rcon('say ^6[^1RCM^3bot^6] ^1WARNING YOU! ^7' . $nickr . '  ^3its not your group commands!', '');
if ($kicknotingrp == 1){
usleep($sleep_rcon*5);
if ($game_patch == 'cod1_1.1')
rcon('clientkick '. $unkwnplyersx, '');
else
rcon('clientkick '. $idnum, '');
AddToLog("[".$datetime."] SELF KICK: (" . $nickr . ") (" . $idnum . ") "); 
++$x_number;
++$x_return;
++$x_stop_lp;
}}
*/

} 
	

 if (strpos($msgr, $ixz.'reload') !== false){ 
 //$knownplayr = 0;
echo "\n[ADB] : [",$datetime, "] : ".$nickr." : ".$msgr;
$r_ch = trim($chistx);
 
try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////
    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
 	 
$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	
if(strpos(chatrr($nickr), $kski[1]) !== false)
  $unkwnplyersx = $i_id;	
    foreach($result as $row)
    {		
   $adm_ip  = $row['s_adm'];
   $a_grp  = $row['s_group'];
   
  $adm_ip = trim($adm_ip);
  $i_ip = trim($i_ip);
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);   
  

   
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ip) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555)) || (array_search(strtolower($i_ip), $adminIP, true) !== false)); 
else
 $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false) || (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ip == $i_ip) && ($kski[0] == $idnum) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555))  );
    if($jjj)
	      { 
		 ++$knownplayr;
         //++$x_stop_lp;
		 $x_stop_lp = 100;
		 if(!empty($db))
$db = NULL;
if(!empty($db1))
$db1 = NULL;
if(!empty($db2))
$db2 = null;
if(!empty($db3))
$db3 = NULL;
if(!empty($db4))
$db4 = NULL;
if(!empty($db5))
$db5 = NULL;
if(!empty($connect))
fclose($connect);
		 exit;
}
}



$result = null;
$db = NULL;
$db2 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }

	
}

	
	
if (strpos($msgr, $ixz.'lastban') !== false)
    { 

 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);

  $mmm = trim($x_nickx);
  $nnn = trim($x_namex);
	
 if(strpos($mmm, $nnn) !== false)
	     {
$gi     = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);			 
			 ++$x_number;
			 
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk);
			  $newid = $i_id;
			  $newip2 = $i_ip;	
			  

	if(strpos(chatrr($nickr), $kski[1]) !== false)
  $unkwnplyersx = $i_id;
		  
	
	
}
	
if ($x_number > 0){
usleep($sleep_rcon);		 	
require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<$player_cnt; $i++)
	{	
$colorb=$i%2>0? '^6':'^3';
$colora=$i%2>0? '^7':'^7';

require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 

////////////////////////////////////////////////////////////////////////////////////////////////////


try
  {
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////
    $result = $db2->query("SELECT * FROM bans WHERE id>=1 and patch = '$game_patch' ORDER BY (id+0) DESC LIMIT 1");

	$number = 0;	
   foreach($result as $row)
    { 
	    $playername = 	$row['playername'];
		$ipm = 			$row['id'];
             $ipadrr = 			$row['ip'];
		$rshs = 		$row['reason'];
	    $timfk =         $row['time'];
		$ywhoo =        $row['whooo'];
		
		$record = geoip_record_by_addr($gi, $ipadrr);
		
	usleep($sleep_rcon);
                                            
                                    

                                if ($geox == 1)
                                                $xxcity = ($record->country_name . ", " . $record->city . "");
                                            else
                                                $xxcity = ($record->country_name);

   rcon('say ^6 '.$colorb.'#Id:'.$colorb.' '.$colora.$ipm.' '.$colorb.' Nick: '.$colorb. $colora .substr($playername, 0, 16).' '.$colorb.'City: '.$colorb. $colora .$xxcity.' ^3Reason: '.$colorb. $colora .$rshs. ' ^3Time: '.$colorb. $colora .substr($timfk, 0, 22). ' ^3By: '.$colorb. $colora .$ywhoo. '"', '');	

}	
	++$x_number;	
	AddToLogInfo("[".$datetime."] BANLIST-10: (" . $x_nickx . ") (" . $msgr . ") reason: LIST"); 

++$x_stop_lp;
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
 
 $result = null;
$db2 = NULL;  
  return;	
   
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	  
   
   

                    					
	}}

	
	}	
	
	
	}		 
?>
 