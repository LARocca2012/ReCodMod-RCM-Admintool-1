<?php
if (strpos($msgr,''.$ixz.'status') !== false)
    { 	
  
 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);

   $mmm = substr(trim($x_nickx), 0, 5);
    $nnn = substr(trim($x_namex), 0, 5);
 
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = (strpos($nnn, $mmm) !== false); 
else
 $jjj = ((trim($i_id) == trim($idnum)) || (strpos($mmm, $nnn) !== false));
    if($jjj){      
	      	
try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
 		
    foreach($result as $row)
    {	
 	
$statuszl  = $row['s_group'];	}
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1";
 $stat = $db->query($sql)->fetchColumn();
if(!$stat)
{  
$statuszl = '^9Player';
}
else if ($statuszl == 0){$statuszl = '^1Admin';}
else if ($statuszl == 1){$statuszl = '^7Clan member';}
else if ($statuszl == 111){$statuszl = '^1Developer';}
else if ($statuszl == 2){$statuszl = '^3VIP';}
else if ($statuszl == 555){$statuszl = '^2Moderator';}
else if ($statuszl == 3){$statuszl = '^2Registered';}
else if ($statuszl == 4){$statuszl = '^4PRO';}
else if ($statuszl == 5){$statuszl = '^5Special guest';}

$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }		
	
////////////////////////////////////////////////////////////////////////////////////////////////////
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk);
	
if(!empty($chistx)){
if (!preg_match("/^bot\d+$/",  $chistx, $tmp2n))
{
	usleep($sleep_rcon);	
  ++$x_loops;++$x_loopsv;
	  usleep($sleep_rcon);
      rcon('say ^6  "^7Status: ^7'.$chistx.' - '.$statuszl.'"', '');
	++$x_stop_lp; 
	AddToLogInfo("[".$datetime."] GEO: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");    	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);

}}
	}	
}
	      	
?>
