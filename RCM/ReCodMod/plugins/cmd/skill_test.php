<?php	
if ($x_stop_lp == 0 ) {
$rules_msgg_cmd = true;	 ////////
 if ((strpos($msgr, $ixz.'n ') !== false) && ($x_number != 1))
    { 
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 
	  if($kski[0] == $x_idn) 
	     {

 try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_player='{$i_namex}' LIMIT 1");
 $number = 0;
    foreach($result as $row)
    {	 	
	    $kl  = 	$row['s_kills'];
		$dth = 	$row['s_deaths'];
		$ply = 	$row['s_clear'];
		$yhu = $row['s_place'];
	}	
	
$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	
	
	
if(!empty($ply))
	  {
echo '    '.$tfinishh = (microtime(true) - $start);		
++$x_stop_lp;    //return;
      }	
if ($kl <= 0 || $dth <= 0){  }else{	 	  
$skil_x = round((($kl-$dth)*($kl/$dth)*10));
$ratio_x = ($kl/$dth);

require $cpath . 'ReCodMod/functions/inc_functions2.php';
                            for ($i = 0; $i < 1; $i++) {
                                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                                if ((!$valid_id) || (!$valid_ping))
                                    Continue;	
  usleep($sleep_rcon);
  rcon("say  ^6 ^3".$ply." ^1Top: ^2".$yhu." ^1Skill Rank:^2  ".$skil_x." ^1 Kills:^2 ".$kl." ^1 K/D Ratio:^2 ".substr($ratio_x, 0,5)."  ", "");	
	++$x_number;	
	AddToLogInfo("[".$datetime."] SKILL: " . $i_ip . " (" . $x_nickx . ") (" . $msgr . ") reason: S"); 
							}
	
echo '    '.$tfinishh = (microtime(true) - $start);
}		 
	}
}
}
?>
 

