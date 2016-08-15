<?php

 list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
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
   
 $adm_ipv = trim($adm_ip);
 $i_ipo = trim($i_ip);
 $kskig = trim($kski[1]);
 $nickr = trim($nickr);  

if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kskig) !== false) && ($adm_ipv == $i_ipo) && (($a_grp == 0) || ($a_grp == 111))|| (array_search(strtolower($i_ip), $adminIP, true) !== false)); 
else
 $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ipv == $i_ipo) && ($kskig == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111)) );
    if($jjj)
	      { 


   if ((strpos($c_1, $msgr) !== false) && ($x_number == 0))
    { 	
list($x_cmd, $x_b) = explode(' ', $msgr);  ////	  
	  usleep($sleep_rcon);
	rcon('set scr_teambalance 1', '');
++$x_number;	 		 
	}	
       else if ((strpos($c_2, $msgr) !== false) && ($x_number == 0))
    {
list($x_cmd, $x_b) = explode(' ', $msgr);  ////	 	
	  usleep($sleep_rcon);
	rcon('set scr_teambalance 0', '');
++$x_number;	 		 
	}
       else if ((strpos($c_3, $msgr) !== false) && ($x_number == 0))
    { 
list($x_cmd, $x_b) = explode(' ', $msgr);  ////		
	  usleep($sleep_rcon);
	rcon('set scr_killcam 1', '');
++$x_number;	 		 
	}
	   else if ((strpos($c_4, $msgr) !== false) && ($x_number == 0))
    { 	
	  usleep($sleep_rcon);
	rcon('set scr_killcam 0', '');
++$x_number;	 		 
	}
	   else if ((strpos($c_5, $msgr) !== false) && ($x_number == 0))
    {
list($x_cmd, $x_b) = explode(' ', $msgr);  ////	 	
	  usleep($sleep_rcon);
	rcon('set scr_friendlyfire 1', '');
++$x_number;	 		 
	}
	   else if ((strpos($c_6, $msgr) !== false) && ($x_number == 0))
    {
list($x_cmd, $x_b) = explode(' ', $msgr);  ////	 	
	  usleep($sleep_rcon);
	rcon('set scr_friendlyfire 0', '');
++$x_number;	 		 
	}
	else if ((strpos($c_6x, $msgr) !== false) && ($x_number == 0))
    {
list($x_cmd, $x_b) = explode(' ', $msgr);  ////	 	
	  usleep($sleep_rcon);
	rcon('exec config_gt_bombs.cfg', '');
++$x_number;	 		 
	}
	else if ((strpos($c_7x, $msgr) !== false) && ($x_number == 0))
    {
list($x_cmd, $x_b) = explode(' ', $msgr);  ////	 	
	  usleep($sleep_rcon);
	rcon('exec config_gt_tdm.cfg', '');
++$x_number;	 		 
	}	
	   else if ((strpos($c_7, $msgr) !== false) && ($x_number == 0))
    {
list($x_cmd, $x_b) = explode(' ', $msgr);  ////	 	
	  usleep($sleep_rcon);
	rcon('set awe_obituary 0', '');
++$x_number;	 		 
	}
	   else if ((strpos($c_8, $msgr) !== false) && ($x_number == 0))
    {
list($x_cmd, $x_b) = explode(' ', $msgr);  ////	 	
	  usleep($sleep_rcon);
	rcon('set awe_obituary 1', '');
++$x_number;	 		 
	}
	   else if ((strpos($c_9, $msgr) !== false) && ($x_number == 0))
    {
list($x_cmd, $x_b) = explode(' ', $msgr);  ////	 	
	  usleep($sleep_rcon);
	rcon('set awe_obituary 2', '');
++$x_number;	 		 
	}
	   else if ((strpos($c_10, $msgr) !== false) && ($x_number == 0))
    {
list($x_cmd, $x_b) = explode(' ', $msgr);  ////	 	
	  usleep($sleep_rcon);
	rcon('set awe_obituary_death 0', '');
++$x_number;	 		 
	}
	   else if ((strpos($c_11, $msgr) !== false) && ($x_number == 0))
    {
list($x_cmd, $x_b) = explode(' ', $msgr);  ////	 	
	  usleep($sleep_rcon);
	rcon('set awe_obituary_death 1', '');
++$x_number;	 		 
	}	 

	
else if ((strpos($msgr,$ixz.'rc ') !== false) && ($x_number == 0))
    {

$commndzz = rconcmommnd($msgr);
	 usleep($sleep_rcon); //
	rcon($commndzz.'', '');

++$x_number;	 		 
	}
	   
list($cmmde, $pt) = explode(' ', $msgr);

	   if ((preg_match('/'.$c_12.'/si',$msgr , $rrrc)) && ($x_number == 0))
    { 	
	 echo  $pt;
	 usleep($sleep_rcon);
	rcon('set g_addpt '.$pt.'', ''); //20	
++$x_number;	 		 
	}
if ((preg_match('/'.$c_13.'/si',$msgr , $rrrc)) && ($x_number == 0))
    { 	
	 echo  $pt;
	 usleep($sleep_rcon);
	rcon('set g_addptt '.$pt.'', ''); //50	
++$x_number;	 		 
	}
else if ((preg_match('/'.$c_13x.'/si',$msgr , $rrrc)) && ($x_number == 0))
    { 	
	 echo  $pt;
	 usleep($sleep_rcon);
	rcon('set g_addpt1 '.$pt.'', ''); //100	
++$x_number;	 		 
	}	
	   else if ((preg_match('/'.$c_14.'/si',$msgr , $rrrc)) && ($x_number == 0))
    { 	
	 echo  $pt;
	 usleep($sleep_rcon);
	rcon('set g_addpt5 '.$pt.'', ''); //1000	
++$x_number;	 		 
	}
	 else if ((preg_match('/'.$c_15.'/si',$msgr , $rrrc)) && ($x_number == 0))
    { 	
	  usleep($sleep_rcon);
	rcon('set g_smiteslow '.$pt.'', ''); //ZERO
++$x_number;	 		 
	}
	   else if ((preg_match('/'.$c_16.'/si',$msgr , $rrrc)) && ($x_number == 0))
    { 	
	  usleep($sleep_rcon);
	rcon('set firegod '.$pt.'', ''); // FIREGOD
++$x_number;	 		 
	}
	   else if ((preg_match('/'.$c_17.'/si',$msgr , $rrrc)) && ($x_number == 0))
    { 	
	  usleep($sleep_rcon);
	rcon('set crash '.$pt.'', ''); // crash
++$x_number;	 		 
	}
	   else if ((preg_match('/'.$c_18.'/si',$msgr , $rrrc)) && ($x_number == 0))
    { 	
	  usleep($sleep_rcon);
	rcon('set crush '.$pt.'', ''); // crush
++$x_number;	 		 
	}
	
   }
   } 

  $result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	 
	?>