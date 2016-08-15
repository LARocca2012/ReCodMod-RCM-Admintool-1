<?php
if ($x_stop_lp == 0 ) {

if ( ($msgr == ''.$ixz.'top')&& ($x_number == 0) || ($msgr == ''.$ixz.'TOP')&& ($x_number == 0))
{
try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=$limm ORDER BY (s_ratio+0) DESC LIMIT 5");
 		$number = 0;
    foreach($result as $row)
    {
        $playername = 	$row['s_clear'];
	$ipm = 			$row['s_ratio'];
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


	usleep($sleep_rcon);
	//rcon("say  ^6 ^3    [^6 " . ++$number . " ^3] ^7 ".$playername."^1 Skill Rank: ^2 ".$ipm." ^3[^5TOP100  ^7http:^7/^7/recod.ru/top^7^3]", "");
	  rcon("say  ^6 ^3    [^6 " . ++$number . " ^3] ^7 ".$playername."^1 Ratio: ^2".substr($ipm, 0,6).".. ^7Played - ".$played." ", "");
	
	}


$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }

	
	++$x_number;	
	AddToLogInfo("[".$datetime."] TOP: (" . $nickr . ") (" . $msgr . ") reason: TOP"); 
 

echo '    '.$tfinishh = (microtime(true) - $start);

++$x_stop_lp;    //return;			 
	}	
	
	
	
if ((strpos($msgr, $ixz.'top ') !== false) || (strpos($msgr, ''.$ixz.'TOP ') !== false) && ($x_number == 0))
{
list($x_cmd, $x_nameee) = explode(' ', $msgr); // 
$x_namjj= clearnamex2($x_nameee);	


try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_place='{$x_namjj}' LIMIT 1");


	
$rows = count ($result); 

if(!$rows)
{
if($x_number == 0){
  usleep($sleep_rcon);
  rcon("say ^6  ^5Dosn't exist! ", "");	
  }
	++$x_number;	
	AddToLogInfo("[".$datetime."] TOP: " . $i_ip . " (" . $nickr . ") (" . $msgr . ") reason: S"); 
 
 
 
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
if($ply != 0)
	  {
fclose($connect);
 
echo '    '.$tfinishh = (microtime(true) - $start);	  
++$x_stop_lp;    //return;
      }	
if ($kl <= 0 || $dth <= 0){  
usleep($sleep_rcon);
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam')){	
rcon(" - ^3No Skill Rank. Nope experience...", ""); 
}else{
rcon("tell ".$i_id."  ^3No Skill Rank. Nope experience...", "");
}	
}else{		  
$skil_x = round((($kl-$dth)*($kl/$dth)*10));
$ratio_x = ($kl/$dth);   
  if($x_number == 0){
  usleep($sleep_rcon);
rcon("say ^6 ^7".$ply." ^1Top:^2".$pla." ^1Rank:^2 ".$skil_x." ^1 Kills:^2".$kl." ^1 Deaths:^2".$dth." ^1Ratio:^2 ".substr($ratio_x, 0,19)." ^1 Last Hunted:^2 ".$xlst."", "");	
	}
	
	++$x_number;	
	AddToLogInfo("[".$datetime."] SKILL: " . $i_ip . " (" . $nickr . ") (" . $msgr . ") reason: S"); 
 
echo ' ----   '.$tfinishh = (microtime(true) - $start);	  
++$x_stop_lp;    //return;
}}





$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }









}


















if ((strpos($msgr, $ixz.'grenade') !== false) || (strpos($msgr, ''.$ixz.'nade ') !== false) && ($x_nmbrf == 0))
{
try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=1 ORDER BY (s_grenade+0) DESC LIMIT 5");
 		$number = 0;
    foreach($result as $row)
    {
        $playername = 	$row['s_clear'];
		$ipm = 			$row['s_grenade'];
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

	usleep($sleep_rcon);
	//rcon("say  ^6 ^3    [^6 " . ++$number . " ^3] ^7 ".$playername."^1 Skill Rank: ^2 ".$ipm." ^3[^5TOP100  ^7http:^7/^7/recod.ru/top^7^3]", "");
	  rcon("say  ^6 ^3    [^6 " . ++$number . " ^3] ^7 ".$playername." ^1Grenade Kills: ^2".$ipm." ^1Played: ^2".$played." ^3[^5TOP5^3]", "");
	
	}


$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }

	
	++$x_number;	
	AddToLogInfo("[".$datetime."] TOP: (" . $nickr . ") (" . $msgr . ") reason: TOP"); 
  
//fclose($connect);
////fclose($fpX);

echo '    '.$tfinishh = (microtime(true) - $start);

++$x_stop_lp;    //return;			 
	}	
	








if ( ($msgr == ''.$ixz.'head')&& ($x_number == 0) || ($msgr == ''.$ixz.'heads')&& ($x_number == 0))
{
try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=1 ORDER BY (s_heads+0) DESC LIMIT 5");
 		$number = 0;
    foreach($result as $row)
    {
        $playername = 	$row['s_clear'];
		$ipm = 			$row['s_heads'];
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
	usleep($sleep_rcon);
	//rcon("say  ^6 ^3    [^6 " . ++$number . " ^3] ^7 ".$playername."^1 Skill Rank: ^2 ".$ipm." ^3[^5TOP100  ^7http:^7/^7/recod.ru/top^7^3]", "");
	//rcon("say  ^6 ^3    [^6 " . ++$number . " ^3] ^7 ".$playername."  ^3[ ^6HEADSHOTS: ^2".$ipm."^3] ^6Played ^2".$played." ^3[^5TOP5^3]", "");
	  rcon("say  ^6 ^3    [^6 " . ++$number . " ^3] ^7 ".$playername."^1 HeadShots: ^2 ".$ipm." ^3[^5TOP5^3]", "");
	}


$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }

	
	++$x_number;	
	AddToLogInfo("[".$datetime."] TOP: (" . $nickr . ") (" . $msgr . ") reason: TOP"); 
 
//fclose($connect);
////fclose($fpX);

echo '    '.$tfinishh = (microtime(true) - $start);

++$x_stop_lp;    //return;			 
	}	
	











if ((strpos($msgr, $ixz.'kills') !== false) || (strpos($msgr, ''.$ixz.'kills ') !== false) && ($x_nmbrf == 0))
{
 
   
   
 try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=$limm ORDER BY (s_kills+0) DESC LIMIT 5");
 
	$number = 0;	
 	
    foreach($result as $row)
    {	
	    $playername = 	$row['s_clear'];
		$ipm = 			$row['s_kills'];
	
	
	usleep($sleep_rcon);
	rcon("say  ^6 ^3    [^6 " . ++$number . " ^3] ^7 ".$playername."^1 Kills: ^2 ".$ipm." ^3[^5TOP5^3]", "");
	++$x_number;
	++$x_nmbrf;
	//}	
}		
	
$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
	
	AddToLogInfo("[".$datetime."] TOP: (" . $nickr . ") (" . $msgr . ") reason: TOP"); 
 
 

echo '    '.$tfinishh = (microtime(true) - $start);
  
++$x_stop_lp;    //return;			 
	}	





if ( ($msgr == ''.$ixz.'suicid')&& ($x_number == 0) || ($msgr == ''.$ixz.'suicides')&& ($x_number == 0))

{
 
 try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_suicids>=1 ORDER BY (s_suicids+0) DESC LIMIT 5");
 
	$number = 0;	
 	
    foreach($result as $row)
    {	
	    $playername = 	$row['s_clear'];
		$ipm = 			$row['s_suicids'];
	
	
	usleep($sleep_rcon);
	rcon("say  ^6 ^3    [^6 " . ++$number . " ^3] ^7 ".$playername."^1 Suicides: ^2 ".$ipm." ^3[^5TOP5^3]", "");
	++$x_number;
	++$x_nmbrf;
	//}	
}		
	
$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
	
	AddToLogInfo("[".$datetime."] TOP: (" . $nickr . ") (" . $msgr . ") reason: TOP"); 
 
 

echo '    '.$tfinishh = (microtime(true) - $start);
  
++$x_stop_lp;    //return;			 
	}	

	

if (($msgr == ''.$ixz.'bash')&& ($x_number == 0) || ($msgr == ''.$ixz.'mellee')&& ($x_number == 0))
{
 
 try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_melle>=10 ORDER BY (s_melle+0) DESC LIMIT 5");
 
	$number = 0;	
 	
    foreach($result as $row)
    {	
	    $playername = 	$row['s_clear'];
		$ipm = 			$row['s_melle'];
	
	
	usleep($sleep_rcon);
	rcon("say  ^6 ^3    [^6 " . ++$number . " ^3] ^7 ".$playername."^1 Mellee/Bash: ^2 ".$ipm." ^3[^5TOP5^3]", "");
	++$x_number;
	++$x_nmbrf;
	//}	
}		
	
$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
	
	AddToLogInfo("[".$datetime."] TOP: (" . $nickr . ") (" . $msgr . ") reason: TOP"); 
 
 

echo '    '.$tfinishh = (microtime(true) - $start);
  
++$x_stop_lp;    //return;			 
	}	


	
	
if ( ($msgr == ''.$ixz.'toprank')&& ($x_number == 0) || ($msgr == ''.$ixz.'TOPRANK')&& ($x_number == 0))
{
      
	  
 try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=$limm ORDER BY (s_skill+0) DESC LIMIT 5");
 $num = 0;
 $number = 0;
    foreach($result as $row)
    {	  	
	    $playername = 	$row['s_clear'];
		$skilll = 			$row['s_skill'];
		$ply = $row['s_clear'];

$xhcv = $skilll;
    if($skilll < '-15000')
	{
		$skill2 = "NOOB 99 LVL";
		$lbr = "N-O-O-B";
		$lvll = "0";
	}
    if($skilll < '-10000')
	{
		$skill2 = "Flotsam and jetsam";
		$lbr = "PAJ";
		$lvll = "1";
	}
	else if($skilll < '-5000')
	{
		$skill2 = "Prisoner Of War";
		$lbr = "POW";
		$lvll = "2";
	}
	else if($skilll < '-4000')
	{
		$skill2 = "Missing In Action";
		$lbr = "MIA";
		$lvll = "3";
	}
	else if($skilll < '-3000')
	{
		$skill2 = "Behind Enemy Lines";
		$lbr = "BEL";
		$lvll = "4";
	}
	else if($skilll < '-2000')
	{
		$skill2 = "Lost";
		$lbr = ". Lost";
		$lvll = "5";
	}
	else if($skilll < '-1000')
	{
		$skill2 = "Overrun";
		$lbr = "- OR";
		$lvll = "6";
	}
	else if($skilll < '-500')
	{
		$skill2 = "Overrun II";
		$lbr = "- OR II";
		$lvll = "7";
	}
	else if($skilll < '-300')
	{
		$skill2 = "Overrun II";
		$lbr = "- OR III";
		$lvll = "8";
	}
	else if($skilll < '-100')
	{
		$skill2 = "Overrun IV";
		$lbr = "- OR IV";
		$lvll = "9";
	}	
   else if($skilll < '10')
	{
		$skill2 = "Fighter LEVEL I";
		$lbr = "F";
		$lvll = "9";
	}
	
	else if($skilll < '220')
	{
		$skill2 = "Fighter LEVEL II";
		$lbr = "F II";
		$lvll = "10";
	}
	
	else if($skilll < '330')
	{
		$skill2 = "Fighter LEVEL III";
		$lbr = "F III";
		$lvll = "11";
	}
	
	else if($skilll < '440')
	{
		$skill2 = "Fighter LEVEL IV";
		$lbr = "F IV";
		$lvll = "12";
	}
	
	else if($skilll < '550')
	{
		$skill2 = "Fighter LEVEL V";
		$lbr = "F V";
		$lvll = "13";
	}	
	else if($skilll < '1000')
	{
		$skill2 = "Silver I";
		$lbr = ">";
		$lvll = "14";
	}
	
	else if($skilll < '1500')
	{
		$skill2 = "Silver II";
		$lbr = ">>";
		$lvll = "15";
	}
	
	else if($skilll < '3300')
	{
		$skill2 = "Silver III";
		$lbr = ">>>";
		$lvll = "16";
	}
	
	else if($skilll < '4400')
	{
		$skill2 = "Silver IV";
		$lbr = ">>>>";
		$lvll = "17";
	}
	
	else if($skilll < '5000')
	{
		$skill2 = "Silver Mater";
		$lbr = "SM>>>>";
		$lvll = "18";
	}	
	
	else if($skilll < '6100')
	{
		$skill2 = "Bronze I";
		$lbr = "B>";
		$lvll = "19";
	}
	
	else if($skilll < '7200')
	{
		$skill2 = "Bronze II";
		$lbr = "B>>";
		$lvll = "20";
	}
	
	else if($skilll < '8300')
	{
		$skill2 = "Bronze III";
		$lbr = "B>>>";
		$lvll = "21";
	}
	
	else if($skilll < '9400')
	{
		$skill2 = "Bronze IV";
		$lbr = "B>>>>";
		$lvll = "22";
	}
	
	else if($skilll < '10000')
	{
		$skill2 = "Bronze MASTER";
		$lbr = "<BM>";
		$lvll = "23";
	}
	else if($skilll < '11000')
	{
		$skill2 = "GOLD I";
		$lbr = "G>";
		$lvll = "24";
	}
	
	else if($skilll < '12200')
	{
		$skill2 = "GOLD II";
		$lbr = "G>>";
		$lvll = "25";
	}
	
	else if($skilll < '13300')
	{
		$skill2 = "GOLD III";
		$lbr = "G>>>";
		$lvll = "26";
	}
	
	else if($skilll < '14400')
	{
		$skill2 = "GOLD IV";
		$lbr = "G>>>>";
		$lvll = "27";
	}
	
	else if($skilll < '15000')
	{
		$skill2 = "GOLD MASTER";
		$lbr = "<GM>";
		$lvll = "28";
	}
	else if($skilll < '15500')
	{
		$skill2 = "Private"; 
		$lbr = "> PFC";
		$lvll = "29";
	}
	else if($skilll < '19000')
	{
		$skill2 = "Private First Class";  
		$lbr = "> PFC";
		$lvll = "30";
	}
	else if($skilll < '25000')
	{
		$skill2 = "Specialist";  
		$lbr = "x> SPC";
		$lvll = "31";
	}
	else if($skilll < '35000')
	{
		$skill2 = "Corporal";  
		$lbr = "x>> Cpl";
		$lvll = "32";
	}
	else if($skilll < '50000')
	{
		$skill2 = "Sergeant";  
		$lbr = "x>>> Sgt";
		$lvll = "33";
	}
	else if($skilll < '60000')
	{
		$lvll = "34";
		$skill2 = "Staff Sergeant";
		$lbr = "(x>>> SSG";
	}
	else if($skilll < '70000')
	{
		$lvll = "35";
		$skill2 = "Sergeant First Class";
		$lbr = "((x>>> SFC";
	}
	else if($skilll < '80000')
	{
		$lvll = "36";
		$skill2 = "Master Sergeant";
		$lbr = "(((x>>> MSG";
	}
	else if($skilll < '90000')
	{
		$lvll = "37";
		$skill2 = "First Sergeant";
		$lbr = "((((*>>> 1SG";
	}
	else if($skilll < '100000')
	{
		$lvll = "38";
		$skill2 = "Sergeant Major";
		$lbr = "((((X>>> SGM";
	}
	else if($skilll < '110000')
	{
		$lvll = "39";
		$skill2 = "Commander Sergeant Major";
		$lbr = "((((X>>> CSM";
	}
	else if($skilll < '130000')
	{
		$lvll = "40";
		$skill2 = "Sergeant Major of the Army";
		$lbr = "((((X>>> SMA";
	}
	else if($skilll < '150000')
	{
		$lvll = "41";
		$skill2 = "Second Lieutenant";
		$lbr = "I 2LT";
	}
	else if($skilll < '160000')
	{
		$lvll = "42";
		$skill2 = "First Lieutenant";
		$lbr = "I 1LT";
	}
	else if($skilll < '200000')
	{
		$lvll = "43";
		$skill2 = "Captain";
		$lbr = "II CPT";
	}
	else if($skilll < '250000')
	{
		$lvll = "44";
		$skill2 = "Major";
		$lbr = "@ MAJ";
	}
	else if($skilll < '260000')
	{
		$lvll = "45";
		$skill2 = "Lieutenant Colonel";
		$lbr = "# LTC";
	}
	else if($skilll < '310000')
	{
		$lvll = "46";
		$skill2 = "Colonel";
		$lbr = "* COL";
	}
	else if($skilll < '360000')
	{
		$lvll = "47";
		$skill2 = "Brigadier General";
		$lbr = "** BG";
	}
	else if($skilll < '3')
	{
		$lvll = "48";
		$skill2 = "Major General";
		$lbr = "*** MG";
	}
	else if($skilll < '400000')
	{
		$lvll = "49";
		$skill2 = "Lieutenant General";
		$lbr = "**** LTG";
	}
	else if($skilll < '500000')
	{
		$lvll = "50";
		$skill2 = "General";
		$lbr = "***** GEN";
	}
	else if($skilll < '600000')
	{
		$lvll = "51";
		$skill2 = "General of the Army";
		$lbr = "$ GOA";
	}
	else if($skilll < '700000')
	{
		$lvll = "52";
		$skill2 = "Caesar";
		$lbr = "$$ Czar";
	}
	else if($skilll < '800000')
	{
		$lvll = "53";
		$skill2 = "King";
		$lbr = "$$$ King";
	}
	
	else if($skilll < '900000')
	{
		$lvll = "54";
		$skill2 = "Emperor";
		$lbr = "EmR";
	}
	
	else if($skilll < '1000000')
	{
		$lvll = "55";
		$skill2 = "Pharoah";
		$lbr = "$$$$ Ph";
	}	
	else if($skilll < '1100000')
	{
		$lvll = "56";
		$skill2 = "Pharoah II";
		$lbr = "$$$$ Ph II";
	}	
	else if($skilll < '1200000')
	{
		$lvll = "57";
		$skill2 = "Pharoah III";
		$lbr = "$$$$ Ph III";
	}	
	else if($skilll < '1300000')
	{
		$lvll = "58";
		$skill2 = "Pharoah IV";
		$lbr = "$$$$ Ph IV";
	}	
	else if($skilll < '1400000')
	{
		$lvll = "59";
		$skill2 = "Pharoah V";
		$lbr = "$$$$ Ph V";
	}
	else if($skilll < '1500000')
	{
		$lvll = "60";
		$skill2 = "Lord of Scilly";
		$lbr = "$$$$ LRS";
	}
	else if($skilll < '1600000')
	{
		$lvll = "61";
		$skill2 = "Lord of Skill I";
		$lbr = "$$$$ LRS I";
	}
	else if($skilll < '1700000')
	{
		$lvll = "62";
		$skill2 = "Lord of Skill II";
		$lbr = "$$$$ LRS II";
	}
	else if($skilll < '1750000')
	{
		$lvll = "63";
		$skill2 = "Lord of Skill III";
		$lbr = "$$$$ LRS III";
	}	
	else if($skilll < '1800000')
	{
		$lvll = "64";
		$skill2 = "Demi-God";
		$lbr = "$$$$$$ DemiGod";
	}
	else if($skilll < '2000000')
	{
		$lvll = "65";
		$skill2 = "God";
		$lbr = "$$$$$$$ God";
	}	
	else if($skilll < '5000000')
	{
		$lvll = "66";
		$skill2 = "God lvl 999";
		$lbr = "$$$$$$$ God lvl 999";
	}

	
  usleep($sleep_rcon);
  rcon("say  ^6  [^6 ". ++$num ." ^6]  ^7".$ply." ^1Skill Rank:^2  ".$xhcv." ^1 Rank:^2 ".$skill2."  ^1 Level:^2 ".$lvll." / 66 ", "");	
	++$x_number;	
	}

$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	
	++$x_number;	
	AddToLogInfo("[".$datetime."] TOP: (" . $nickr . ") (" . $msgr . ") reason: TOP"); 
 

echo '    '.$tfinishh = (microtime(true) - $start);
 
++$x_stop_lp;    //return;			 
	}
}

if ((strpos($msgr, $ixz.'worst') !== false) && ($x_number != 1))
    { 

 try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=$limm ORDER BY (s_skill+0) ASC LIMIT 5");
 	$number1 = 0;	
    foreach($result as $row)
    { 
		
	    $playername = 	$row['s_player'];
		$ipm = 			$row['s_skill'];
	usleep($sleep_rcon);
	rcon("say  ^6 ^3    [^6 " . ++$number1 . " ^3] ^7 ".$playername."^1 Skill Rank: ^2 ".$ipm."", "");
	}
	++$x_number;
	AddToLogInfo("[".$datetime."] TOP: (" . $x_namex . ") (" . $i_id . ") reason: TOP"); 
 
echo '    '.$tfinishh = $tfinishh = (microtime(true) - $start);
++$x_stop_lp;
++$x_number;
++$x_return;

$result = null;
$db3 = NULL;
  
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
  
	}	
?>
 
