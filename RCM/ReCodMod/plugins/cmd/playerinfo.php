<?php
if ($x_stop_lp == 0 ) {

if ((strpos($msgr, $ixz.'geo') !== false) && ($x_number != 1))
    { 

if (strpos($msgr, $ixz.'geo ') !== false)
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
else 
 $x_idn = '';
 
if ($x_idn=='')
{

 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);

  $mmm = trim($x_nickx);
  $nnn = trim($x_namex);
   	  
	  if(strpos($mmm, $nnn) !== false)
	     {	
		 
		 
		 
////////////////////////////////////////////////////////////////////////////////////////////////////
 if((empty($i_ip)) 
 || (strpos($i_ip, '192.168') !== false)
 || (strpos($i_ip, '255.255') !== false)
 || (strpos($i_ip, 'localhost') !== false)
 || (strpos($i_ip, '127.0.0.1') !== false)
 )
$i_ip = '37.120.56.200';
$gi = geoip_open($cpath."ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi,$i_ip);
$xxxnw = ($record->country_name . ", ".$record->city."");
////////////////////////////////////////////////////////////////////////////////////////////////////	
	usleep($sleep_rcon);
	
	if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam')){	
	rcon('say ^6 "^2Iam from: ^6[^3'.$xxxnw.'^6]"', '');
}else{
	rcon('tell '. $i_id . ' ^6 "^2Iam from: ^6[^3'.$xxxnw.' ^7IP:^3'.$i_ip.'^6]"', ''); 
geoip_close($gi);	
}
	AddToLogInfo("[".$datetime."] GEO: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G");    
	++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;	
		 }
 
}
else
{ 
 
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 
if($kski[0] == $x_idn) 
	{

if((empty($i_ip)) 
 || (strpos($i_ip, '192.168') !== false)
 || (strpos($i_ip, '255.255') !== false)
 || (strpos($i_ip, 'localhost') !== false)
 || (strpos($i_ip, '127.0.0.1') !== false)
 )
$i_ip = '37.120.56.200';
$gi = geoip_open($cpath."ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi,$i_ip);
$xxxnw = ($record->country_name . ", ".$record->city."");
////////////////////////////////////////////////////////////////////////////////////////////////////	
	usleep($sleep_rcon);
	rcon('say  ^6  ^3'.$i_namex. ' ^6 "^2from:^3 '.$xxxnw.'"', '');
	AddToLogInfo("[".$datetime."] GEO: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");    
	++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;
	
	}

}

}



if ((strpos($msgr, $ixz.'guid') !== false) && ($x_number != 1))
    { 


if ($guids == 0){

if (strpos($msgr, $ixz.'guid ') !== false)
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
else 
 $x_idn = '';
 
if ($x_idn=='')
{

 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);

  $mmm = trim($x_nickx);
  $nnn = trim($x_namex);
   	  
	  if(strpos($mmm, $nnn) !== false)
	     {	
		 
	usleep($sleep_rcon);
	
	if ($guidn == '0')	
		rcon('say ^6  ^7'.$i_name.' ^2guid: ^3'.md5(md5(md5($chistx))).'', ''); 
    else
		rcon('tell '.$idnum.' ^6  ^7'.$i_name.' ^2guid: ^3'.$guidn.'', ''); 	

	AddToLogInfo("[".$datetime."] GEO: " . $i_ip . " (" . $x_namex . ") (" . $guidn . ") reason: G");    
	++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;	
		 }
 
}
else
{ 
 
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 
if($kski[0] == $x_idn) 
	{


////////////////////////////////////////////////////////////////////////////////////////////////////	
	if ($guidn == '0')	
		rcon('say ^6  ^7'.$i_name.' ^2guid: ^3'.md5(md5(md5($chistx))).'', ''); 
    else
		rcon('tell '.$idnum.' ^6  ^7'.$i_name.' ^2guid: ^3'.$guidn.'', '');
	
	AddToLogInfo("[".$datetime."] GUID: " . $i_ip . " (" . $x_namex . ") (" . $guidn . ") reason: G+id");    
	++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;
	
	}}}}
	
	
	
	
	
	
	
	
	
	
	
	
}

		 
?>
 
