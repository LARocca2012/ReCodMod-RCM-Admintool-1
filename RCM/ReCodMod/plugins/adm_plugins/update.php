<?php
if ($x_stop_lp == 0 ) {

 if (strpos($msgr, $ixz.'update') !== false){ 
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
	  
	  
file_put_contents($cpath."ReCodMod/x_update/unarchive_replace".$date.".zip", fopen("http://recod.ru/update.zip", 'r'));


		 ++$knownplayr;
         ++$x_stop_lp;
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


}
?>