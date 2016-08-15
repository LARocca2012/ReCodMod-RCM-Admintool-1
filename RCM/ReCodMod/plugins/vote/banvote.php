<?php
if ($x_stop_lp == 0 ) {	
if (strpos($msgr, $cmdx0) !== false)////////////////////////////////////////////////////////////////////////////////////////////////
{
    echo "\n[cmb] : [",$datetime, "] : ".$nickr." : ".$msgr;
$fd = fopen($rules_log_vote, "r");
$bufer = fread($fd, filesize($rules_log_vote));
fclose($fd); 
 
$strtmp = explode("\n", $bufer); 
$v = $nickr;
//$v = trim($v);
foreach($strtmp as $word) {
if($v == $word){
require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
/////////////////////////////////////////////////////////////////////////////////KICK
$x_namex = trim(clearnamex($i_name));
	  usleep($sleep_rcon);
		rcon('say ^6 ^3YOU VOTED, It is useless to make repeat!', '');
	}		
echo '  voted  '.$tfinishh = (microtime(true) - $start);
 echo "" .$v. "\n";
return;}
}	
$vote_cgu = 0;		
$x_number = 0;	
require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<$player_cnt; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
if ($cmdx0 !== false) {

$x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
   $xtimer = date("dmYHis");
 list($x_cmd, $x_idn) = explode(' ', $msgr);   // 
 
 $i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk); 
	  

try
  {
    	   if (empty($adminlists))	  
$db1 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db1 = new PDO('sqlite:'.$adminlists);
    $result = $db1->query("SELECT * FROM x_cmd_kck");
 
    foreach($result as $row)
    {	 	
$xtmm = $row['z_time'];	 
$xSQL = $row['z_counts'];
	} 
	  if($x_bann[0] == $x_idn)
	     {	
$vote_cg = "";
$votm = "";
$raznicaa = $xtimer - $xtmm;
///////////////////////////////////////////VOTE
if($player_cnt == 0)
$plggx = 1;
else if($player_cnt == 1)
$plggx = 1;
else if($player_cnt == 2)
$plggx = 2;
else if($player_cnt == 3)
$plggx = 2;
else if($player_cnt == 5)
$plggx = 3;
else if($player_cnt == 6)
$plggx = 4;
else if($player_cnt == 7)
$plggx = 4;
else if($player_cnt == 8)
$plggx = 5;
else if($player_cnt == 9)
$plggx = 5;
else if($player_cnt == 10)
$plggx = 6;
else if($player_cnt == 11)
$plggx = 6;
else if($player_cnt == 12)
$plggx = 7;
else if($player_cnt == 13)
$plggx = 7;
else if($player_cnt == 14)
$plggx = 7;
else if($player_cnt == 15)
$plggx = 8;
else if($player_cnt >= 16)
$plggx = round($player_cnt/3);
$playC = $plggx;
 
if($raznicaa > 50) 
  {
  VoteCashreset("null");
  }
 
if(($raznicaa < 50) && ($xSQL < $playC)) /////////////////////////////////
  {
    $raznicaa = $xtimer - $xtmm;
  $raznicaa2 = (50 - $raznicaa); 
 
$db1->exec("UPDATE x_cmd_kck SET z_counts=z_counts +1");

  usleep($sleep_rcon);
  rcon('say ^6 '. $vote_cg . ' "^2Vote: ^7'.$ixz.'b '.$x_idn.'"^1Ban^5 '.$i_namex.' ^8Seconds Left:^3 '.$raznicaa2.'', '');	 
  VoteCash("".$nickr."");
  }
      else if(($raznicaa < 50) && ($xSQL >= $playC))   ///////////////////////////////////
  { 
    $x_reason = "PlayersVote";  
	$db1->exec("INSERT INTO bans (playername,ip,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','$x_reason','$datetime','$x_nickx','$game_patch')");
	usleep($sleep_rcon);
	rcon('say  ^6 ' . $chistx . ' '.$ban_ip_all.' "^7Reason:^1" "'.$x_reason.'"', '');
	usleep($sleep_rcon);
	rcon('clientkick '. $x_idn, '');
	AddToLog("[".$datetime."] KICK: " . $i_ip . " (" . $i_namex . ") (" . $i_id . ") BY: (" . $x_nickx . ")  R ");    
  $xc_vote = 0;
  $xtimer = date("dmYHis");
  $db1->exec("UPDATE x_cmd_kck SET z_counts='{$xc_vote}',z_time='{$xtimer}'");
	++$x_number; 	 
 VoteCashreset("".$nickr."");
 }
      else if($raznicaa > 50) /////////////////////////////////
  {
  $xc_vote = 0;	
  $xtimer = date("dmYHis");
  $db1->exec("UPDATE x_cmd_kck SET z_counts='{$xc_vote}',z_time='{$xtimer}'");
  usleep($sleep_rcon);
  rcon('say ^6 '. $votm . ' "^2Vote Activated!: ^7'.$ixz.'b '.$x_idn.'"^1<- Vote: to Ban^5 '.$i_namex.'', ''); 
 VoteCashreset("".$nickr."");
 } 
	}

 $db1 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	
	}
/////////////////////////////////////////////////////////////////////////////////BAN


 }   ///end loop

echo '    '.$tfinishh = (microtime(true) - $start);
++$x_stop_lp;

///////////////////////////////////////////////////////////////////////////////////////////

 


}
	
}
?>
 
