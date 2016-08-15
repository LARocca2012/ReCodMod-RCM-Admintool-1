<?php

if ($x_stop_lp == 0) {
/////SUPPORT ONLY WITH PB OR COD4X LIBRARY CLIENT!
if (strpos($msgr, $ixz.'getss ') !== false)
    { 

 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);

  $mmm = trim($x_nickx);
  $nnn = trim($x_namex);
	
 if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = (strpos($mmm, $nnn) !== false); 
else
 $jjj = ((trim($i_id) == trim($idnum)) || (strpos($mmm, $nnn) !== false));
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

    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
   foreach($result as $row)
    { 	
   $adm_ip  = $row['s_adm'];
    $a_grph  = $row['s_group'];	
	
  $adm_ip = trim($adm_ip);
  $i_ipn = trim($newip2);
  
//////////////////GROUPS  
  if(($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)
  || (array_search(strtolower($i_ip), $adminIP, true) !== false)
  ||($adm_ip == $i_ipn) && ($a_grph == 0) 
  || ($adm_ip == $i_ipn) && ($a_grph == 111)
  || ($adm_ip == $i_ipn) && ($a_grph == 555)
  || ($adm_ip == $i_ipn) && ($a_grph == 1)
  || ($adm_ip == $i_ipn) && ($a_grph == 2)
  || ($adm_ip == $i_ipn) && ($a_grph == 3)
  || ($adm_ip == $i_ipn) && ($a_grph == 4)
  || ($adm_ip == $i_ipn) && ($a_grph == 5)
  || ($adm_ip == $i_ipn) && ($a_grph == 6)
  || ($adm_ip == $i_ipn) && ($a_grph == 7)
  || ($adm_ip == $i_ipn) && ($a_grph == 8) )
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
 list($cmv, $numm) = explode(' ', $msgr); 	
rcon('getss '. $numm .'', '');
usleep($sleep_rcon);
rcon('tell '. $newid .' ^6[^1RCM^3bot^6] ^7Screenshot was sent to server!', '');
	++$x_number;	
	AddToLogInfo("[".$datetime."] screenshot: (" . $x_nickx . ") (" . $msgr . ")"); 

++$x_stop_lp;
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
                    					
	}}
	
else if ((strpos($msgr, $ixz.'getss') !== false) || (strpos($msgr, $getsssc) !== false))
    { 
if ($x_stop_lp != 1){
 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);

  $mmm = trim($x_nickx);
  $nnn = trim($x_namex);
	
 if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = (strpos($mmm, $nnn) !== false); 
else
 $jjj = ((trim($i_id) == trim($idnum)) || (strpos($mmm, $nnn) !== false));
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

    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
   foreach($result as $row)
    { 	
   $adm_ip  = $row['s_adm'];
    $a_grph  = $row['s_group'];	
	
  $adm_ip = trim($adm_ip);
  $i_ipn = trim($newip2);
  
//////////////////GROUPS  
  if(($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)|| ($adm_ip == $i_ipn) && ($a_grph == 0) 
  || ($adm_ip == $i_ipn) && ($a_grph == 111)
  || ($adm_ip == $i_ipn) && ($a_grph == 555)
  || ($adm_ip == $i_ipn) && ($a_grph == 1)
  || ($adm_ip == $i_ipn) && ($a_grph == 2)
  )
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
 
 
 if ($game_patch == 'cod4'){
usleep($sleep_rcon*2);	
rcon('getss all', '');	
 }
 else{
	 usleep($sleep_rcon);		 	
 require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<$player_cnt; $i++)
	{	
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 

usleep($sleep_rcon*3);	
rcon('getss '. $i_id .'', '');
	}	 
	 
 }
AddToLogInfo("[".$datetime."] screenshot all: (" . $x_nickx . ") (" . $msgr . ")"); 	
usleep($sleep_rcon);
rcon('tell '. $newid .' ^6[^1RCM^3bot^6] ^7Players Screenshots was sent to server!', '');	
	
	
++$x_number;	
++$x_stop_lp;
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
                    					
	}}}}	
?>

