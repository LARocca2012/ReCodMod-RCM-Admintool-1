<?php	
if (strpos($msgr, $ixz.'map ') !== false){
 
////////////////////////////////////Change map
list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
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
   
 $adm_ipv = trim($adm_ip);
 $i_ipo = trim($i_ip);
 $kskig = trim($kski[1]);
 $nickr = trim($nickr);  

if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kskig) !== false) && ($adm_ipv == $i_ipo) && (($a_grp == 0) || ($a_grp == 111))|| (array_search(strtolower($i_ip), $adminIP, true) !== false)); 
else
 $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ipv == $i_ipo) && ($kskig == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111)));
    if($jjj)
	      { 
	  ++$knownplayr;
usleep($sleep_rcon);		  
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !kick 5 ( 5 = id)
 for ($i=0; $i<1; $i++) 
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 

	
 list($x_cmd, $x_mapname) = explode(' ', $msgr);   // !map carentan 
$i_namex = aaxa($i_name);	


$x_mpt = mpt($x_mapname);

if ($x_mpt == 'wawa_3dAim')
{
usleep($sleep_rcon);
rcon('set g_gametype '.$mapfix.'', '');
}


if($x_mpt == 'mp_harbor' 
|| $x_mpt == 'mp_carentan' 
|| $x_mpt == 'mp_logging_mill'
|| $x_mpt == '^5abbey'
|| $x_mpt == 'mp_pavlov'
|| $x_mpt == 'mp_hurtgen'
|| $x_mpt == 'mp_railyard'
|| $x_mpt == 'mp_eisberg'|| $x_mpt == 'xp_standoff'
|| $x_mpt == 'mp_rocket'|| $x_mpt == 'mp_brecourt'|| $x_mpt == 'mp_chateau'
|| $x_mpt == 'mp_ship' || $x_mpt == 'mp_depot'|| $x_mpt == 'mp_powcamp'
|| $x_mpt == 'wawa_3dAim' || $x_mpt == 'mp_westwall'
|| $x_mpt == 'mp_dawnville' || $x_mpt == 'x_valley' || $x_mpt == 'mp_burgundy'){

if ($x_number == 0){
    usleep($sleep_rcon);
    rcon('say ^6 ^3Admin changed map to '.$x_mapname, '');
	
if ($x_mpt == 'wawa_3dAim')
{
usleep($sleep_rcon);
rcon('set g_gametype '.$mapfix.'', '');
}	
	sleep(1);
  rcon('map  '.$x_mpt.'', '');	
  
AddToLog("[".$datetime."] MAP CHANGE: (" . $i_ipo . ")  (" . $i_id . ") BY: (" . $x_nickx . ") ");    
AddToLog1("[".$datetime."]<font color='green'> Server :</font> Admin changed map to ".$x_mapname. " ");
++$x_number;
++$x_return;
if(!empty($db))
$db = NULL;
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
	}else{
++$x_number;
++$x_return;
if(!empty($db))
$db = NULL;
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
		
	///////++$x_number;	
		
}else{
echo "  False map";
 
usleep($sleep_rcon);
rcon('say ^1False Map! ^2Only: ^7'.$maps.'', '');
++$x_number;	
++$x_return;
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
	 
	 
 	 

//}   
  } 
    } 
      }
	  
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
echo 'Unknown map plugin error!';
  }	  

}
 ////////////////////////////////////Change map
 
 
 
else if (strpos($msgr, $ixz.'map') !== false){
 
////////////////////////////////////Change list

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
   
 $adm_ipv = trim($adm_ip);
 $i_ipo = trim($i_ip);
 $kskig = trim($kski[1]);
 $nickr = trim($nickr);  

if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kskig) !== false) && ($adm_ipv == $i_ipo) && (($a_grp == 0) || ($a_grp == 111))|| (array_search(strtolower($i_ip), $adminIP, true) !== false)); 
else
 $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ipv == $i_ipo) && ($kskig == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111)));
    if($jjj)
	      { 
	  ++$knownplayr;
usleep($sleep_rcon);		  

 for ($i=0; $i<1; $i++) 
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 

	

usleep($sleep_rcon);
require $cpath.'ReCodMod/functions/getinfo/sv_mapRotation.php';
fclose($connx);	
		

echo "  mp list";
 
usleep($sleep_rcon);
rcon('say ^1Maplist: ^7'.$maps.'', '');
++$x_number;	
++$x_return;
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
 

//}   
  } 
    } 
      }
	  
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
echo 'Unknown map plugin error!';
  }	  
   
 ////////////////////////////////////Change list
}








if (strpos($msgr, $ixz.'nextmap') !== false){
 
////////////////////////////////////Change list

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
   
 $adm_ipv = trim($adm_ip);
 $i_ipo = trim($i_ip);
 $kskig = trim($kski[1]);
 $nickr = trim($nickr);  

if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kskig) !== false) && ($adm_ipv == $i_ipo) && (($a_grp == 0) 
      || ($a_grp == 111)) || (array_search(strtolower($i_ip), $adminIP, true) !== false)); 
else
 $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)
	  || (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ipv == $i_ipo) && ($kskig == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111)) 
      );
    if($jjj)
	      { 
	  ++$knownplayr;
usleep($sleep_rcon);		  

 for ($i=0; $i<1; $i++) 
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 

	

usleep($sleep_rcon);
require $cpath.'ReCodMod/functions/getinfo/sv_mapRotation.php';
fclose($connx);	
		

echo "  next map";
 
usleep($sleep_rcon);
rcon('say ^1Nextmap: ^7'.$mapsxc.'', '');
++$x_number;	
++$x_return;
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
 

//}   
  } 
    } 
      }
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
  }
  catch(PDOException $e)
  {
echo 'Unknown map plugin error!';
  }	  
   
 ////////////////////////////////////Change list
}

	?>
 
