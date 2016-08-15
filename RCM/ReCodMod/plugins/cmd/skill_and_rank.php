<?php	

$rules_msgg_cmd = true;	 ////////
 if ((strpos($msgr, $ixz.'rank') !== false) && ($x_number != 1))
    {

echo '===========================';
	
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	 
$na1 = trim($kski[1]);
$na2 = trim($x_nickx);
	 if($na1 == $na2) 
	     {

	$i_namex = afdasfawf($i_name);		 
		 
 

try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
 
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_player='{$i_namex}' LIMIT 1");
 	$number = 0;		
    foreach($result as $row)
    {	
		$ply = $row['s_clear'];
		$skilll = $row['s_skill'];
	}

$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	


	
require_once $cpath.'ReCodMod/functions/ranks.php';                                 


/////////// HERE SQL FOR DB-5 RANK LEVELS


require $cpath . 'ReCodMod/functions/inc_functions2.php';
                            for ($i = 0; $i < 1; $i++) {
                                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                                if ((!$valid_id) || (!$valid_ping))
                                    Continue;	
usleep($sleep_rcon);	
if (!empty($skill2))
{
rcon("say  ^6 ^3".$ply." ^1Skill Rank:^2  ".$skilll." ^1 Rank:^2 ".$skill2." ^7||^2 ".$lbr." ^1 Level:^2 ".$lvll." ", "");
}else{

rcon("say  ^6 ^1Rank error", "");

}
							} 	
	++$x_number;	
	AddToLogInfo("[".$datetime."] RANK: " . $i_ip . " (" . $x_nickx . ") (" . $msgr . ") reason: S"); 
echo '    '.$tfinishh = (microtime(true) - $start);
}		 
	}

?>
 

