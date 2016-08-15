<?php
////$r_ch = trim($chistx);
//$vipt = (array_search($chistx, $r_adm, true) !== false);
////////////////////////////////////////////////////////////////////NEW DOWN AT THE LIST   
// list($nickr, $msgr) = explode(' % ', $parselinetxt);  
$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	
	
	
	
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
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);     

if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ipo) && (($a_grp == 0) || ($a_grp == 111))|| (array_search(strtolower($i_ip), $adminIP, true) !== false)); 
else
 $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ip == $i_ipo) && ($kski[1] == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111)));
    if($jjj)
	      { 		  
 for ($i=0; $i<1; $i++) 
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
usleep($sleep_rcon);
    rcon('say ^6 ^3Admin reloaded map ', '');
	sleep(1);
rcon('map_restart');
++$x_number;	
++$x_return;  
  } 
    } 
      }  
	  
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {

	
}	  
?>
 
