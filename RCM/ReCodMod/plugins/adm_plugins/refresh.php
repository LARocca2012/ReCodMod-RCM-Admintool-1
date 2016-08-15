<?php
if ($x_stop_lp == 0 ) {
 if (strpos($msgr, $ixz.'refresh top') !== false){ 
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
		 ++$knownplayr;
         ++$x_stop_lp;
		 
		 
if ($game_patch == 'cod1_1.1')
rcon('say ^6 ^7Refresh top.', '');	
   else
rcon('tell '.$i_id.' ^6 ^7Refresh top.', '');	

//                   TOP UPDATE	

	$num = 0;


//AddToLogTOPreset("----------------TOP 100 K/D ratio - kills limit .$limm. -----------------"."\n"."Place  Player  Kills   Deaths   Skill    K/D(ratio) ");
$serveripp = '-';
	AddToLogTOPreset("-<b>TOP 500 K/D ratio</b> - kills limit $limm - "."\n"."
<b>Server:</b>  $serveripp . $server_port - $game_patch
<br/> <b>Ratio</b> = Kills/Deaths    <b>Skill</b> = ((Kills-Deaths) x (Kills/Deaths) x 10)
<br/> <b>Use server commands:</b> ".$ixz."skill ".$ixz."stats ".$ixz."top ".$ixz."rank ".$ixz."toprank and main ".$ixz."cmd  - system <b> ".meessagee($z_ver)."
 </b>"."\n"."

<table><td> 
<table><tr style=\"background:#333; border:4px solid #CCC;\"></font></td> 
 <td><font color='silver'><center>#</center></font></td>  
<td><font color='silver'><center>City</center></font></td>     
 <td><font color='#cce5e5'><center>nickname</center></font></td>
 <td><font color='silver'><center>k/d ratio</center></font></td> 
<td><font color='silver'><center>skill</center></font></td>
<td><font color='teal'><center>kills</center></font></td>
<td><font color='teal'><center>deaths</center></font></td>
<td><font color='teal'><center>heads</center></font></td>
<td><font color='teal'><center>nades</center></font></td>    
<td><font color='teal'><center>suicide</center></font></td>
<td><font color='teal'><center>mellee</center></font></td>
<td class='ccccc'><font color='green'><center>Playing</center></font></td>
</tr>");
 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   $num = 0;


    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');

   $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=$limm ORDER BY (s_ratio+0) DESC LIMIT 500");
    foreach($result as $row)
    {		

++$num;

        $id       = $row['id'];
        $ipm      = $row['s_heads'];
        $pjhv     = $row['s_player'];
        $reason   = $row['s_ratio'];
        $k        = $row['s_lasttime'];
        $r        = $row['s_time'];
        $dth     = $row['s_deaths'];
        $kl      = $row['s_kills'];
        $skll     = $row['s_skill'];
        $sgeer    = $row['s_grenade'];
        $xccs     = $row['s_clear'];
        $csuicids = $row['s_suicids'];
        $cmelle   = $row['s_melle'];
        $geoo     = $row['s_geo'];
        
        $xccs = substr($xccs, 0, 22);
        list($vv9, $vv8) = explode(' ', $r);
        $lasttime = $k;
        list($vv9g, $vv8g, $vv7g) = explode('.', $vv9);
        list($vv9g1, $vv8g1, $vv7g1) = explode('.', $vv8);
        $time      = $vv9g . '-' . $vv8g . '-' . $vv7g . ' ' . $vv9g1 . ':' . $vv8g1;
        $datetime1 = date_create($lasttime);
        $datetime2 = date_create($time);
        $interval  = date_diff($datetime1, $datetime2);
        $playedp   = $interval->format('%y years %M months %D days %H hours %I minutes');
        $played    = cleart($playedp);

if ($kl <= 0 || $dth <= 0){  }else{	   
$skil_x = round((($kl-$dth)*($kl/$dth)*10));

if ($kl == 0)
$ratio_x = ($kl/1);		
	else	
$ratio_x = ($kl/$dth);  

$ratio_n = substr($ratio_x, 0,19);	
$db3->exec("UPDATE x_db_play_stats SET s_place='$num', s_skill='$skil_x', s_ratio='$ratio_n' WHERE s_player='$pjhv'");
//AddToLogTOP("[".$num."] [" . $y . "] [" . $kl . "] [" . $dth . "] [" . $slll . "] [" . $ratio_n . "] ");
$i++;
AddToLogTOP("



<tr style=\"background:" . ($i % 2 ? '#555' : '#777') . ";\">
<td width='80px'><font color='yellow' size='3'>&emsp;<b>" . $num . "&emsp;</b></font></td>
<td width='80px'><font color='pink' size='3'>&emsp;<b>" . $geoo . "&emsp;</b></font></td>
<td width='270px'>&emsp;<b><font color='white' size='3'>" . colorize($xccs) . "</font></b></td>
<td class='ccccc'><font color='#21d6c9' size='3'>&emsp;<b>" . substr($reason, 0, 6) . "</b>&emsp;</color></td>
<td class='ccccc'><font color='#21d6c9' size='3'>&emsp;<b> " . $skll . "</b>&emsp;</td>
<td class='ccccc'><font color='#9ff02b' size='3'>&emsp;<b>" . $kl . "</b>&emsp;</color></td>
<td class='ccccc'><font color='#9ff02b' size='3'>&emsp;<b>" . $dth . "</b>&emsp;</color></td>
<td width='110px'><font color='#9ff02b' size='3'>&emsp;<b>" . $ipm . '' . "</b>&emsp;</font></td>
<td width='110px'><font color='#9ff02b' size='3'>&emsp;<b>" . $sgeer . '' . "</b>&emsp;</font></td>
<td class='ccccc'><font color='#9ff02b' size='3'>&emsp;<b>" . $csuicids . "</b>&emsp;</color></td>
<td class='ccccc'><font color='#9ff02b' size='3'>&emsp;<b>" . $cmelle . "</b>&emsp;</color></td>
 <td class='ccccc'><font color='#d8e321' size='3'>&emsp;<b>" . $played . "</b>&emsp;</color></td>
</tr>");

	 
echo ' '.$num.' ';	
	}}
	
	echo ' top-up   '.$tfinishh = (microtime(true) - $start);
	
AddToLogTOP("</table> 
 </td></table>"); 		
	   
}	



 }
//$result = null;
//$db = NULL;
$db2 = NULL;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
}





 if (strpos($msgr, $ixz.'refresh banlist') !== false){ 
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
		 ++$knownplayr;
         ++$x_stop_lp;
		 if ($game_patch == 'cod1_1.1')
rcon('say ^6 ^7Refresh banlist.', '');	
   else
rcon('tell '.$i_id.' ^6 ^7Refresh banlist.', '');


	
// 

	$num = 0;	

$serveripp = '-';
	AddToLogbanlistreset("<b>LAST BANNED PLAYERS</b> "."\n"."

<table><td> 
<table><tr style=\"background:#333; border:4px solid #CCC;\"></font></td> 
 <td width='30px'><font color='silver'><center>#ID</center></font></td>     
 <td width='45px'><font color='silver'><center>City</center></font></td>    
 <td width='90px'><font color='silver'><center>IP</center></font></td>    
 <td><font color='silver'><center>Player</center></font></td>
 <td class='ccccc'><font color='purple'><center>Date</center></font></td>
 <td><font color='maroon'><center>Reason</center></font></td> 
 <td><font color='teal'><center>Game</center></font></td>
 <td><font color='silver'><center>By</center></font></td>
 </tr>");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $number = 0;	
 $numberx = 0;

usleep(5000);
  $result = $db2->query("SELECT * FROM `bans` ORDER BY (id+0) DESC LIMIT 100");
$ik = 0;
   foreach($result as $row)
    {
	

  ++$numberx;
 
	$id = $row['id'];
		$ipm = $row['ip'];
		$playername1 = $row['playername'];
		$reason  = 	$row['reason'];			
                $k  = 	$row['time'];	
                $kwho  =  $row['whooo'];		
		$pcj = 	$row['patch'];	
/*
////////////////////////////////////////////////////////////////////////////////////////////////////
$SxGeo = new SxGeo($cpath . 'ReCodMod/geoip_bases/SxGeoCity_cp1251/SxGeoCity.dat');
$country_name = $SxGeo->get($ipm);
////////////////////////////////////////////////////////////////////////////////////////////////////


if (is_file($cpath . 'ReCodMod/geoip_bases/SxGeoCity_cp1251/flags/'.$country_name['country']['iso'].'.png'))
					    {
		  $cityn = '<img class="flag" src="flags/'.$country_name['country']['iso'].'.png">';
		  }else
	      {
		  $cityn = '<img class="flag" src="flags/--.png">';
		  }    
*/


$gi = geoip_open($cpath."ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi,$ipm);
$kjgvjhk = ($record->country_name);

$ik++;
$colorvb=$ik%2>0? '#ccccc':'#ddd';

AddToLogbanlist("<tr style=\"background:".$colorvb.";\">
<td width='40px'><font color='red' size='2'>&emsp;#".$id."</font></td>
<td width='45px'><center>"
.
//$cityn
$kjgvjhk
."</center></td>
<td width='90px'><font color='OliveDrab' size='2'>&emsp;<b>".substr($ipm, 0, 8).''."**</b></font></td>
<td width='190px'><font color='black' size='2'>&emsp;<b>".substr($playername1, 0, 19)."</b></font></td>
<td class='ccccc'><font color='green' size='2'>&emsp;<b>".$k."</b>&emsp;</color></td>
<td class='ccccc'><font color='red' size='2'>&emsp;<b>".substr(tempban($reason), 0, 14)."</b>&emsp;</color></td>
<td class='ccccc'><font color='teal' size='2'>&emsp;<b>".$pcj."</b>&emsp;</color></td>
<td class='ccccc'><font color='black' size='2'>&emsp;<b>".$kwho."</b>&emsp;</color></td>
</tr>");
	
	}
	
	
	
	echo ' banlist   '.$tfinishh = (microtime(true) - $start);
	
AddToLogbanlist("</table> 
 </td></table>"); 

	
}
}


	
// 

	$num = 0;	

$serveripp = '-';
	AddToLogbanlistreset("<b>LAST BANNED PLAYERS</b> "."\n"."

<table><td> 
<table><tr style=\"background:#333; border:4px solid #CCC;\"></font></td> 
 <td width='30px'><font color='silver'><center>#ID</center></font></td>     
 <td width='45px'><font color='silver'><center>City</center></font></td>    
 <td width='90px'><font color='silver'><center>IP</center></font></td>    
 <td><font color='silver'><center>Player</center></font></td>
 <td class='ccccc'><font color='purple'><center>Date</center></font></td>
 <td><font color='maroon'><center>Reason</center></font></td> 
 <td><font color='teal'><center>Game</center></font></td>
 <td><font color='silver'><center>By</center></font></td>
 </tr>");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $number = 0;	
 $numberx = 0;

usleep(5000);
  $result = $db2->query("SELECT * FROM `bans` ORDER BY (id+0) DESC LIMIT 100");
$ik = 0;
   foreach($result as $row)
    {
	

  ++$numberx;
 
	$id = $row['id'];
		$ipm = $row['ip'];
		$playername1 = $row['playername'];
		$reason  = 	$row['reason'];			
                $k  = 	$row['time'];	
                $kwho  =  $row['whooo'];		
		$pcj = 	$row['patch'];	
/*
////////////////////////////////////////////////////////////////////////////////////////////////////
$SxGeo = new SxGeo($cpath . 'ReCodMod/geoip_bases/SxGeoCity_cp1251/SxGeoCity.dat');
$country_name = $SxGeo->get($ipm);
////////////////////////////////////////////////////////////////////////////////////////////////////


if (is_file($cpath . 'ReCodMod/geoip_bases/SxGeoCity_cp1251/flags/'.$country_name['country']['iso'].'.png'))
					    {
		  $cityn = '<img class="flag" src="flags/'.$country_name['country']['iso'].'.png">';
		  }else
	      {
		  $cityn = '<img class="flag" src="flags/--.png">';
		  }    
*/


$gi = geoip_open($cpath."ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi,$ipm);
$kjgvjhk = ($record->country_name);

$ik++;
$colorvb=$ik%2>0? '#ccccc':'#ddd';

AddToLogbanlist("<tr style=\"background:".$colorvb.";\">
<td width='40px'><font color='red' size='2'>&emsp;#".$id."</font></td>
<td width='45px'><center>"
.
//$cityn
$kjgvjhk
."</center></td>
<td width='90px'><font color='OliveDrab' size='2'>&emsp;<b>".substr($ipm, 0, 8).''."**</b></font></td>
<td width='190px'><font color='black' size='2'>&emsp;<b>".substr($playername1, 0, 19)."</b></font></td>
<td class='ccccc'><font color='green' size='2'>&emsp;<b>".$k."</b>&emsp;</color></td>
<td class='ccccc'><font color='red' size='2'>&emsp;<b>".substr(tempban($reason), 0, 14)."</b>&emsp;</color></td>
<td class='ccccc'><font color='teal' size='2'>&emsp;<b>".$pcj."</b>&emsp;</color></td>
<td class='ccccc'><font color='black' size='2'>&emsp;<b>".$kwho."</b>&emsp;</color></td>
</tr>");
	
	}
	
	
	
	echo ' banlist   '.$tfinishh = (microtime(true) - $start);
	
AddToLogbanlist("</table> 
 </td></table>"); 	
	

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