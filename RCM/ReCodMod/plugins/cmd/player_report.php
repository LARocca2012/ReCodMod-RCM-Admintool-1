<?php

if ($x_stop_lp == 0 ) {
if ((strpos($msgr, $ixz.'ban') !== false) || (strpos($msgr, $ixz.'kick') !== false) || (strpos($msgr, $ixz.'tban') !== false))
{echo '-';}else{
if ((strpos($msgr, 'report') !== false) && ($x_number != 1) || (strpos($msgr, 'support') !== false))
    { 
if ((strpos($msgr, 'support ') !== false)
  ||(strpos($msgr, 'report ') !== false))
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
$iprepp = $i_ip;
   	  
if(empty($iprepp))
$iprepp = $guidn;

	  if(strpos($mmm, $nnn) !== false)
	     {		
	
if (strpos($msgr, $ixz) !== false)
{
if ((strpos($msgr, 'report') !== false) || (strpos($msgr, 'support') !== false))
{	
if ((strpos($msgr, " ") !== false) || (strpos($msgr, "  ") !== false))
{	
echo '--'.$server_ip;
echo '--'.$server_port;
echo '--'.$nickr;
echo '--'.$i_ip;
echo '--';

$servername = str_replace(" ", "_", $servername);
$servername = str_replace("#", "_", $servername);
$servername = str_replace("!", "_", $servername);
$servername = str_replace("?", "_", $servername);
$servername = str_replace("|", "_", $servername);
$servername = str_replace("/", "_", $servername);
$msgrn = str_replace(" ", "_", $msgr);
echo '--------->'.$msgrn;

if(empty($servername))
$servername = $server_ip;

if( $curl = curl_init() ) {
	 curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/cod_report_master/codsender.php?emailz='.$admin_email.'&mpass='.$gmailpass.'&sended='.$nickrn.';'.$msgrn. '&userip='.$iprepp.'&serverip='.clearnamex($servername).':'.$server_port);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "");
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
   }
     
usleep($sleep_rcon);
rcon('say ^1Message has been sent to Admin!', '');
}}
}
   
	$message = AddCheatHelp("[".$datetime."] CHEATER ALARM: " . $i_ip . " (" . $nickr . ") (" . $msgr . ")");    
	
++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;	
		 }
 
}
else
{ 
  $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);

  $mmm = trim($x_nickx);
  $nnn = trim($x_namex);

if(strpos($mmm, $nnn) !== false)
$iprepp = $i_ip;

if(empty($iprepp))
$iprepp = $guidn;

$i_namex = afdasfawf($i_name);	
if($x_idn) 
	{

if (strpos($msgr, $ixz) !== false)
{
if ((strpos($msgr, 'report') !== false) || (strpos($msgr, 'support') !== false))
{	
if ((strpos($msgr, ' ') !== false) || (strpos($msgr, '  ') !== false))
{
echo '--'.$server_ip;
echo '--'.$server_port;
echo '--'.$nickr;
echo '--'.$i_ip;
echo '--';

$msgrn = str_replace(" ", "_", $msgr);
$nickrn = str_replace(" ", "_", $nickr);
$servername = str_replace(" ", "_", $servername);
$servername = str_replace("#", "_", $servername);
$servername = str_replace("!", "_", $servername);
$servername = str_replace("?", "_", $servername);
$servername = str_replace("|", "_", $servername);
$servername = str_replace("/", "_", $servername);
echo '--------->'.$msgrn;

if(empty($servername))
$servername = $server_ip;

if( $curl = curl_init() ) {
     curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/cod_report_master/codsender.php?emailz='.$admin_email.'&mpass='.$gmailpass.'&sended='.$nickrn.';'.$msgrn. '&userip='.$iprepp.'&serverip='.clearnamex($servername).':'.$server_port);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "");
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
   }
     
usleep($sleep_rcon);
rcon('say ^1Message has been sent to Admin!', '');
}


}

}
 AddToLogInfo("[".$datetime."] REPORTED: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");    
	
	
	++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;
	
	}

}

}
else if ((strpos($msgr, 'chea') !== false) && ($x_number != 1) 
       ||(strpos($msgr, 'wallhack') !== false) && ($x_number != 1)
       ||(strpos($msgr, 'haker') !== false) && ($x_number != 1)
	   ||(strpos($msgr, 'hack') !== false) && ($x_number != 1)
	   ||(strpos($msgr, 'aimbot') !== false) && ($x_number != 1))
    {

usleep($sleep_rcon);
rcon('say ^6 ^1Do not panic, sent ^7'.$ixz.'report ^1with your problem message! ', '');
	
 AddToLogInfo("[".$datetime."] REPORTED: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");    
	
	
	++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;		
		
		
	}		
else if ((strpos($msgr, 'admin') !== false) && ($x_number != 1))
    {

usleep($sleep_rcon);
rcon('say ^6 ^1Sent ^7'.$ixz.'support ^1with your question & in message add your e-mail! ', '');
	
 AddToLogInfo("[".$datetime."] REPORTED: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");    
	
	
	++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;		
		
		
	}	
        }
}
		 
?>
 

