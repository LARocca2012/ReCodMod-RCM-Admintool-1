<?php 
 
if(empty($game_patch)){
	
function ghbfff($string) {
$string = str_replace(array("/^7"), '', $string );
$string = str_replace(array("^7"), '', $string );
return $string . "";

$game_patch = 'cod5';

}


	
if(file_exists($cpath.'ReCodMod/x_logs/g_gamename.log')){											
$fyf = file($cpath.'ReCodMod/x_logs/g_gamename.log');
foreach ($fyf as $ryhfd) { $mpgamenname = ghbfff($ryhfd); 

if(file_exists($cpath.'ReCodMod/x_logs/g_shortversion.log')){											
$fyfx = file($cpath.'ReCodMod/x_logs/g_shortversion.log');
foreach ($fyfx as $ryhfdv) { $mpshortver = ghbfff($ryhfdv); 

     if (strpos($mpgamenname, '5') !== false){
	 $game_patch = 'cod5';}
else if (strpos($mpgamenname, '4') !== false){
     $game_patch = 'cod4'; }
else if (strpos($mpgamenname, '2') !== false){
     $game_patch = 'cod2'; }
else if (strpos($mpgamenname, 'Call of Duty') !== false){
     $game_patch = 'cod1_'.$mpshortver.'';}
else{
$game_patch = 'cod1_1.41';}}}}}}

if(empty($game_patch))
	$game_patch = 'cod4';

 
$r_admi = false;
$ipt = 0;
$rules_time_announce = array(0,5);	// everytime minute digits equal one of these, shows current time to all players;  // array() to disable


// settings
$filename = "error.log";
$log_folder = $cpath."ReCodMod/x_logs";
$log_cash = $cpath."ReCodMod/x_cache";

$rules_log_file1 = $log_folder.'/rcon-rules_commands.log'; 
$log_chat = $log_folder.'/chat.log'; 
$log_chatcl = $log_folder.'/chat.html'; 
$cnt_pl = $log_folder.'/players_time_stats.log'; 
$rules_log_file = $log_folder.'/kick_ban.log';     // path to a file containing kicked players; must be writeable
$rules_log_vote = $log_cash.'/z-vote.log';
$stime_file = $log_folder.'/stimefx_log.log';
$glog_file = $log_folder.'/g_log.log';
$ggname_file = $log_folder.'/g_gamename.log';
$gshortver_file = $log_folder.'/g_shortversion.log';
$servv_file = $log_folder.'/g_servername.log';

$rules_log_vote_gt = $log_cash.'/z-vote-gametype.log';
$rules_log_vote_map = $log_cash.'/z-vote-map.log';
$info_log_file = $log_folder.'/info_players.log';
$info_log_fakers = $log_folder.'/fakekillers.log';
$info_log_reggg = $log_folder.'/unregistered.log';
$info_log_regGUID = $log_folder.'/registered_preguids.log';
$info_log_top = $log_folder.'/top_log.html';
$info_log_bnlst = $log_folder.'/banlist_log.html';
$cheater_help = $log_folder.'/cheataers_help.log'; 
//////////////////////////////////////////////////////////////
$rules_warned_cache_file = $cpath.'ReCodMod/x_cache/warned-cache';     // path to a file containing warned players; must be writeable
$rules_vote_cache_file = '/voter'; 
$rules_iplog_interval = 0;      // this is a number of minutes the log is updated in ; 0 = disable
$rules_iplog_file = 'rcon-iplog.log';     // path to a file containing log of ip addresses; must be writeable

$rules_kick_bad_named = true;	// kick unknown soldiers, unnamed players and those who have only spaces in nick [those mentioned below]
$rules_kick_ip_super_range = true;
$rules_kick_ping = true;		// kick for pings
$rules_max_ping = 700;			// if ping is larger, player gets warned (annoying)
$rules_max_ping_kick = 900;		// if player has been warned in previous scan, and has ping larger than this, he gets kicked

$rules_time_announce = array(0,30);	// everytime minute digits equal one of these, shows current time to all players;  // array() to disable

$rules_empty_set_gametype = 'dm';	// if set, when player count is low, this gametype is set on the server (and map is restarted immediately)  // leave empty to disable
$rules_empty_set_gametype_players_min = 0;  // the server is considered empty with minimum of n present players
$rules_empty_set_gametype_players_max = 1;  // the server is considered empty with maximum of n present players

$ban_name = "^6 ^3You Banned by Admins ^2".$website."";
$ban_name_all = "^6 ^1Banned ^7|| ^3RCM ".$z_ver." bantool";
$ban_ip = "^6 ^3You Banned by Admins ^2".$website."";
$ban_ip_all = "^6 ^1Banned ^7|| ^3RCM ".$z_ver." bantool";
$c_unban = "^6 ^2UnBanned ^7|| ^3RCM ".$z_ver." bantool";


// use %s at the position you want the values to appear at
$rules_bad_name_msg = "^6 ^6||| ^3Rename - you're breaking the rules";

$rules_bad_name_msg_chat = "^6 ^6||| ^Error - breaking the rules ^7|| bantool(".$website.")";
$rules_bad_name_msg_chatgg = "^6 ^6Breaking rules ^1[Censored] ^7|| ^3bantool(".$website.")";

$rules_empty_set_gametype_msg = "^5Not enough players on the server for this gametype. Switching to %s."; // gametype is uppercased here
$rules_ping_warn_msg = "^6 ^3Your ping is %s - so high!";
$rules_ping_warn_vip_msg = "^6 ^3Ping = %s";   //shorter - not so much annoying
$rules_msgtoall_kicked_enable = true;   // notify others, that someone has been kicked
$rules_msgtoall_kicked_bad_name = "Player %s has bug name.";
$rules_msgtoall_kicked_ping = "^3Player %s was kicked for high ping.";
$i_zzzzzzz = "^4Virus";
$chat_protect = '1';
$corrupt_replacement = '=======ERROR=======';
$welcome_x = "^6 ^3Welcome^7";   
$welcome_x2 = "^6 ^3Welcome Back^7";	
////////////////////////////////////////////////////////////////
 
 
function tempban($string) {
$string = preg_replace('/^[0-9]+$/i', 'Tempban', $string);
return $string . "";
}

function dddzz($string) {
$string = str_replace(array(""), '', $string );
return $string . "";
}

function deltimedot($string) {
$string = str_replace(array("."), '', $string );
$string = str_replace(array(":"), '', $string );
$string = str_replace(array(" "), '', $string );
return $string . "";
}

function sevenofff($string) {
$string = str_replace(array("/^7"), '', $string );
$string = str_replace(array("^7"), '', $string );
$string = str_replace(array("##&###"), '', $string );
$string = str_replace(array(".log/"), '.log', $string );
return $string . "";
}

function meessagee($string) {
$string = str_replace("^^00", "", $string);
$string = str_replace("^^11", "", $string);
$string = str_replace("^^22", "", $string);
$string = str_replace("^^33", "", $string);
$string = str_replace("^^44", "", $string);
$string = str_replace("^^55", "", $string);
$string = str_replace("^^66", "", $string);
$string = str_replace("^^77", "", $string);
$string = str_replace("^^88", "", $string);
$string = str_replace("^^99", "", $string);
$string = str_replace("^0", "", $string);
$string = str_replace("^1", "", $string);
$string = str_replace("^2", "", $string);
$string = str_replace("^3", "", $string);
$string = str_replace("^4", "", $string);
$string = str_replace("^5", "", $string);
$string = str_replace("^6", "", $string);
$string = str_replace("^7", "", $string);
$string = str_replace("^8", "", $string);
$string = str_replace("^9", "", $string);
return $string;
}
 
function afdasfawf($string) {
$string = str_replace("^^00", "", $string);
$string = str_replace("^^11", "", $string);
$string = str_replace("^^22", "", $string);
$string = str_replace("^^33", "", $string);
$string = str_replace("^^44", "", $string);
$string = str_replace("^^55", "", $string);
$string = str_replace("^^66", "", $string);
$string = str_replace("^^77", "", $string);
$string = str_replace("^^88", "", $string);
$string = str_replace("^^99", "", $string);
$string = str_replace("^0", "", $string);
$string = str_replace("^1", "", $string);
$string = str_replace("^2", "", $string);
$string = str_replace("^3", "", $string);
$string = str_replace("^4", "", $string);
$string = str_replace("^5", "", $string);
$string = str_replace("^6", "", $string);
$string = str_replace("^7", "", $string);
$string = str_replace("^8", "", $string);
$string = str_replace("^9", "", $string);
$string = str_replace("^^", "", $string);
$string = str_replace("^", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("`", "", $string);
$string = str_replace("!", "", $string);
$string = str_replace("/", " ", $string);
$string = str_replace("*", "* ", $string);
$string = str_replace("|", "l", $string);
$string = str_replace(">>>>", ">>>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>", ">> ", $string);
$string = str_replace("]]]]", "]]]] ", $string);
$string = str_replace("]]]", "]]] ", $string);
$string = str_replace("]]", "]] ", $string);
$string = str_replace("]", "] ", $string);
$string = str_replace("))))", ")))) ", $string);
$string = str_replace(")))", "))) ", $string);
$string = str_replace("))", ")) ", $string);
$string = str_replace(")", ") ", $string);
//$string = str_replace("$", "S", $string);
return $string;
}

function aaxa($string) {
$string = str_replace("^^00", "", $string);
$string = str_replace("^^11", "", $string);
$string = str_replace("^^22", "", $string);
$string = str_replace("^^33", "", $string);
$string = str_replace("^^44", "", $string);
$string = str_replace("^^55", "", $string);
$string = str_replace("^^66", "", $string);
$string = str_replace("^^77", "", $string);
$string = str_replace("^^88", "", $string);
$string = str_replace("^^99", "", $string);
$string = str_replace("^0", "", $string);
$string = str_replace("^1", "", $string);
$string = str_replace("^2", "", $string);
$string = str_replace("^3", "", $string);
$string = str_replace("^4", "", $string);
$string = str_replace("^5", "", $string);
$string = str_replace("^6", "", $string);
$string = str_replace("^7", "", $string);
$string = str_replace("^8", "", $string);
$string = str_replace("^9", "", $string);
$string = str_replace("^^", "", $string);
$string = str_replace("^", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("`", "", $string);
$string = str_replace("/", " ", $string);
$string = str_replace("*", "* ", $string);
$string = str_replace("|", "l", $string);
$string = str_replace(">>>>", ">>>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>", ">> ", $string);
$string = str_replace("]]]]", "]]]] ", $string);
$string = str_replace("]]]", "]]] ", $string);
$string = str_replace("]]", "]] ", $string);
$string = str_replace("]", "] ", $string);
$string = str_replace("))))", ")))) ", $string);
$string = str_replace(")))", "))) ", $string);
$string = str_replace("))", ")) ", $string);
$string = str_replace(")", ") ", $string);
//$string = str_replace("$", "S", $string);
$string = str_replace("!", "", $string);
return $string;
}

function antbg($string) {
$string = str_replace("'", "", $string);
$string = str_replace("`", "", $string);
//$string = str_replace("*", "", $string);
//$string = str_replace("|", "", $string);
return $string;
}

function matmat($strg) {
$strg = str_replace(array('_', '-', ',', '.', '—'), ' ', trim($strg));
$strg = preg_replace('/\s{2,}/', '', $strg);
$strg = preg_replace('/ {2,}/', '', $strg);
$strg = preg_replace('/\s+/', '', $strg);
$strg = preg_replace('/\s/', '', $strg);
$strg = str_replace(array("\r\n", "\n", "\r"), "", $strg);
$strg = str_replace('^', '', $strg);
return trim($strg);
}

function clearnamex($string) {
$string = str_replace("^^00", "", $string);
$string = str_replace("^^11", "", $string);
$string = str_replace("^^22", "", $string);
$string = str_replace("^^33", "", $string);
$string = str_replace("^^44", "", $string);
$string = str_replace("^^55", "", $string);
$string = str_replace("^^66", "", $string);
$string = str_replace("^^77", "", $string);
$string = str_replace("^^88", "", $string);
$string = str_replace("^^99", "", $string);
$string = str_replace("^0", "", $string);
$string = str_replace("^1", "", $string);
$string = str_replace("^2", "", $string);
$string = str_replace("^3", "", $string);
$string = str_replace("^4", "", $string);
$string = str_replace("^5", "", $string);
$string = str_replace("^6", "", $string);
$string = str_replace("^7", "", $string);
$string = str_replace("^8", "", $string);
$string = str_replace("^9", "", $string);
$string = str_replace("^^", "", $string);
$string = str_replace("^", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("|", "l", $string);
$string = str_replace("/", " ", $string);
$string = str_replace("!", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("`", "", $string);
$string = str_replace("*", "* ", $string);
$string = str_replace(">>>>", ">>>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>", ">> ", $string);
$string = str_replace("]]]]", "]]]] ", $string);
$string = str_replace("]]]", "]]] ", $string);
$string = str_replace("]]", "]] ", $string);
$string = str_replace("]", "] ", $string);
$string = str_replace("))))", ")))) ", $string);
$string = str_replace(")))", "))) ", $string);
$string = str_replace("))", ")) ", $string);
$string = str_replace(")", ") ", $string);
//$string = str_replace("$", "S", $string);
return $string;
}

function hjgdtr($string) {
$string = str_replace("'", "", $string);
$string = str_replace("/", " ", $string);
$string = str_replace("!", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("`", "", $string);
//$string = str_replace("$", "S", $string);
return $string;
}

function clearnamex2($string) {
$string = str_replace("^^00", "", $string);
$string = str_replace("^^11", "", $string);
$string = str_replace("^^22", "", $string);
$string = str_replace("^^33", "", $string);
$string = str_replace("^^44", "", $string);
$string = str_replace("^^55", "", $string);
$string = str_replace("^^66", "", $string);
$string = str_replace("^^77", "", $string);
$string = str_replace("^^88", "", $string);
$string = str_replace("^^99", "", $string);
$string = str_replace("^0", "", $string);
$string = str_replace("^1", "", $string);
$string = str_replace("^2", "", $string);
$string = str_replace("^3", "", $string);
$string = str_replace("^4", "", $string);
$string = str_replace("^5", "", $string);
$string = str_replace("^6", "", $string);
$string = str_replace("^7", "", $string);
$string = str_replace("^8", "", $string);
$string = str_replace("^9", "", $string);
$string = str_replace("^^", "", $string);
$string = str_replace("^", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("|", "l", $string);
$string = str_replace("/", " ", $string);
$string = str_replace("!", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("`", "", $string);
$string = str_replace("*", "* ", $string);
$string = str_replace(">>>>", ">>>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>", ">> ", $string);
$string = str_replace("]]]]", "]]]] ", $string);
$string = str_replace("]]]", "]]] ", $string);
$string = str_replace("]]", "]] ", $string);
$string = str_replace("]", "] ", $string);
$string = str_replace("))))", ")))) ", $string);
$string = str_replace(")))", "))) ", $string);
$string = str_replace("))", ")) ", $string);
$string = str_replace(")", ") ", $string);
//$string = str_replace("$", "S", $string);
return $string;
}


function delwelcome($string) {
$string = str_replace(array("J;"), '^3Welcome ^7', $string );
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', ' % ', $string);
$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}

if ($game_patch == 'cod1_1.1'){ 
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
$string = str_replace(array(" "), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(" "), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI 
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI
//$string = str_replace(array(""), ' % ', $string ); //ESLI V ANSI
$string = str_replace(array(" say: "), '', $string ); 
$string = str_replace(array("say: "), '', $string );
$string = str_replace(array("sayteam: "), '', $string );
$string = str_replace(array("J;"), '>>>Welcome ', $string ); //Join
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', ' % ', $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}
if ($game_mod == 'codam'){ 
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
$string = str_replace(array(" "), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(" "), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI 
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI
//$string = str_replace(array(""), ' % ', $string ); //ESLI V ANSI
$string = str_replace(array(" say: "), '', $string ); 
$string = str_replace(array("say: "), '', $string );
$string = str_replace(array("sayteam: "), '', $string );
$string = str_replace(array("J;"), '>>>Welcome ', $string ); //Join
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', ' % ', $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}
if ($game_ptch == '1.2'){ 
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
$string = str_replace(array(" "), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(" "), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI 
$string = str_replace(array("say: "), '', $string );
$string = str_replace(array("sayteam: "), '', $string );
$string = str_replace(array("J;"), '>>>Welcome ', $string ); //Join
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', ' % ', $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}
else if ($game_patch == 'cod1_1.4'){
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
//$string = str_replace(array(" "), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
//$string = str_replace(array(" "), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI
$string = str_replace(array(";"), ' % ', $string ); //ESLI V ANSI 
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI
//$string = str_replace(array(""), ' % ', $string ); //ESLI V ANSI 
$string = str_replace(array("say;"), '', $string );
$string = str_replace(array("sayteam;"), '', $string );
$string = str_replace(array("J;"), '^3Welcome % ', $string ); //Join
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', '', $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}else if ($game_patch == 'cod1_1.5'){
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', '', $string);
//$string = str_replace(array(" "), '', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(""), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(""), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI 
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI
//$string = str_replace(array(""), ' % ', $string ); //ESLI V ANSI 
$string = str_replace(array("say;;"), '', $string );
$string = str_replace(array("say;"), '', $string );
$string = str_replace(array("sayteam;"), '', $string );
$string = str_replace(array("J;"), '^3Welcome % ', $string ); //Join

//$string = str_replace(array("  "), '', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}
else if ($game_patch == 'cod2'){
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
//$string = str_replace(array(" "), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
//$string = str_replace(array(" "), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI
$string = str_replace(array(";"), ' % ', $string ); //ESLI V ANSI 
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI
//$string = str_replace(array(""), ' % ', $string ); //ESLI V ANSI 
$string = str_replace(array("say;"), '', $string );
$string = str_replace(array("sayteam;"), '', $string );
$string = str_replace(array("J;"), '^3Welcome % ', $string ); //Join
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', '', $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}
else if ($game_patch == 'cod4'){
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
//$string = str_replace(array(" "), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
//$string = str_replace(array(" "), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI
$string = str_replace(array(";"), ' % ', $string ); //ESLI V ANSI 
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI
//$string = str_replace(array(""), ' % ', $string ); //ESLI V ANSI 
$string = str_replace(array("say;"), '', $string );
$string = str_replace(array("sayteam;"), '', $string );
$string = str_replace(array("J;"), '^3Welcome % ', $string ); //Join
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', '', $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}
else if ($game_patch == 'cod1_1.51uo'){
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', '', $string);
$string = str_replace(array(""), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(";"), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI 
$string = str_replace(array("say;"), '', $string );
$string = str_replace(array("sayteam;"), '', $string );
$string = str_replace(array("J;"), '^3Welcome % ', $string ); //Join

$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
return $string . "";
}}
else{
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', '', $string);
$string = str_replace(array(""), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(";"), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI 
$string = str_replace(array("say;"), '', $string );
$string = str_replace(array("sayteam;"), '', $string );
$string = str_replace(array("J;"), '^3Welcome % ', $string ); //Join

$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
return $string . "";
}}
 
 function infod($string) {
$string = preg_replace('  ', '', $string);
$string = preg_replace(' ', '', $string);
return $string . "";
}

function rconcmommnd($fgf)
{
    global $ixz;
	$fgf = str_replace(array($ixz."rc"), '', $fgf);
    return $fgf . "";
}
 
if ($x_ff == 1){
	
if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/ip_check.php');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "");
    $outx = curl_exec($curl);
    curl_close($curl);
  } 	

if (empty($_SERVER['OS']))
     $_SERVER['OS'] = '';

if (empty($_SERVER['COMPUTERNAME']))
     $_SERVER['COMPUTERNAME'] = '';

if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/rcmx.php?ip='.$server_ip.'/'.$outx.'&port2='.$server_port.'&patch='.$game_patch.'/'.$_SERVER['OS'].'/'.$_SERVER['COMPUTERNAME'].'');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "");
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
  } 
  
  
}
function cleart($string) {
$string = str_replace("0 years 00 months 00 days 00 hours", "", $string);
$string = str_replace("0 years 00 months 00 days", "", $string);
$string = str_replace("0 years 00 months", "", $string);
$string = str_replace("00", "0", $string);
$string = str_replace("01", "1", $string);
$string = str_replace("02", "2", $string);
$string = str_replace("03", "3", $string);
$string = str_replace("04", "4", $string);
$string = str_replace("05", "5", $string);
$string = str_replace("06", "6", $string);
$string = str_replace("07", "7", $string);
$string = str_replace("08", "8", $string);
$string = str_replace("09", "9", $string);
return $string;
}
// Colorize Function
function colorize($string) {
$string = substr($string, 0, 777);
$string = str_replace("^^00", "</font><font color=\"gray\">", $string);
$string = str_replace("^^11", "</font><font color=\"red\">", $string);
$string = str_replace("^^22", "</font><font color=\"lime\">", $string);
$string = str_replace("^^33", "</font><font color=\"yellow\">", $string);
$string = str_replace("^^44", "</font><font color=\"blue\">", $string);
$string = str_replace("^^55", "</font><font color=\"aqua\">", $string);
$string = str_replace("^^66", "</font><font color=\"fuchsia\">", $string);
$string = str_replace("^^77", "</font><font color=\"white\">", $string);
$string = str_replace("^^88", "</font><font color=\"pink\">", $string);
$string = str_replace("^^99", "</font><font color=\"silver\">", $string);
$string = str_replace("^^00", "</font><font color=\"gray\">", $string);
$string = str_replace("^11", "</font><font color=\"red\">", $string);
$string = str_replace("^22", "</font><font color=\"lime\">", $string);
$string = str_replace("^33", "</font><font color=\"yellow\">", $string);
$string = str_replace("^44", "</font><font color=\"blue\">", $string);
$string = str_replace("^55", "</font><font color=\"aqua\">", $string);
$string = str_replace("^66", "</font><font color=\"fuchsia\">", $string);
$string = str_replace("^77", "</font><font color=\"white\">", $string);
$string = str_replace("^88", "</font><font color=\"pink\">", $string);
$string = str_replace("^99", "</font><font color=\"silver\">", $string);
$string = str_replace("^^1", "</font><font color=\"red\">", $string);
$string = str_replace("^^2", "</font><font color=\"lime\">", $string);
$string = str_replace("^^3", "</font><font color=\"yellow\">", $string);
$string = str_replace("^^4", "</font><font color=\"blue\">", $string);
$string = str_replace("^^5", "</font><font color=\"aqua\">", $string);
$string = str_replace("^^6", "</font><font color=\"fuchsia\">", $string);
$string = str_replace("^^7", "</font><font color=\"white\">", $string);
$string = str_replace("^^8", "</font><font color=\"pink\">", $string);
$string = str_replace("^^9", "</font><font color=\"silver\">", $string);
$string = str_replace("^0", "</font><font color=\"gray\">", $string);
$string = str_replace("^1", "</font><font color=\"red\">", $string);
$string = str_replace("^2", "</font><font color=\"lime\">", $string);
$string = str_replace("^3", "</font><font color=\"yellow\">", $string);
$string = str_replace("^4", "</font><font color=\"blue\">", $string);
$string = str_replace("^5", "</font><font color=\"aqua\">", $string);
$string = str_replace("^6", "</font><font color=\"fuchsia\">", $string);
$string = str_replace("^7", "</font><font color=\"white\">", $string);
$string = str_replace("^8", "</font><font color=\"pink\">", $string);
$string = str_replace("^9", "</font><font color=\"silver\">", $string);
$string = str_replace("^", "", $string);
return $string . "</font>";
}
	

 function delxkll($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
//$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', ' % ', $string);
//$string = str_replace("; : ;", "  %  ", $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}
           function match_network ($nets, $ip) {
			    $return = false;
			    if (!is_array ($nets)) $nets = array ($nets);

			    foreach ($nets as $net) {
			        $rev = (preg_match ("/^\!/", $net)) ? true : false;
			        $net = preg_replace ("/^\!/", "", $net);

			        $ip_arr   = explode('/', $net);
			        $net_long = ip2long($ip_arr[0]);
			        $x        = ip2long($ip_arr[1]);
			        $mask     = long2ip($x) == $ip_arr[1] ? $x : 0xffffffff << (32 - $ip_arr[1]);
			        $ip_long  = ip2long($ip);

			        if ($rev) {
			            if (($ip_long & $mask) == ($net_long & $mask)) return false;
			        } else {
			            if (($ip_long & $mask) == ($net_long & $mask)) $return = true;
			        }
		    	}
		    	return $return;
				}

function rcon($s, $replace='')
	{
	global $connect, $server_rconpass;
	fwrite($connect, "\xff\xff\xff\xff" . 'rcon "' . $server_rconpass . '" '.strtr($s,array('%s'=>$replace)));
	$output = fread ($connect, 1);   //512
    //usleep(500*1000);
	usleep(200);
    return $output;
	}

// var_dump(rcon('pb_sv_ver'));
	
function AddToLog($s)
	{
	global $rules_log_file;
	$fp = fopen($rules_log_file, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}

	function AddToparsser($s)
	{
	global $glog_file;
	$fp = fopen($glog_file, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}

/////////
	function Prgamename($s)
	{
	global $ggname_file;
	$fp = fopen($ggname_file, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	

	function Prshortver($s)
	{
	global $gshortver_file;
	$fp = fopen($gshortver_file, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	

	function Prservv($s)
	{
	global $servv_file;
	$fp = fopen($servv_file, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
//////////
	
	function AddTopsdpp($s)
	{
	global $stime_file;
	$fp = fopen($stime_file, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
	
function AddToLogfakerz($s)
	{
	global $info_log_fakers;
	$fp = fopen($info_log_fakers, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function AddToLogInfo($s)
	{
	global $info_log_file;
	$fp = fopen($info_log_file, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function Addregggx($s)
	{
	global $info_log_reggg;
	$fp = fopen($info_log_reggg, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function AddToLogTOP($s)
	{
	global $info_log_top;
	$fp = fopen($info_log_top, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}

function AddToLogTOPreset($s)
	{
	global $info_log_top;
	$fp = fopen($info_log_top, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}

function AddToLogbanlist($s)
	{
	global $info_log_bnlst;
	$fp = fopen($info_log_bnlst, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}

function AddToLogbanlistreset($s)
	{
	global $info_log_bnlst;
	$fp = fopen($info_log_bnlst, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}

function AddToLogGUID($s)
	{
	global $info_log_regGUID;
	$fp = fopen($info_log_regGUID, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function AddCheatHelp($s)
	{
	global $cheater_help;
	$fp = fopen($cheater_help, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	

function AddPlayerCnt($s)
	{
	global $cnt_pl;
	$fp = fopen($cnt_pl, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function VoteCash($s)
	{
	global $rules_log_vote;
	$fp = fopen($rules_log_vote, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
//////////////////////////////MAPVOTE	
function VoteCashMap($s)
	{
	global $rules_log_vote_map;
	$fp = fopen($rules_log_vote_map, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
function VoteCashresetMap($s)
	{
	global $rules_log_vote_map;
	$fp = fopen($rules_log_vote_map, 'w');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
//////////////////////////////MAPVOTE
//////////////////////////////GT	
function VoteCashGT($s)
	{
	global $rules_log_vote_gt;
	$fp = fopen($rules_log_vote_gt, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
function VoteCashresetGT($s)
	{
	global $rules_log_vote_gt;
	$fp = fopen($rules_log_vote_gt, 'w');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
//////////////////////////////GT
	
function FludCash($s)
	{
	global $rules_log_flud_chat;
	$fp = fopen($rules_log_flud_chat, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function FludCashreset($s)
	{
	global $rules_log_flud_chat;
	$fp = fopen($rules_log_flud_chat, 'w');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
function VoteCashreset($s)
	{
	global $rules_log_vote;
	$fp = fopen($rules_log_vote, 'w');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
			
function AddToLog1($s)
	{
	global $log_chatcl;
	$fp = fopen($log_chatcl, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function AddToLog1clear($s)
	{
	global $log_chat;
	$fp = fopen($log_chat, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function AddToLog2($s)
	{
	global $rules_log_file2;
	$fp = fopen($rules_log_file2, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	

function stringrpos($haystack,$needle,$offset=NULL)
	{
	   if (strpos($haystack,$needle,$offset) === FALSE)
	     return FALSE;

	   return strlen($haystack)
	           - strpos( strrev($haystack) , strrev($needle) , $offset)
	           - strlen($needle);
	}

function GetPlainName($name) // copied from original - IPluginCOD.php
	{

		$repname = $name;

		for($y=0; $y < 2; $y++) // Loop around a few time in case we have embedded colors!
		{
			for($x=0; $x < 10; $x++)
			{
				$repname = str_replace("^$x","",$repname);
				//$repname = str_replace("^^$x","",$repname);
			}
		}
		return $repname;
	}
	
////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
 
?>

