<?php	
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

try
  {
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////
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
	
$result = null;
$db2 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	
	
	
	echo ' banlist   '.$tfinishh = (microtime(true) - $start);
	
AddToLogbanlist("</table> 
 </td></table>"); 	
	
	
?>
 
