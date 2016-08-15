<?php	
  if (strpos($msgr,$ixz.'rc ') !== false)
    {

 //list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
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
 $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ipv == $i_ipo) && ($kskig == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111)));
    if($jjj)
	      { 
++$knownplayr;

  if ((strpos($msgr,$ixz.'rc ') !== false) && ($x_number == 0))
    {

$commndzz = rconcmommnd($msgr);
	 usleep($sleep_rcon); //
	rcon($commndzz.'', '');

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





  
	}
?>
 
