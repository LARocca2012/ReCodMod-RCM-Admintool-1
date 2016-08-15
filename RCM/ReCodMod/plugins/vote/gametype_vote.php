<?php	
if ($x_stop_lp == 0 ) {
if ((strpos($msgr, $gtvote) !== false) || ($msgr == $cmdyes_gt) || ($msgr == $cmdyes_gt.$cmdyes_gt))
{
  echo "\n[cmk-x] : [",$datetime, "] : ".$nickr." : ".$msgr;   	
	$xtee = date("dmYHis");
try
  {
    	   if (empty($adminlists))	  
$db1 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db1 = new PDO('sqlite:'.$adminlists);
    $result = $db1->query("SELECT * FROM x_cmd_kck");
 
    foreach($result as $row)
    {
$xbm = $row['z_time'];	 
$xbb = $row['z_counts'];	
  
 $razn = $xtee - $xbm;
 
 if($razn > $v_time_gtx) 
  {
  VoteCashresetGT("null");
$fh=fopen($log_cash."/temp_gametype_vote.txt" ,"w+");
fwrite($fh, $nickr.'%null');
fclose($fh);  
  
  }
}
$fdb = fopen($rules_log_vote_gt, "r");
$bufer = fread($fdb, filesize($rules_log_vote_gt));
fclose($fdb);    
$strtmp = explode("\n", $bufer); 
  
$v = $nickr;
foreach($strtmp as $word) {
if($v == $word){

require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
/////////////////////////////////////////////////////////////////////////////////RESTART
$x_namex = trim(clearnamex($i_name));
	  usleep($sleep_rcon);
	  rcon('say ^6 ^3YOU VOTED, It is useless to make repeat!', '');
	}
echo '  golosoval  '.$tfinishh = (microtime(true) - $start);
 echo "" .$v. "\n";	
 //exit;
 $x_stop_lp = 1;

}
}


$vote_cgu = 0;		
$x_number = 0;	
require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<$player_cnt; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
/////////////////////////////////////////////////////////////////////////////////RESTART
$x_namex = trim(clearnamex($i_name));
$x_nickx = trim(clearnamex($nickr));
$findgi3   = $ixz.'xgt ';
$posvok3 = strpos($msgr, $findgi3);
if (($posvok3 !== false) || ($msgr == $cmdyes_gt) || ($msgr == $cmdyes_gt.$cmdyes_gt)) { 
   $xtee = date("dmYHis");
   
   //echo 'ye!';
   
 if (($msgr == $cmdyes_gt) || ($msgr == $cmdyes_gt.$cmdyes_gt))
{
$fhr=file($log_cash."/temp_gametype_vote.txt");
foreach ($fhr as $flinx) {
$flmc=explode("%",$flinx);
$idgz = $flmc[1];
}

} 
else
 list($x_cmd, $idgz) = explode(' ', $msgr);    	
 
  if (strpos($msgr, $cmdyes_gt)!== false)
{
$fhr=file($log_cash."/temp_gametype_vote.txt");
foreach ($fhr as $flinx) {
$flmc=explode("%",$flinx);
$x_gametype = $flmc[1];
}

} 
else
 list($x_cmd, $x_gametype) = explode(' ', $msgr);   
 
if (empty($x_gametype))
$x_gametype = 'none';

$x_gmpt = gtt($x_gametype);
if($x_gmpt == '^2tdm' 
|| $x_gmpt == 'sd'
|| $x_gmpt == 'rsd'
|| $x_gmpt == 'tdm'
|| $x_gmpt == '^5sd'
|| $x_gmpt == '^1htf' 
|| $x_gmpt == 'dem' 
|| $x_gmpt == '^5sd' 
|| $x_gmpt == '^6gun' 
|| $x_gmpt == '^5rsd'
|| $x_gmpt == '^9old^5sd' 
|| $x_gmpt == 'bash' 
|| $x_gmpt == 'dm'){
     echo '====='.$x_gmpt;
	 $x_newgt = $x_gmpt;
}else { $x_newgt = '^1False Gametype!';   } 

 $inamex = afdasfawf($i_name);	
  $oo = $i_id . ' / ' . $inamex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_kk = explode(" / ", $oo); 	  
 
    $result = $db1->query("SELECT * FROM x_cmd_kck");
    foreach($result as $row)
    {
$xbm = $row['z_time'];	 
$xbb = $row['z_counts'];	
  $xbb = $xbb;	  
if($x_votg3 == 0)
	     {	
$votm = "";
$razn = $xtee - $xbm;
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
$plggx = round($player_cnt/2);

if(($razn < $v_time_gtx) && (strpos($msgr,$ixz.'xgt ') !== false)) 
  {  
  
  $xcnnn = 0;	
  $xtee = date("dmYHis");
         $db1->exec("UPDATE x_cmd_kck SET z_counts='{$xcnnn}',z_time='{$xtee}'");
  usleep($sleep_rcon);
  rcon('say ^6 '. $votm . ' "^2Vote reset. Dont use '.$ixz.'xgt command in vote time!', ''); 
VoteCashresetGT("".$nickr.""); 

$fh=fopen($log_cash."/temp_gametype_vote.txt" ,"w+");
$hg12 = '----.';
fwrite($fh, $hg12.'%'.$hg12);
fclose($fh); 

++$x_stop_lp;    //return;
  }
  
  if ($x_newgt == '^1False Gametype!')
  {
 usleep($sleep_rcon); 

 if (($msgr == $cmdyes_gt) || ($msgr == "++") || ($msgr == "+++")){
  rcon('say ^6 ^2Vote time is over, get starting vote with ^7'.$ixz.'xgt ^2command!', '');
 }else{
  rcon('say ^6 '. $votm . '"'.$x_newgt.'" - ^1Gametype^3 Dosnt Exist!!!', '');	
}
  }else{


if(($razn < $v_time_gtx) && ($xbb < $plggx)) 
  {
    $razn = $xtee - $xbm;
  $razn2 = ($v_time_gtx - $razn); 
   $db1->exec("UPDATE x_cmd_kck SET z_counts=z_counts +1");
  usleep($sleep_rcon);
  rcon('say ^6 '. $votm . ' "^2Vote: ^7"'.$cmdyes_gt.'" ^2for ^7 '.$idgz.'"^1Map^5  ^8Seconds Left:^3 '.$razn2.'', '');	 
VoteCashGT("".$nickr."");	
  }
      else if(($razn < $v_time_gtx) && ($xbb >= $plggx))   
  { 
    usleep($sleep_rcon);
    rcon('say ^6 ^3Vote completed!', '');
    usleep($sleep_rcon);
    rcon('say ^6 ^3Players changed gametype to '.$x_newgt, '');
	sleep(1);	
	usleep($sleep_rcon);
    rcon('set g_gametype "'.$x_newgt.'"');
	usleep($sleep_rcon);
	rcon('map_restart');
	AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ^3Players changed gametype to $x_newgt </font> ");     
	AddToLog("[".$datetime."] GAMETYPEVOTE: " . $i_ip . " (" . $x_namex . ") (" . $i_id . ") BY: (" . $x_namex . ")  R ");    
  $xcnnn = 0;
  $xtee = date("dmYHis");
  $db1->exec("UPDATE x_cmd_kck SET z_counts='{$xcnnn}',z_time='{$xtee}'");
VoteCashresetGT("".$nickr."");
	++$x_number; 	 
  }
      else if($razn > $v_time_gtx) 
  {
  
  
$fh=fopen($log_cash."/temp_gametype_vote.txt" ,"w+");
fwrite($fh, $nickr.'%'.$idgz);
fclose($fh);  
  
  $xcnnn = 0;	
  $xtee = date("dmYHis");
  $db1->exec("UPDATE x_cmd_kck SET z_counts='{$xcnnn}',z_time='{$xtee}'");
  usleep($sleep_rcon);
  rcon('say ^6 '. $votm . ' "^2Vote Activated!: ^7'.$ixz.'xgt '.$idgz.'"^1<- Vote with ^7"'.$cmdyes_gt.'"^2 or ^7'.$cmdnoo.' ^2for change to ^3'.$idgz.'', ''); 
VoteCashresetGT("".$nickr.""); //VoteCashreset("".$nickr."");
}
}
	
++$x_votg3;	
	}
} }
/////////////////////////////////////////////////////////////////////////////////KICK 
  
	
	} 
  
  $db1 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
  
  echo '    '.$tfinishh = (microtime(true) - $start);
++$x_stop_lp;    //return;
  }   ///end loop
//fclose($connect);
//fclose($fpX);

 


}
?>
 
