<?php	
 /* ------------------>  !QUASTIONS  <------------------- */	
if ($x_stop_lp == 0 ) {
	
if (('ty' == mb_strtolower(trim(clearnamex($msgr)))) && ($x_number != 1)){	
	  usleep($sleep_rcon);
		rcon('say ^6 ^3Thank you too!', '');
	++$x_number;
	
	}

    if (('thx' == mb_strtolower(trim(clearnamex($msgr)))) && ($x_number != 1))
    { 	
	  usleep($sleep_rcon);
	rcon('say ^6 ^3Thank you!', '');
	//$message = AddCheatHelp("[".$datetime."] CHEATER ALARM: " . $i_ip . " (" . $nickr . ") (" . $msgr . ")");    
	++$x_number;
	
	}

    if (($msgr == 'gg' || $msgr == 'GG') && ($x_number == 0))
    { 	

	  usleep($sleep_rcon);
$words=array(
'^3Good Game! ',
'^3Good Game ;) ',
'^3Good Game All :D ',
'^3Good game today! ',
'^3Good game ^^ ',
'^3GG Players :D ');
$text=array();
$slovam=1;
for($i=0;$i<$slovam;$i++){
$ran = rand(0,count($words)-1);
if(!in_array($words[$ran],$text)){
$text[]=$words[$ran];
}else{
$i--;
}
}
foreach($text as $wordl) {
   echo $wordl . "\n";
}
	  	  
rcon('say ^6 '.$wordl, '');
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> Good Game! </font> ");     
	++$x_number;	 		 
	}
	
 else if (($msgr == 'gj' || $msgr == 'GJ') && ($x_number == 0))
    { 	
  usleep($sleep_rcon);
$words=array(
'^3Good Job! ',
'^3GOOD JOB ;) ',
'^3YEAH GOOD JOB :D ',
'^3Good JOB today! ',
'^3Good JOB ^^ ',
'^3GJ Players :D ');
$text=array();
$slovam=1;
for($i=0;$i<$slovam;$i++){
$ran = rand(0,count($words)-1);
if(!in_array($words[$ran],$text)){
$text[]=$words[$ran];
}else{
$i--;
}
}
foreach($text as $wordl) {
   echo $wordl . "\n";
}
	  	  
rcon('say ^6 '.$wordl, '');
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> Good JOB! </font> ");     
	++$x_number;	 		 
	}	
 else if (($msgr == 'WP' || $msgr == 'wp') && ($x_number == 0))
    { 	
  usleep($sleep_rcon);
$words=array(
'^3Well Played! ',
'^3WELL PLAYED ;) ',
'^3WELL PLAYED ;/ ',
'^3WELL PLAYED :D ');
$text=array();
$slovam=1;
for($i=0;$i<$slovam;$i++){
$ran = rand(0,count($words)-1);
if(!in_array($words[$ran],$text)){
$text[]=$words[$ran];
}else{
$i--;
}
}
foreach($text as $wordl) {
   echo $wordl . "\n";
}
	  	  
rcon('say ^6 '.$wordl, '');
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> WP! </font> ");     
	++$x_number;	 		 
	}	
else if (($msgr == 'n1' || $msgr == 'N1') && ($x_number == 0))
    { 	
  usleep($sleep_rcon);
$words=array(
'^3Nice ONE! ',
'^3NUMBER ONE ;) ',
'^3THE BEST ;/ ',
'^3NUMBER ONE PLAYER :D ');
$text=array();
$slovam=1;
for($i=0;$i<$slovam;$i++){
$ran = rand(0,count($words)-1);
if(!in_array($words[$ran],$text)){
$text[]=$words[$ran];
}else{
$i--;
}
}
foreach($text as $wordl) {
   echo $wordl . "\n";
}
	  	  
rcon('say ^6 '.$wordl, '');
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> Good Game! </font> ");     
	++$x_number;	 		 
	}		
   else if ((strpos($msgr, 'sps') !== false) && ($x_number != 1))
    { 	

	  usleep($sleep_rcon);
$words=array(
'^3CIIACU6o! ;) ',
'^3CIIACU6o Urpok! ',
'^3CIIC! ',
'^3CIIACU6o!');
$text=array();
$slovam=1;
for($i=0;$i<$slovam;$i++){
$ran = rand(0,count($words)-1);
if(!in_array($words[$ran],$text)){
$text[]=$words[$ran];
}else{
$i--;
}
}	  	  
foreach($text as $wordl) {
   echo $wordl . "\n";
}
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> CIIACU6o! </font> ");  	  	  
rcon('say ^6 '.$wordl, '');
	//$message = AddCheatHelp("[".$datetime."] CHEATER ALARM: " . $i_ip . " (" . $nickr . ") (" . $msgr . ")");    
     ++$x_number;	 		 
	}
   else if ((strpos($msgr, 'bb ') !== false) && ($x_number == 0) 
   || (strpos($msgr, 'BB ') !== false) && ($x_number == 0) 
   || ($msgr == 'BB') && ($x_number == 0)
   || ($msgr == 'bb') && ($x_number == 0))
    { 	
	  usleep($sleep_rcon);
	  
	  
$words=array(
'^3Bye, bye, thanks for playing! ;D ',
'^3Bye, Bye! ;) ',
'^3Bye, Bye friend! ',
'^3Bye, bye and goodluck! ',
'^3Bye, bye and back again! ;) ',
'^3Bye, bye and visit our website ^2htp:^2/^2/'.$website.'/ ;) ',
'^3BB ;) ',
'^3Bye, bye gamer!');
$text=array();
$slovam=1;
for($i=0;$i<$slovam;$i++){
$ran = rand(0,count($words)-1);
if(!in_array($words[$ran],$text)){
$text[]=$words[$ran];
}else{
$i--;
}
}	  	  
foreach($text as $wordl) {
   echo $wordl . "\n";
}
	  	  
rcon('say ^6 '.$wordl, '');
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> Bye Bye! ;) </font> ");  	
	//$message = AddCheatHelp("[".$datetime."] CHEATER ALARM: " . $server_port . " (" . $nickr . ") (" . $msgr . ")");    
 ++$x_number;	 		 

	}	
   else if ((strpos($msgr, 'haker') !== false) && ($x_number != 1))
    { 	
	  usleep($sleep_rcon);
	  
	rcon('say ^6 '. $cmdz .'', '');
	$message = AddCheatHelp("[".$datetime."] CHEATER ALARM: " . $server_port . " (" . $nickr . ") (" . $msgr . ")");    
 ++$x_number;	 		 
	}		
   else if ((strpos($msgr, 'fps') !== false) && ($x_number != 1))
    { 	
	  usleep($sleep_rcon);
	  
	rcon('say ^6 '. $fps3 .'', '');
	$message = AddCheatHelp("[".$datetime."] CHEATER ALARM: " . $server_port . " (" . $nickr . ") (" . $msgr . ")"); 
	++$x_number;	 		 
	}		
   else if ((strpos('ping', $msgr) !== false) && ($x_number != 1))
    { 	
	  usleep($sleep_rcon);
	  
	rcon('say ^6 '. $fps3 .'', '');
	AddToLogInfo("[".$datetime."] QUESTION: " . $i_ip . " (" . $nickr . ") (" . $msgr . ") reason: Q");    
	++$x_number;	 		 
	}		 
   else if ((strpos('hi', $msgr) !== false) && ($x_number != 1))
    { 	
	  usleep($sleep_rcon);
	  
$words=array(
'^3Hi, ',
'^3Hey;) ',
'^3Welcome @ ^2'.$website.',^7 ',
'^3Hello, ',
'^3Hi there ^73;^1)  ',
'^3Hi friend, ',
'^3Welcome gamer, ');
$text=array();
$slovam=1;
for($i=0;$i<$slovam;$i++){
$ran = rand(0,count($words)-1);
if(!in_array($words[$ran],$text)){
$text[]=$words[$ran];
}else{
$i--;
}
}	  	  
foreach($text as $wordl) {
   echo $wordl . "\n";
}
  	  
rcon('say ^6 '.$wordl.' ^7'.$nickr.' ^3!', ''  );  
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> Hi player! </font> ");  		  
	//AddToLogInfo("[".$datetime."] QUESTION: " . $i_ip . " (" . $nickr . ") (" . $msgr . ") reason: Q");    
	++$x_number;	 		 
	}
   else if ((strpos('hi server', $msgr) !== false) && ($x_number != 1))
    { 	
	  usleep($sleep_rcon);	
	  
$words=array(
'^3Hi  ',
'^3Hey ;) ',
'^3Welcome  ' );
$text=array();
$slovam=1;
for($i=0;$i<$slovam;$i++){
$ran = rand(0,count($words)-1);
if(!in_array($words[$ran],$text)){
$text[]=$words[$ran];
}else{
$i--;
}}	  	  
foreach($text as $wordl) {
   echo $wordl . "\n";
} 	  
rcon('say ^6 '.$wordl.' ^7'.$nickr.' ^3!', ''  );  
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> Hi ".$nickr."! </font> ");  		  
	//AddToLogInfo("[".$datetime."] QUESTION: " . $i_ip . " (" . $nickr . ") (" . $msgr . ") reason: Q");    
	++$x_number;	 		 
	}	
   else if ((strpos('hello', $msgr) !== false) && ($x_number != 1))
    { 	

	  usleep($sleep_rcon);
$words=array(
'^3Hi player ',
'^3Hey ;) ',
'^3Welcome friend ',
'^3Hi all here ',
'^3Hello ',
'^3Hi friend ',
'^3Welcome gamer');
$text=array();
$slovam=1;
for($i=0;$i<$slovam;$i++){
$ran = rand(0,count($words)-1);
if(!in_array($words[$ran],$text)){
$text[]=$words[$ran];
}else{
$i--;
}
}	  	  
foreach($text as $wordl) {
   echo $wordl . "\n";
}
	  	  
rcon('say ^6 '.$wordl.' ^7'.$nickr.' ^3!', ''  ); 
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> Hi player! </font> ");   
	++$x_number;	 		 
	}
   else if ((strpos('qq', $msgr) !== false) && ($x_number != 1))
    { 	

	  usleep($sleep_rcon);
$words=array(
'^3Ky Ky :D ',
'^3Ku Ku :D ',
'^3Hi ',
'^3Hey! ;) ',
'^3Welcome friend, ',
'^3Hello, ',
'^3Hi friend, ',
'^3Welcome gamer,');
$text=array();
$slovam=1;
for($i=0;$i<$slovam;$i++){
$ran = rand(0,count($words)-1);
if(!in_array($words[$ran],$text)){
$text[]=$words[$ran];
}else{
$i--;
}
}	  	  
foreach($text as $wordl) {
   echo $wordl . "\n";
}
	  	  
rcon('say ^6 '.$wordl.' ^7'.$nickr.' ^3!', ''  ); 
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> Hi player! </font> ");   
	++$x_number;	 		 
	}	
   else if ((strpos('tits', $msgr) !== false) && ($x_number != 1))
    { 	

	  usleep($sleep_rcon);
$words=array(
'^3(  o  ) (  o  ) ',
'^3( o ) ( o ) ',
'^3( . ) ( . ) ',
'^3:Q  ( . ) ( . ) ',
'^3(.)(.) ',
'^3( * )( * ) ',
'^3( o )( o )');
$text=array();
$slovam=1;
for($i=0;$i<$slovam;$i++){
$ran = rand(0,count($words)-1);
if(!in_array($words[$ran],$text)){
$text[]=$words[$ran];
}else{
$i--;
}
}	  	  
foreach($text as $wordl) {
   echo $wordl . "\n";
}
	  	  
rcon('say ^6 '.$wordl, '');
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;

}	
	
	
   else if ((strpos('xxx', $msgr) !== false) && ($x_number != 1))
    { 	
	  usleep($sleep_rcon);	  	  
rcon('say ^6    ^7O');
usleep($sleep_rcon);	
rcon('say ^6    ^7|\\ __o');
usleep($sleep_rcon);	
rcon('say ^6    ^7_|_| \\');

///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
}
   else if ((strpos('xl', $msgr) !== false) && ($x_number != 1))
    { 	
	  usleep($sleep_rcon);	  	  
rcon('say ^6    ^7O');
      usleep($sleep_rcon);	
rcon('say ^6    ^7|\\ o');
      usleep($sleep_rcon);	
rcon('say ^6    ^7_|  /|_');

///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
}

   else if ((strpos($ixz.'shit', $msgr) !== false) && ($x_number != 1))
    { 	
	  usleep($sleep_rcon);	  	  
rcon("say ^6 \r\r ^7)");
      usleep($sleep_rcon);	
rcon("say ^6 \r ^7(shi)");
      usleep($sleep_rcon);	
rcon("say ^6 ^7(__T__)");

///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
}
	
   else if ((strpos('rabbit', $msgr) !== false) && ($x_number != 1))
    { 

	  usleep($sleep_rcon);	  	  
rcon('say ^6    ^7( \/ )');
//usleep($sleep_rcon);
//rcon('say ^6');
usleep($sleep_rcon);	
rcon('say ^6    ^7( . o)');
//usleep($sleep_rcon);	
//rcon('say ^6');
usleep($sleep_rcon);
rcon("say ^6    ^7c('')('')");

///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
 	
}	
	
	

   else if ((strpos('ch', $msgr) !== false) && ($x_number != 1))
    { 	

	  usleep($sleep_rcon);	  	  
rcon('say ^6 ^3    < >');
usleep($sleep_rcon);	
rcon('say ^6 ^2/^2\"');
usleep($sleep_rcon);	
rcon('say ^6 ^2/^7*^2\"');
usleep($sleep_rcon);	
rcon('say ^6^2/^7*^7*^7*^2\"');

///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
 }	
   else if ((strpos('dr', $msgr) !== false) && ($x_number != 1))
    { 	

	  usleep($sleep_rcon);	  	  
rcon('say ^6 ^7night 1 ^3(_._), ^7night 2 ^3(_o_), ^7night 3 ^3(_0_), ^7night 4 ^3(_((0))_)');
usleep($sleep_rcon);	
rcon('say ^6 ^7u dirty boy!');
///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
 }	

   else if ((strpos('vdk', $msgr) !== false) && ($x_number != 1))
    { 

	  usleep($sleep_rcon);	  	  
rcon('say ^6 ^7\_/ \_/ \_/ ^4VODKA CONNECTING PEOPLE        ');
///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
}
	
   else if ((strpos('mc', $msgr) !== false) && ($x_number != 1))
    { 	

	  usleep($sleep_rcon);	  	  
rcon('say ^6 ^3Merry Christmas ^1*^7<(^5:^7{^1D');
///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;		 
	}
   else if ((strpos('ny', $msgr) !== false) && ($x_number != 1))
    { 	

	  usleep($sleep_rcon);	  	  
rcon('say ^6 ^3Happy New Year ^1*^7<(^5:^7{^1O');
///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
 		 
	}	
   else if ((strpos('gl', $msgr) !== false) && ($x_number != 1))
    { 	

	  usleep($sleep_rcon);	  	  
rcon('say ^6  ^3Good Luck!');

///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
 }	
	
	
   else if ((strpos('bl', $msgr) !== false) && ($x_number != 1))
    { 

	  usleep($sleep_rcon);	  	  
rcon('say ^6  ^3Bad Luck!');

///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
 	}	
   else if ((strpos('stfu', $msgr) !== false) && ($x_number != 1))
    { 

	  usleep($sleep_rcon);	  	  
rcon('say ^6  ^3Shut ta f..k up!');

///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
 
	}
	
   else if ((strpos('afk', $msgr) !== false) && ($x_number != 1))
    { 

	  usleep($sleep_rcon);	  	  
rcon('say ^6  ^3Away from keyboard!');

///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
 }

   else if ((preg_match('/'.$mistake.'/si', $msgr, $xnon)) && ($x_number != 1))
    { 

     if ($nickr == $i_name)
		{	  
	  usleep($sleep_rcon);  	  
if ($game_patch == 'cod1_1.1'){	
rcon('- ^6  ^7'.$nickr.' ^3You use unregistered chat command, use ^1!cmd ^3for info!', ''  );  
}else{
//rcon('tell '.$i_id.' ^6  ^7'.$nickr.' ^3You use unregistered chat command, use ^1!cmd ^3for info!', ''  );  
rcon('say ^6  ^7'.$nickr.' ^3You use unregistered chat command, use console or ^1'.$ixz.'cmd ^3for info!', ''  );  
}	

AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> /Mistake command! </font> ");  		  
	//AddToLogInfo("[".$datetime."] QUESTION: " . $i_ip . " (" . $nickr . ") (" . $msgr . ") reason: Q");    
	++$x_number;
        }
	}	
	

   if ((strpos('#fp', $msgr) !== false) && ($x_number != 1))
    { 	
	
/*
$$__$$_$$$$$__$$_____$$______$$$$
$$__$$_$$_____$$_____$$_____$$__$$
$$$$$$_$$$$___$$_____$$_____$$__$$
$$__$$_$$_____$$_____$$_____$$__$$
$$__$$_$$$$$__$$$$$$_$$$$$$__$$$$	  
	  
*/	  
	  
	  
usleep($sleep_rcon);	
rcon("say ^6    ^3##^7__^3##^7_^3#####^7__^3##^7_____^3##^7______^3####");
usleep($sleep_rcon);	
rcon("say ^6    ^3##^7__^3##^7_^3##^7_____^3##^7_____^3##^7_____^3##^7__^3##");
usleep($sleep_rcon);	
rcon("say ^6    ^3######^7_^3####^7___^3##^7_____^3##^7_____^3##^7__^3##");
usleep($sleep_rcon);	
rcon("say ^6    ^3##^7__^3##^7_^3##^7_____^3##^7_____^3##^7_____^3##^7__^3##");
usleep($sleep_rcon);	
rcon("say ^6    ^3##^7__^3##^7_^3#####^7__^3######^7_^3######^7__^3####");

///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
 

}
	
  if ((strpos($msgr,'govn') !== false) && ($x_number != 1) || (strpos($msgr,'gavn') !== false) && ($x_number != 1))
    { 	
	  
$words=array(
"^3I'OBHO DOJIEKO OT TE69 HE YIIIJIO ", 
"^3DABAU DOCBUDAHU9!",
"^3TAK, TYT TE69 HUKTO HE DEP};{UT",
"^3HPABUTC9 - HE HPABUTC9, CIIU MO9 KPACABUII,A",
"^3I'ABHO Y TE69 BO PTY ",
"^3IIEHUC TBOU B I'ABHE",
"^3I'ABHO BO PTY TbI HOCUIII",
"^3TBO9 PO};{A I'ABHO ", 
"^3POT 3AKPOU U UDU I'ABHO ", 
"^3I'ABHO Y TE69 BO PTY ",
"^3TbI CAM I'OBHO  " );
$text=array();
$slovam=1;
for($i=0;$i<$slovam;$i++){
$ran = rand(0,count($words)-1);
if(!in_array($words[$ran],$text)){
$text[]=$words[$ran];
}else{
$i--;
}}	  	  
foreach($text as $wordl) {
   echo $wordl . "\n";
} 

  usleep($sleep_rcon);	  
rcon('say ^6 '.$wordl.' ^7'.$nickr.' ^3!', ''  );  	  
	AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	  


///AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$wordl ." </font> ");  	    
	++$x_number;
 
	}
		
  

    if ((strpos($msgr, $ixz.'cmd') !== false) && ($x_number != 1))
    {		
try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
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
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ip) && (($a_grp == 0) || ($a_grp == 111))); 
else
 $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ip == $i_ip) && ($kski[0] == $idnum) && (($a_grp == 0) || ($a_grp == 111)));
    if($jjj)
	      { 
		
if ($x_stop_lp == 0 ) {		
	usleep($sleep_rcon*2);
    if (($game_patch == 'cod2') || ($game_patch == 'cod4') || ($game_patch == 'cod5'))
         rcon('tell '.$kski[0].' ^6 '. $cmdadmin .'', '');
 if ($game_patch == 'cod1_1.1')
rcon('say '. $cmdadmin .'', '');
 if (($game_patch == 'cod1_1.4') || ($game_patch == 'cod1_1.5')) 
rcon('tell '.$idnum.' ^6 '. $cmdadmin .'', '');

          usleep($sleep_rcon*2);
	rcon('say ^6 '. $cmdzv .'', '');
	usleep($sleep_rcon);
	rcon('say ^6 '. $cmdzv2 .'', '');
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$cmdzv ." </font> ");  	    	
	AddToLogInfo("[".$datetime."] cmd: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") ");    
	++$x_number;
//fclose($connect);	
echo '    '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;		
}

	}
	
	
	
	
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ip) && ($a_grp == 'md')); 
else
 $jjj = (($adm_ip == $i_ip) && ($kski[0] == $idnum) &&  ($a_grp == 'md'));
    if($jjj)
	      { 
		
if ($x_stop_lp == 0 ) {		
	usleep($sleep_rcon*2);
    if (($game_patch == 'cod2') || ($game_patch == 'cod4') || ($game_patch == 'cod5'))
         rcon('tell '.$kski[0].' ^6 '. $cmdmoderators .'', '');
 if ($game_patch == 'cod1_1.1')
rcon('say '. $cmdmoderators .'', '');
 if (($game_patch == 'cod1_1.4') || ($game_patch == 'cod1_1.5')) 
rcon('tell '.$idnum.' ^6 '. $cmdmoderators .'', '');

          usleep($sleep_rcon*2);
	rcon('say ^6 '. $cmdzv .'', '');
	usleep($sleep_rcon);
	rcon('say ^6 '. $cmdzv2 .'', '');
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$cmdzv ." </font> ");  	    	
	AddToLogInfo("[".$datetime."] cmd: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") ");    
	++$x_number;
//fclose($connect);	
echo '    '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;		
}

	}	
	
	
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ip) && ($a_grp == 2)); 
else
 $jjj = (($adm_ip == $i_ip) && ($kski[0] == $idnum) &&  ($a_grp == 2));
    if($jjj)
	      { 
		
if ($x_stop_lp == 0 ) {		
	usleep($sleep_rcon*2);
    if (($game_patch == 'cod2') || ($game_patch == 'cod4') || ($game_patch == 'cod5'))
         rcon('tell '.$kski[0].' ^6 '. $cmdvipsz .'', '');
 if ($game_patch == 'cod1_1.1')
rcon('say '. $cmdvipsz .'', '');
 if (($game_patch == 'cod1_1.4') || ($game_patch == 'cod1_1.5')) 
rcon('tell '.$idnum.' ^6 '. $cmdvipsz .'', '');

          usleep($sleep_rcon*2);
	rcon('say ^6 '. $cmdzv .'', '');
	usleep($sleep_rcon);
	rcon('say ^6 '. $cmdzv2 .'', '');
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$cmdzv ." </font> ");  	    	
	AddToLogInfo("[".$datetime."] cmd: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") ");    
	++$x_number;
//fclose($connect);	
echo '    '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;		
}

	}		
	
	
}




$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	
	
if ($x_stop_lp == 0 ) {		
	usleep($sleep_rcon);
	rcon('say ^6 '. $cmdzv .'', '');
	usleep($sleep_rcon);
	rcon('say ^6 '. $cmdzv2 .'', '');
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$cmdzv ." </font> ");  	    	
	AddToLogInfo("[".$datetime."] cmd: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") ");    
	++$x_number;
//fclose($connect);	
echo '    '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;		
}
	
	
	
	
	
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
   /* ------------------>  !cmd fun   <------------------- */	
   else if ((strpos($msgr, $ixz.'fun') !== false) && ($x_number != 1))
    { 

	usleep($sleep_rcon);
	rcon('say ^6 '. $cmdfun .'', '');
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$cmdfun ." </font> ");  	    	
	AddToLogInfo("[".$datetime."] cmd: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") ");    
	++$x_number;
//fclose($connect);	
echo '    '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;		
	}	
   /* ------------------>   !help  <------------------- */

if ((strpos($msgr, $ixz.'time') !== false) && ($x_number != 1))
    { 

	  if(strpos($x_namex, $x_nickx) !== false)
	     {
	//include($cpath."ReCodMod/geoip_bases/MaxMD/timezone/timezone.php");	
$gi = geoip_open($cpath."ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi,$i_ip);
$xxxnw = ($record->country_name);
		
	 //Calculate the timezone and local time
    try
    {
        //Create timezone
        $user_timezone = new DateTimeZone(get_time_zone($record->country_code, ($record->region!='') ? $record->region : 0));
 
        //Create local time
        $user_localtime = new DateTime("now", $user_timezone);
        $user_timezone_offset = $user_localtime->getOffset();        
    }
    //Timezone and/or local time detection failed
    catch(Exception $e)
    {
        $user_timezone_offset = 7200;
        $user_localtime = new DateTime("now");
    }
 
    echo 'User local time: ' . $user_localtime->format('H:i:s');
    //echo 'Timezone GMT offset: ' . $user_timezone_offset . '<br/>';
	$serverdate = date('M-d H:i:s');
	usleep($sleep_rcon*2);
	rcon('say ^6 ^7'.$chistx.' ^3Geo: ^7'.$xxxnw.' ^3Time:^7 '.$user_localtime->format('H:i:s').' ^3Sunset: ^7' . date_sunset(time(), SUNFUNCS_RET_STRING, $record->latitude, $record->longitude, ini_get("date.sunset_zenith"), ($user_timezone_offset/3600)) . ' ^3Sunrise: ^7' . date_sunrise(time(), SUNFUNCS_RET_STRING, $record->latitude, $record->longitude, ini_get("date.sunrise_zenith"), ($user_timezone_offset/3600)) . ' ^3Server: ^7'.$serverdate, '');


	AddToLogInfo("[".$datetime."] Time: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ")");    
	
	++$x_number;
//f//close($connect);	
echo '  -time-  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;	
		 }	}
		 
   /* ------------------>  !admin  <------------------- */
    if ((strpos($msgr, $ixz.'info') !== false) && ($x_number != 1))
    { 	

	usleep($sleep_rcon);
	//rcon('say ^6 ^7Watching us ^3RCM '.$z_ver.' , ^5the best admin tool for cracked servers [recod.ru] ^7scripted by: ^1LA', '');

rcon('say ^6^7__^1***^7_________^1***	', '');
usleep($sleep_rcon);
rcon('say ^6^7__^1***^7________^1*****  ^3LAROCCA', ''); 
usleep($sleep_rcon);
rcon('say ^6^7__^1***^7_______^1***^7__^1***  ^3(c) http:/^3/recod.ru', '');
usleep($sleep_rcon);
rcon('say ^6^7__^1*******^7__^1***********   ^3Admintool '.$z_ver.'', '');
usleep($sleep_rcon);
rcon('say ^6^7__^1*******^7_^1***^7_______^1***       ^3skype: larocca2012', '');

/*//// Support COD1(1.1, 1.2, 1.4, 1.5) and COD:UO(1.41, 1.51) CRACKED SERVERS*/	
	
	
	AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='black'> Watching us </font><font color='orange'>RCM ".$z_ver." </font> <font color='black'>scripted by:</font> <font color='orange'>LA </font> ");  	    	
	++$x_number;
////fclose($fpX);
//fclose($connect);	
echo '    '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;		
	}
	/* ------------------>  !admin  <------------------- */
 //else if(preg_match('/!ip/i', $msgr, $x2205) && ($x_number != 1))
   if ((strpos($msgr, $ixz.'ip') !== false) && ($x_number != 1))
    { 
	  if(strpos($x_namex, $x_nickx) !== false)
	     {	
	 
	usleep($sleep_rcon);
	rcon('tell '. $i_id . ' "^2My IP:^3 '.$i_ip.'"', '');
	AddToLogInfo("[".$datetime."] IP: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: I");    
	++$x_number;
//fclose($fpX);
//fclose($connect);	
echo '    '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;	
		 }			 
	}

     if ((strpos($msgr, 'chea') !== false) && ($x_number != 1) 
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
	
	
	
	
	else if ((strpos($msgr, $ixz.'nextmap') !== false) && ($x_number != 1))
    {
		
		//$yomapratation = 0;

usleep($sleep_rcon*2);
require $cpath.'ReCodMod/functions/getinfo/sv_mapRotation.php';
fclose($connx);
/*
$pos = strripos($mapslisst, $mmapname);

if ($pos === false) {
    echo "К сожалению, ($mmapname) не найдена в ($mapslisst)";
} else {
    echo "Поздравляем!\n";
    echo "($mmapname) найдено в ($mapslisst) в позиции ($pos)";
}
*/
$mapslisst = str_replace($mmapname, "^2".$mmapname."^7", $mapslisst);

usleep($sleep_rcon);
rcon('say ^6 ^1Map ^7'.$mapslisst.'', '');


 AddToLogInfo("[".$datetime."] nextmap: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ")");    
	
	
	++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;		
		
		
	}

	
}	
	?>
 

