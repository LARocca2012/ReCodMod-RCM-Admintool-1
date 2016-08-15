<?php
if (strpos($msgr, $ixz.'kick ') !== false){  
echo "\n[ADK] : [",$datetime, "] : ".$nickr." : ".$msgr; 
//$knownplayr = 0;
////$r_ch = trim($chistx);
//$vipt = (array_search($chistx, $r_adm, true) !== false);
////////////////////////////////////////////////////////////////////NEW DOWN AT THE LIST   
// list($nickr, $msgr) = explode(' % ', $parselinetxt);  
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !kick 5 ( 5 = id)
$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	

if(strpos(chatrr($nickr), $kski[1]) !== false)
  $unkwnplyersx = $i_id; 

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
  $i_ipn = trim($i_ip);
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);   
  
 
  
if(($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ip == $i_ipn) && ($kski[1] == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555))
	 )
   {
	 ++$knownplayr;  
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !kick 5 ( 5 = id)
 for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
if ($x_number == 0){
usleep($sleep_rcon);
if ($game_ac == '0'){ rcon('clientkick '. $x_idn, '');}
else { rcon('akick '. $x_idn.' " ^6[^7Kicked by Admin^6]"', ''); }
	  AddToLog("[".$datetime."] KICKED: " . $i_ip . " (" . $i_namex . ") (" . $x_idn . ") BY: (" . $x_nickx . ") ");    
echo '  bb  '.substr($tfinishh = (microtime(true) - $start),0,7);
++$x_number;
++$x_return;
	}else{
++$x_number;
++$x_return;	
	}
   }
  } 
}


$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {

	
}	     
}
/////////////////////////////////////////////////////////
if (strpos($msgr, $ixz.'kickall') !== false){  
echo "\n[ADK] : [",$datetime, "] : ".$nickr." : ".$msgr; 

$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	

if(strpos(chatrr($nickr), $kski[1]) !== false)
  $unkwnplyersx = $i_id; 

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
  $i_ipn = trim($i_ip);
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);   
  
 
  
if(($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ip == $i_ipn) && ($kski[1] == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555))
	 )
   {
	 ++$knownplayr;  
 list($x_cmd, $i_id) = explode(' ', $msgr); // !kick 5 ( 5 = id)
 for ($i=0; $i<$player_cnt; $i++)
	{
		
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
if ($x_number == 0){
usleep($sleep_rcon);
if ($game_ac == '0'){ rcon('clientkick '. $i_id, '');}
else { rcon('akick '. $i_id.' " ^6[^7Kicked by Admin^6]"', ''); }
	  AddToLog("[".$datetime."] KICKED: " . $i_ip . " (" . $i_namex . ") (" . $i_id . ") BY: (" . $x_nickx . ") ");    
echo '  bb  '.substr($tfinishh = (microtime(true) - $start),0,7);

if($player_cnt == $i){
++$x_number;
++$x_return;}
	}else{
++$x_number;
++$x_return;	
	}
   }
  } 
}


$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {

	
}	     
}
	?>
 