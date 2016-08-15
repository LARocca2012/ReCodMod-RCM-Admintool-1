<?php
 ////////////////////////////////////////////////////////////////////NEW DOWN AT THE LIST   
 if ($x_number != 1){
 
 // list($nickr, $msgr) = explode(' % ', $parselinetxt);  
  $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
 echo  $mmm = substr(trim($x_nickx), 0, 2);
 echo  $nnn = substr(trim($x_namex), 0, 2);
  
  //$rest = substr("abcdef", 0, 4); // возвращает "abcd"
  
 if(strpos($nnn,$mmm) !== false){
 //if (preg_match("/$nnn/i", $mmm)) 
	   //  {
 list($x_cmd, $x_nickid) = explode(' ', $msgr); // !unban nick
 echo $x_cmd.'  '.$x_nickid;
$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	
	
	
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
 		
    foreach($result as $row)
    { 	
 echo ' '.  $adm_ip  = $row['s_adm'];
 echo ' '.  $a_grp  = $row['s_group'];
	
   $adm_ip = trim($adm_ip);
  $i_ipo = trim($i_ip);
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);   
   
   if(($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ip == $i_ip) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555))  )
	      { 
echo 'e';
if (is_numeric ($x_nickid))		  
$result = $db2->query("SELECT * FROM bans WHERE id = '$x_nickid' and patch = '$game_patch'");
else  
$result = $db2->query("SELECT * FROM bans WHERE playername='$x_nickid' and patch = '$game_patch'");
$stat = $result->fetchColumn();
    
  
	
	if ($stat == 0) {
usleep($sleep_rcon);
rcon('say  Only ^3Super Admin ^7can unban player from  another version!', '');
++$x_number;
++$x_return;
AddToLog1("[".$datetime."]<font color='green'> Server :</font> Only Super Admin can unban player from another version!");
echo ' unban   '.$tfinishh = (microtime(true) - $start);	
	}

	if ($stat > 0) {
		  
$result = $db2->query("SELECT * FROM bans WHERE id = '$x_nickid'");

foreach($result as $row)
    {
		$id = 	$row['id'];
		$playername = 	$row['playername'];
		$ip = 			$row['ip'];
		$reason  = 		$row['reason'];
		$time = 		$row['time'];
		$whooo = 		$row['whooo'];
		

if (is_numeric ($x_nickid))			
$db2->query("DELETE FROM bans WHERE id='$x_nickid' and patch = '$game_patch'");
else 
$db2->query("DELETE FROM bans WHERE playername='$x_nickid' and patch = '$game_patch'");
$db2->exec("INSERT INTO amnistia (playername1,ip1,guid1,reason1,time1,whooo1,patch1,whounban1) VALUES ('$playername','$ip','','$reason','$time','$whooo','$game_patch','$nickr')");
	 
		usleep($sleep_rcon);
		rcon('say  ^6 ^7' . $playername. ' '.$c_unban.'  " ^7Reason: ^1'.$reason.'"', '');
		AddToLog("[".$datetime."] UNBAN: " . $i_ip . " (" . $i_name . ")  reason: UnBan");	
AddToLog1("[".$datetime."]<font color='green'> Server :</font> ". $playername."  ".$c_unban."  Reason: ".$reason. " ");	
		++$x_number;
		echo ' unban   '.$tfinishh = (microtime(true) - $start);
	}



	
	}
	
	
	 ++$x_number;
++$x_return;	
  }	
}
$result = null;
$stat = null;
$db = NULL;
$db2 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	
	
}}
?>
