<?php	
if ($x_stop_lp == 0 ) {
if ((strpos($msgr, $ixz.'sk') !== false) || (strpos($msgr, $ixz."stats") !== false))
{
 echo "\n[cmk] : [",$datetime, "] : ".$nickr." : ".$msgr;
$vote_cgu = 0;		
$x_number = 0;	

$status = new COD4ServerStatus($server_ip, $server_port); 
	
	if ($status->getServerStatus()){
		$status->parseServerData();
		
		$serverStatus = $status->returnServerData();
		
		$players = $status->returnPlayers();
		$pings = $status->returnPings();
		$scores = $status->returnScores();

	$rank = 1;
            foreach($players as $i => $v){
         
                	$i_id = $rank;  
                    $i_name = $players[$i]; 
                    $i_ip = $scores[$i];  
                    $i_ping = $pings[$i]; 
 
$x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
if ((strpos($msgr, $ixz.'sk') !== false) && ($x_number != 1))
    { 
$symbs = mb_strlen(trim($msgr), 'utf-8');
 
if ($symbs == 2 || $msgr == $ixz.'skill' || $msgr == $ixz.'skills' || $msgr == $ixz.'sk')
{
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	 
 $na1 = trim($kski[1]);
 $na2 = trim($x_nickx);
	 if($na1 == $na2) 
	     {
 
 try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $sql = "SELECT * FROM x_db_play_stats WHERE s_player='{$x_namex}' LIMIT 1";
  
$stat = $db3->query($sql)->fetchColumn();

if($stat > 0)
{ 
 $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_player='{$x_namex}' LIMIT 1");
	$number = 0;	
    foreach($result as $row)
    {		
	    $kl  = 	$row['s_kills'];
		$dth = 	$row['s_deaths'];
		$ply = 	$row['s_clear'];
		$pla = 	$row['s_place'];
                $suee = 	$row['s_suicids'];
                $bsdvc = 	$row['s_melle'];
                $k  = 	$row['s_lasttime'];	
                $r  = 	$row['s_time'];


list($vv9, $vv8) = explode(' ',$r);
$lasttime = $k;
list($vv9g, $vv8g, $vv7g) = explode('.',$vv9);
list($vv9g1, $vv8g1, $vv7g1) = explode('.',$vv8);
 $time = $vv9g.'-'.$vv8g.'-'.$vv7g.' '.$vv9g1.':'.$vv8g1;
   $datetime1 = date_create($lasttime);
   $datetime2 = date_create($time);
   $interval = date_diff($datetime1, $datetime2);
   $playedp = $interval->format('%y years %M months %D days %H hours %I minutes');
   $played = cleart($playedp);


	}

if(empty($pla))
$pla = 'None';
		  
$skil_x = round((($kl-$dth)*($kl/$dth)*10));
$ratio_x = ($kl/$dth); 
 require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
  usleep($sleep_rcon);
  rcon("say ^6  ^7".$ply." ^1Top: ^2".$pla." ^1Skill:^2 ".$skil_x." ^1 Kills:^2 ".$kl." ^1 K/D Ratio:^2 ".substr($ratio_x, 0,4).".. ^1Bash:^2 ".$bsdvc." ^1Suicides:^2 ".$suee." ^1Played:^2 ".$played."", "");	
	++$x_number;
	}	
	AddToLogInfo("[".$datetime."] SKILL: " . $i_ip . " (" . $x_nickx . ") (" . $msgr . ") reason: S"); 

echo '    '.$tfinishh = (microtime(true) - $start);	  
++$x_stop_lp;    //return;
	
	}else{
		
require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue;
usleep($sleep_rcon);

if ($game_patch == 'cod1_1.1')
rcon("say ->  ^3No Skill Rank. Nope experience...", "");
else
rcon("tell ".$i_id."  ^3No Skill Rank. Nope experience...", "");
	}
echo '    '.$tfinishh = (microtime(true) - $start);	  
++$x_stop_lp;    //return;
	}
	
	
	
	
	
	$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	
	
	
	
	
	
	}	
}else{

list($x_cmd, $x_nameee) = explode(' ', $msgr); // 
$x_namjj= clearnamex2($x_nameee);	
  
  
  
  try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_player='{$x_namex}' LIMIT 1");
 	
$sql = "SELECT * FROM x_db_play_stats WHERE s_player='{$x_namex}' LIMIT 1";

$stat = $db3->query($sql)->fetchColumn();

if(empty($stat))
{
require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue;
  usleep($sleep_rcon);
  rcon("say ^6  ^5Dosn't exist! ", "");	
	++$x_number;
	}	
	AddToLogInfo("[".$datetime."] SKILL: " . $i_ip . " (" . $x_nickx . ") (" . $msgr . ") reason: S"); 

 
echo '    '.$tfinishh = (microtime(true) - $start);	  
++$x_stop_lp;    //return;

}else{


	$number = 0;	
    foreach($result as $row)
    { 
	    $kl  = 	$row['s_kills'];
		$dth = 	$row['s_deaths'];
		$ply = 	$row['s_clear'];
		$xlst =  $row['s_lasttime'];	
		$pla = $row['s_place'];
	}


if(empty($pla))
$pla = 'None';
	
if(!empty($ply))
	  {
 
echo '    '.$tfinishh = (microtime(true) - $start);	  
++$x_stop_lp;    //return;
      }	
if (!empty($kl)){  
require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue;
usleep($sleep_rcon);

if ($game_patch == 'cod1_1.1')
rcon("say ->  ^3No Skill Rank. Nope experience...", "");
else
rcon("tell ".$i_id."  ^3No Skill Rank. Nope experience...", "");
	}	
}else{		  
$skil_x = round((($kl-$dth)*($kl/$dth)*10));
$ratio_x = ($kl/$dth);
 require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue;  
  usleep($sleep_rcon);
rcon("say ^6 ^7".$ply." ^1Top:^2".$pla." ^1Rank:^2 ".$skil_x." ^1 Kills:^2".$kl." ^1 Deaths:^2".$dth." ^1Ratio:^2 ".substr($ratio_x, 0,19)." ^1 Last Hunted:^2 ".$xlst."", "");	
	++$x_number;
	}	
	AddToLogInfo("[".$datetime."] SKILL: " . $i_ip . " (" . $x_nickx . ") (" . $msgr . ") reason: S"); 

 
echo '    '.$tfinishh = (microtime(true) - $start);	  
++$x_stop_lp;    //return;
}}          




$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	







}}










if (strpos($msgr, $ixz."stats") !== false)
    { 
++$x_number;

$symbs = mb_strlen(trim($msgr), 'utf-8');
//list($nickr, $msgr) = explode(' % ', $parselinetxt);
//list($x_cmd, $x_idn) = explode(' ', $msgr); // 	
//if ($x_idn=='')
 try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_player='$x_namex' LIMIT 1");
	
if ($symbs == 2 || $msgr == $ixz.'stats' || $msgr == $ixz.'statss' || $msgr == $ixz.'st')
{//echo 'axaxaxaxax';
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	 
$na1 = trim($kski[1]);
$na2 = trim($x_nickx);
	 if($na1 == $na2) 
	     {
 
 
$sqlt = "SELECT * FROM x_db_play_stats WHERE s_player='{$i_namex}' LIMIT 1";
$statsf = $db3->query($sqlt)->fetchColumn();
echo '--------';
if($statsf > 0)
{ 
	$number = 0;	
    foreach($result as $row)
    {	
	    $kl  = 	$row['s_kills'];
		$dth = 	$row['s_deaths'];
		$ply = 	$row['s_clear'];
		$pla = 	$row['s_place'];
               $xlst =  $row['s_lasttime'];
                $suee = 	$row['s_suicids'];
                $bsdvc = 	$row['s_melle'];
$cfall       =  $row['s_fall'];
	}


if(empty($pla))
$pla = 'None';
		  
$skil_x = round((($kl-$dth)*($kl/$dth)*10));
$ratio_x = ($kl/$dth);

usleep($sleep_rcon);
   
 require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue;
 
usleep($sleep_rcon);

if ($game_patch == 'cod1_1.1')
 rcon("say -> ^6 ^1Top:^2".$pla." ^1Rank:^2 ".$skil_x." ^1 Frags:^2".$kl." ^1 Deaths:^2".$dth." ^1Ratio:^2 ".substr($ratio_x, 0,10)."... ^1 Last Hunted:^2 ".$xlst." ^1Bash:^2 ".$bsdvc." ^1Suicides:^2  ".$suee." ^6".$website."/top ", "");
else
 rcon("tell ".$cfall. " ^6 ^1Top:^2".$pla." ^1Rank:^2 ".$skil_x." ^1 Frag:^2".$kl." ^1 Death:^2".$dth." ^1Ratio:^2 ".substr($ratio_x, 0,4).".. ^1Bash:^2 ".$bsdvc." ^1Suicide:^2  ".$suee." ^1 Last Hunt:^2 ".$xlst."", "");

	++$x_number;
	}	
	AddToLogInfo("[".$datetime."] SKILL: " . $i_ip . " (" . $x_nickx . ") (" . $msgr . ") reason: S"); 

 
echo '    '.$tfinishh = (microtime(true) - $start);	  
++$x_stop_lp;    //return;
	

  }else{
	  require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue;
usleep($sleep_rcon);

if ($game_patch == 'cod1_1.1')
rcon("say -> ^3No Skill Rank. Nope experience...", "");
else
rcon("tell ".$i_id."  ^3No Skill Rank. Nope experience...", "");
	}
echo '    '.$tfinishh = (microtime(true) - $start);	  
++$x_stop_lp;    //return;
	}
	}	
}else{

list($x_cmd, $x_nameee) = explode(' ', $msgr); // 
$x_namjj= clearnamex2($x_nameee);	

$sql = "SELECT * FROM x_db_play_stats WHERE s_player='{$x_namjj}' LIMIT 1";
 	
$stat = $db3->query($sql)->fetchColumn();

if(empty($stat))
{ 
require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue;
  usleep($sleep_rcon);
  rcon("say ^6  ^5Dosn't exist! ", "");	
	++$x_number;
	}	
	AddToLogInfo("[".$datetime."] SKILL: " . $i_ip . " (" . $x_nickx . ") (" . $msgr . ") reason: S"); 

 
echo '    '.$tfinishh = (microtime(true) - $start);	  
++$x_stop_lp;    //return;

}else{


	$number = 0;	
    foreach($result as $row)
    {		
	    $kl  = 	$row['s_kills'];
		$dth = 	$row['s_deaths'];
		$ply = 	$row['s_clear'];
		$xlst =  $row['s_lasttime'];	
		$pla = $row['s_place'];
	}	
if(!empty($ply))
	  {
 
echo '    '.$tfinishh = (microtime(true) - $start);	  
++$x_stop_lp;    //return;
      }	
if (!empty($kl)){ 
require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
usleep($sleep_rcon);
if ($game_patch == 'cod1_1.1')
rcon("say -> ^3No Skill Rank. Nope experience...", "");
else
rcon("tell ".$i_id."  ^3No Skill Rank. Nope experience...", "");

	
	}
}else{		  
$skil_x = round((($kl-$dth)*($kl/$dth)*10));
$ratio_x = ($kl/$dth);   
 require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
  usleep($sleep_rcon);
if ($game_patch == 'cod1_1.1')
rcon("say ^6 ^1Top:^2".$yhu." ^1Rank:^2 ".$skil_x." ^1 Frags:^2".$kl." ^1 Deaths:^2".$dth." ^1Ratio:^2 ".substr($ratio_x, 0,19)." ^1 Last Hunted:^2 ".$xlst." ^6".$website."/top ", "");
else
rcon("tell ".$i_id. " ^6 ^1Top:^2".$yhu." ^1Rank:^2 ".$skil_x." ^1 Frags:^2".$kl." ^1 Deaths:^2".$dth." ^1Ratio:^2 ".substr($ratio_x, 0,19)." ^1 Last Hunted:^2 ".$xlst." ^6".$website."/top ", "");		
	++$x_number;
	}	
	AddToLogInfo("[".$datetime."] SKILL: " . $i_ip . " (" . $x_nickx . ") (" . $msgr . ") reason: S"); 

 
echo '    '.$tfinishh = (microtime(true) - $start);	  
++$x_stop_lp;    //return;
}}



}




	

$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }

}



$rank++;}}}}
?>
 

