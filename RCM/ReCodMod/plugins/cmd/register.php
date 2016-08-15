<?php
if (strpos($msgr, $ixz.'register') !== false)
    { 	

  if ($x_stop_lp == 0 ) {
$i_namex = afdasfawf($i_name);	
   	 
 $na1 = trim($i_namex);
 $na2 = trim($nickr);

  if(empty($foridnum))
		  $foridnum = $i_id;

	  
if ($game_patch != 'cod1_1.1') {

ECHO '-'.$idnum;
ECHO '-'.$i_id;
ECHO '-'.$guidn;



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
    	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);

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
rcon('say ^6 ^3Crangulations ^7'.$chistx.' ^3you in ^1GUID ADMIN ^3group, ^3thanks for registering!', '');	
				
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
	  
	  
	  
	  
	 if(($na1 == $na2) || ((trim($foridnum) == trim($idnum)) && (trim($foridnum) == trim($i_id))))
	     {
	
try
  {
  	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);

   $sql =  "SELECT * FROM `x_db_admins` WHERE s_adm='$i_ip' limit 1";
 		
    $statt = $db->query($sql)->fetchColumn();

                    if ($statt > 0) {  
usleep($sleep_rcon*2);
rcon('tell '.$i_id.' ^6 ^3You already registered in RCM system!', '');
++$x_stop_lp;	
}else{
usleep($sleep_rcon*2);
rcon('say ^6 ^3Crangulations ^7'.$chistx.' ^3you in ^2Member group, ^3thanks for registering!', '');	
				
	$date = date('Y.m.d H.i.s');					
if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '3', 'no')") > 0) {
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



if (strpos($msgr, $ixz.'logout') !== false)
    { 	
  if ($x_stop_lp == 0 ) {
$i_namex = afdasfawf($i_name);	
$na1 = trim($i_namex);
 $na2 = trim($nickr);

  if(empty($foridnum))
		  $foridnum = $i_id;

	 if(($na1 == $na2) || ((trim($foridnum) == trim($idnum)) && (trim($foridnum) == trim($i_id))))
	     {
usleep($sleep_rcon*2);	
try
  {
  	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
   $db->exec("DELETE FROM x_db_admins WHERE s_adm='$i_ip'");
  
if ($game_patch == 'cod1_1.1')
rcon('say ^6 ^3Crangulations ^7'.$chistx.' ^3you in ^2Player group, ^3thanks for quit!', '');
else
rcon('tell '.$i_id.' ^6 ^3Crangulations ^7'.$chistx.' ^3you in ^2Player group, ^3thanks for quit!', '');				

					
$sql = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }		
	
}	
 
}
}	

?>
 


