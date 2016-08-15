<?php
if ($stop_lp == 0 ) {

$x_admin1 = 0;




try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1";

  $stat = $db->query($sql)->fetchColumn();
if($stat > 0)
{
	
//$vipt = (array_search($chistx, $r_adm, true) !== false);

$result = $db->query($sql);
    foreach($result as $row)
    {	
   $adm_ip  = $row['s_adm'];
   $a_grpp  = $row['s_group'];
   
  $adm_ip = trim($adm_ip);
  $i_ipo = trim($i_ip);  
 
     if(($adm_ip == $i_ipo) && (($a_grp == 0) || ($a_grp == 111)) || ($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false))
   {
    $x_admin1 = 1;
   } 
else if(($adm_ip == $i_ipo) && ($a_grp == 1))
   {
    $x_admin1 = 1;
   }
else if(($adm_ip == $i_ipo) && ($a_grp == 2))
   {
    $x_admin1 = 1;
   } 
else if(($adm_ip == $i_ipo) && ($a_grp == 5))
   {
    $x_admin1 = 1;
   }
else if(($adm_ip == $i_ipo) && ($a_grp == 555))
   {
    $x_admin1 = 1;
   }    
else 
   {
   //
   $x_admin1 = 2;
   echo ' ./ ';   
   }  
}

 
}else{

$x_admin1 = 2;


}


$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }


  
  
  
  
  
  
  
  
  


		  

  if($x_admin1 == 2)
	      {	
		  

//****************************************************************************************************************
//****************************************************************************************************************
//****************************************************************************************************************
try
  {
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////
$db4 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db4.sqlite');

$x_n3 = trim(clearnamex($i_name));
$x_n4 = trim(clearnamex($nivv));


  if(($x_n4 == $x_n3) && !$x_mat) 
	     {					 
if ($game_ac == '0'){ 
  usleep($sleep_rcon);
  rcon('say  ^6  '. $chistx . ' "^6[^7Censored!^6] ^1RCM '.$z_ver.' Autokicker"', '');
usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' ^6[^7Censored!^6]^7', '');
else
        rcon('clientkick '. $i_id, '');
 
$db4->exec("UPDATE x_db_players SET x_db_warn=x_db_warn +1 WHERE x_db_ip='{$i_ip}'");
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED CENSOR	

  $result = $db4->query("SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 1");
    foreach($result as $row)
    {
		//$pl1 = $row['x_db_name'];
		$ip1 = $row['x_db_ip'];	
		$wrn = $row['x_db_warn'];	
     if (($ip1 == $i_ip) && ($wrn > $wswear))
		{	
if ($game_ac == '0'){
usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' ^6[^7Censored!^6]^7', '');
else
        rcon('clientkick '. $i_id, '');
}
else { usleep($sleep_rcon); rcon('akick '. $i_id.' " ^6[^7BAN - CENSORED!^6]"', ''); }
$i_namex = aaxa($i_name);
$x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
$x_reason = 'Swearing';

  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk);	 
$db2->exec("INSERT INTO bans (playername,ip,guid,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','','$x_reason','$datetime','$x_nickx','$game_patch')");
AddToLog("[".$datetime."] BAN WARN: (" . $i_ip . ") (" . $i_name . ")");			
++$stop_lp; 	    } 
    }		
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED CENSOR	
}
else {  
    usleep($sleep_rcon);
  rcon('say  ^6  '. $chistx . ' "^6[^7Censored!^6] ^1RCM '.$z_ver.' Autokicker"', '');
rcon('akick '. $i_id.' " ^6[^7Kicked by RCM '.$z_ver.' Autokicker = Use of bad words^6]"', '');
 
$db4->exec("UPDATE x_db_players SET x_db_warn=x_db_warn +1 WHERE x_db_ip='{$i_ip}'");
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED CENSOR	

  $result = $db4->query("SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 1");
    foreach($result as $row)
    {
		//$pl1 = $row['x_db_name'];
		$ip1 = $row['x_db_ip'];	
		$wrn = $row['x_db_warn'];	
     if (($ip1 == $i_ip) && ($wrn > $wswear))
		{	
if ($game_ac == '0'){usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' ^6[^7Censored!^6]^7', '');
else
        rcon('clientkick '. $i_id, '');}
else { usleep($sleep_rcon); rcon('akick '. $i_id.' " ^6[^7BAN - CENSORED!^6]"', ''); }
$i_namex = aaxa($i_name);
$x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
$x_reason = 'Swearing';

  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk);	
$db2->exec("INSERT INTO bans (playername,ip,guid,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','','$x_reason','$datetime','$x_nickx','$game_patch')");
AddToLog("[".$datetime."] BAN WARN: (" . $i_ip . ") (" . $i_name . ")");			
++$stop_lp; 	    } 
    }		
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED CENSOR
}

AddToLog("[".$datetime."] CHAT BAD WORDS KICKER: " . $i_ip . " (" . $i_name . ")  r: CHAT");	 
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> " . $x_n3 . " <font color='fuchsia'>[^7Kicked by RCM '.$z_ver.' = Censored]</font> ");		
++$stop_lp; 
 
}	















		 
//****************************************************************************************************************
//****************************************************************************************************************
//****************************************************************************************************************
 
  if(($x_n4 == $x_n3) && !$x_spam) 
   //if(($x_n4 == $x_n3) && !$x_mat && !$vipt)
	     {			
if ($game_ac == '0'){ 
  usleep($sleep_rcon);
  rcon('say  ^6  '. $chistx . ' "^6[^7 NO Spam!^6] ^1RCM '.$z_ver.'"', '');
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED SPAM			
 
$db4->exec("UPDATE x_db_players SET x_db_warn=x_db_warn +1 WHERE x_db_ip='{$i_ip}'");
	 
  $result = $db4->query("SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 1");
    foreach($result as $row)
    {
		//$pl1 = $row['x_db_name'];
		$ip1 = $row['x_db_ip'];	
		$wrn = $row['x_db_warn'];	
     if (($ip1 == $i_ip) && ($wrn > $wspams))
		{	
if ($game_ac == '0'){
usleep($sleep_rcon); 
usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' ^6[^7SPAM!^6]^7!', '');
else
        rcon('clientkick '. $i_id, '');}
else { 
usleep($sleep_rcon); 
rcon('akick '. $i_id.' " ^6[^7BANNED - NO SPAM!^6]"', ''); 
}
$i_namex = aaxa($i_name);
$x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
$x_reason = 'Spam';
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk);	
$db2->exec("INSERT INTO bans (playername,ip,guid,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','','$x_reason','$datetime','$x_nickx','$game_patch')");
AddToLog("[".$datetime."] BAN WARN: (" . $i_ip . ") (" . $i_name . ")");
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> " . $x_n3 . " <font color='fuchsia'>[^7Ban by RCM '.$z_ver.' = Spam</font>] ");			 
++$stop_lp;  } 
    }		
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED SPAM	
                    }
else {usleep($sleep_rcon);  
  rcon('say  ^6  '. $chistx . ' "^6[^7NO Spam!^6] ^1RCM '.$z_ver.'"', '');
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED SPAM			
 
$db4->exec("UPDATE x_db_players SET x_db_warn=x_db_warn +1 WHERE x_db_ip='{$i_ip}'"); 
	 
  $result = $db4->query("SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 1");
    foreach($result as $row)
    {
		//$pl1 = $row['x_db_name'];
		$ip1 = $row['x_db_ip'];	
		$wrn = $row['x_db_warn'];	
     if (($ip1 == $i_ip) && ($wrn > $wspams))
		{	
if ($game_ac == '0'){
usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' ^6[^7SPAM!^6]', '');
else
        rcon('clientkick '. $i_id, '');}
else { 
usleep($sleep_rcon); 
rcon('akick '. $i_id.' " ^6[^7BANNED - NO SPAM!^6]"', ''); 
}
$i_namex = aaxa($i_name);
$x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
$x_reason = 'Spam';
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk);	
$db2->exec("INSERT INTO bans (playername,ip,guid,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','','$x_reason','$datetime','$x_nickx','$game_patch')");
AddToLog("[".$datetime."] BAN WARN: (" . $i_ip . ") (" . $i_name . ")");
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> " . $x_n3 . " <font color='fuchsia'>[^7Ban by RCM '.$z_ver.' = Spam</font>] ");			 
 ++$stop_lp; } 
    }		
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED SPAM	
     }

 }	
	




















	
//****************************************************************************************************************
//****************************************************************************************************************
//****************************************************************************************************************

if(($x_n4 == $x_n3) && !$x_cry) 
	     {			
if ($game_ac == '0'){ 
  usleep($sleep_rcon);
  rcon('say  ^6  '. $chistx . ' "^6[^7You are no one holds here!^6] ^1RCM '.$z_ver.' Autokicker "', '');
 AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> " . $x_n3 . " <font color='fuchsia'>[^7Kicked by RCM '.$z_ver.' = Cry]</font> "); 
usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' ^6[^7CRYING!^6]', '');
else
        rcon('clientkick '. $i_id, '');
++$stop_lp;
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED CRY			
 
$db4->exec("UPDATE x_db_players SET x_db_warn=x_db_warn +1 WHERE x_db_ip='{$i_ip}'"); 
	 
  $result = $db4->query("SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 1");
    foreach($result as $row)
    {
		//$pl1 = $row['x_db_name'];
		$ip1 = $row['x_db_ip'];	
		$wrn = $row['x_db_warn'];	
     if (($ip1 == $i_ip) && ($wrn > $wdislk))
		{	
if ($game_ac == '0'){usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' ^6[^7CRYING!^6]', '');
else
        rcon('clientkick '. $i_id, '');}
else { usleep($sleep_rcon); rcon('akick '. $i_id.' " ^6[^7BANNED - DONT CRY!^6]"', ''); }
$i_namex = aaxa($i_name);
$x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
$x_reason = 'Disliker';
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk);	
$db2->exec("INSERT INTO bans (playername,ip,guid,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','','$x_reason','$datetime','$x_nickx','$game_patch')");
AddToLog("[".$datetime."] BAN WARN: (" . $i_ip . ") (" . $i_name . ")");			
++$stop_lp;	    } 
    }		
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED CRY

}
else {usleep($sleep_rcon);  
  rcon('say  ^6  '. $chistx . ' "^6[^7You are no one holds here!^6] ^1RCM '.$z_ver.' Autokicker"', '');
  usleep($sleep_rcon);
rcon('akick '. $i_id.' " ^6[^7Kicked by RCM '.$z_ver.' Autokicker = Dont Cry!^6]"', '');
    

/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED CRY			
 
$db4->exec("UPDATE x_db_players SET x_db_warn=x_db_warn +1 WHERE x_db_ip='{$i_ip}'"); 
	 
  $result = $db4->query("SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 1");
    foreach($result as $row)
    {
		//$pl1 = $row['x_db_name'];
		$ip1 = $row['x_db_ip'];	
		$wrn = $row['x_db_warn'];	
     if (($ip1 == $i_ip) && ($wrn > $wdislk))
		{	
if ($game_ac == '0'){usleep($sleep_rcon);
if ($game_patch == 'cod4')
	rcon('clientkick '. $i_id.' ^6[^7CRYING!^6]', '');
else
        rcon('clientkick '. $i_id, '');}
else { usleep($sleep_rcon); rcon('akick '. $i_id.' " ^6[^7BANNED - DONT CRY!^6]"', ''); }
$i_namex = aaxa($i_name);
$x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
$x_reason = 'Disliker';
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk);	
$db2->exec("INSERT INTO bans (playername,ip,guid,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','','$x_reason','$datetime','$x_nickx','$game_patch')");
AddToLog("[".$datetime."] BAN WARN: (" . $i_ip . ") (" . $i_name . ")");			
++$stop_lp;	    } 
    }		
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED CRY


	}
	AddToLog("[".$datetime."] CHAT Cry KICKER: " . $i_ip . " (" . $i_name . ")  r: CHAT");
	AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> " . $x_n3 . " <font color='fuchsia'>[^7Kicked by RCM '.$z_ver.' = Cry]</font> ");
	++$stop_lp;		 
 }
 


 
 
 
 
 
 
 
 
$result = null;
$db2 = NULL;
$db4 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
 
 
 
 $x_admin1 = 0;
}
}
?>
 
