<?php
$z_rcm = "RCM[v.3.1.7]";
$dtx   = "^7[14_08_2016]^5";
error_reporting(E_ALL);
ini_set("display_errors", 1);
if (isDomainAvailible('http://recod.ru/forum/index.php'))
 {
  //////////////////////////////============================	
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'http://recod.ru/rcm.php');
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $zxxm = curl_exec($ch);
  if (!empty($zxxm))
   {
    if ($z_rcm == $zxxm)
     {
      $z_rcm = $zxxm;
     }
    else
     {
      $dtx   = date('Y.m.d');
      $z_rcm = 'New ADMINTOOL updates available RCM';
      $spps  = 1555555;
     }
   }
 }
else
 {
  echo "Error 404. RCM Msterserver is offline or you closed tcp and udp ports!";
 }
function isDomainAvailible($domain)
 {
  if (!filter_var($domain, FILTER_VALIDATE_URL))
   {
    return false;
   }
  $curlInit = curl_init($domain);
  curl_setopt($curlInit, CURLOPT_CONNECTTIMEOUT, 10);
  curl_setopt($curlInit, CURLOPT_HEADER, true);
  curl_setopt($curlInit, CURLOPT_NOBODY, true);
  curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($curlInit);
  curl_close($curlInit);
  if ($response)
    return true;
  return false;
 }
$z_set       = $z_rcm . " Admintool";
$z_ver       = " " . $z_rcm . " " . $dtx . "";
$mapfix      = 'dm'; // zom - IF ZOMBIES MOD , dm - if simple mod
$v_time_gtx  = 100;
$v_time_map  = 100;
$v_time_ban  = 100;
$v_time_kick = 100;
$mistake     = '\/+[a-z]'; //regedit search for mistakes
$ax1         = 'admin';
$ax2         = 'moderator';
$ax3         = 'specialguests';
$ax4         = 'vip';
/*   Groups 
Admins - 0
Moderators - md
Clan members - 1
Vip - 2
Members - 3 (Gamers on website)
Pro player - 4
Special guests - 5
Top player - 6
Noob - 7
Worst - 8
*/
$web_con     = '1';
require $cpath . 'cfg/_connection.php';
require $cpath . 'cfg/_settings.php';
require $cpath . 'cfg/_groups.php';
//********************************************************
/// Register from website sync. // if login from website use 1, no from website login = 0 - this line supporting only with special RCM web plugins
$registerx      = '0';
//********************************************************
//***********************************************\ dont change it after \***********************************************
//======================================================================= Alba supported only
$game_ac        = '0'; /// With anticheat alba (1 - yes, 0 - without)
$game_ac_status = '0'; /// Kick without alba and good skill (1 - yes, 0 - without)
$game_ptch      = '---'; /// /1.2/ codx - on   another off if us codam
$game_mod       = 'NONE'; /// for /codam/ mods awe 1.2 only
//======================================================================= Alba supported only
$sleep_rcon     = 529000; ///Rcon get pause time   
$codecon        = 'http://recod.ru/RECODMOD_CONNECTOR.txt';
//***********************************************\ dont change it before\***********************************************
try
 {
  ////////////////////////////	  
  $db4    = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db4.sqlite');
  ////////////////////////////
  $queryv = $db4->query("SELECT COUNT(*) as count FROM x_db_players");
  $queryv->setFetchMode(PDO::FETCH_ASSOC);
  $rowx       = $queryv->fetch();
  $db_players = $rowx['count'];
  $db4        = NULL;
  $queryv     = NULL;
 }
catch (PDOException $e)
 {
  print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
 }
if (empty($db_players))
  $db_players = '0';
try
 {
  ////////////////////////////
  if (empty($bannlist))
    $db2 = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db2.sqlite');
  else
    $db2 = new PDO('sqlite:' . $bannlist);
  ////////////////////////////
  $qc = $db2->query("SELECT COUNT(*) as count FROM bans");
  $qc->setFetchMode(PDO::FETCH_ASSOC);
  $ryy     = $qc->fetch();
  $membans = $ryy['count'];
  $db2     = NULL;
  $qc      = NULL;
 }
catch (PDOException $e)
 {
  print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
 }
if (empty($membans))
  $membans = '0';
try
 {
  $db3    = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
  $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=$limm ORDER BY (s_ratio+0) DESC LIMIT 1");
  $number = 0;
  foreach ($result as $row)
   {
    $playernamemm = $row['s_clear'];
   }
 }
catch (PDOException $e)
 {
  print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
 }
if (empty($playernamemm))
  $playernamemm = '[No one in player top list!]';
usleep(9000);
$daten = date('Y-m-d');
try
 {
  $db3    = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
  $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=30 AND s_lasttime LIKE '%" . $daten . "%' ORDER BY (s_ratio+0) DESC LIMIT 5");
  $number = 0;
  $i      = 0;
  foreach ($result as $row)
   {
    $playername[$i] = $row['s_clear'];
    $i++;
   }
  $result = null;
  $db3    = NULL;
 }
catch (PDOException $e)
 {
  print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
 }
if (empty($playername[0]))
  $playername[0] = '[None]';
if (empty($playername[1]))
  $playername[1] = '[None]';
if (empty($playername[2]))
  $playername[2] = '[None]';
if (empty($playername[3]))
  $playername[3] = '[None]';
if (empty($playername[4]))
  $playername[4] = '[None]';
function __autoloadER($settings_name)
 {
  global $cpath;
  require_once $cpath . "cfg/" . $settings_name . '.cfg.php';
 }
if (file_exists($cpath . 'ReCodMod/x_logs/g_servername.log'))
 {
  $f          = fopen($cpath . "ReCodMod/x_logs/g_servername.log", "r");
  $servername = fgets($f, 1024);
  $servername = trim($servername);
 }
require $cpath . 'cfg/bans.cfg.php';
require $cpath . 'cfg/commands.cfg.php';
require $cpath . 'cfg/rules.cfg.php';
require $cpath . 'cfg/badwords.cfg.php';
require $cpath . 'cfg/spam.cfg.php';
require $cpath . 'cfg/cryingkids.cfg.php';
require $cpath . 'cfg/messages.cfg.php';
require $cpath . 'cfg/maps_gametypes.cfg.php';
if (empty($kicknotingrp))
  $kicknotingrp = 1;
$admin_code1         = $ax1 . $admin_code;
$moderator_code1     = $ax2 . $moderator_code;
$specialguests_code1 = $ax3 . $specialguests_code;
$vip_code1           = $ax4 . $vip_code;
if (empty($game_patch))
 {
  function ghbfffm($string)
   {
    $string = str_replace(array(
      "/^7"
    ), '', $string);
    $string = str_replace(array(
      "^7"
    ), '', $string);
    return $string . "";
   }
  if (file_exists($cpath . 'ReCodMod/x_logs/g_gamename.log'))
   {
    $fyf = file($cpath . 'ReCodMod/x_logs/g_gamename.log');
    foreach ($fyf as $ryhfd)
     {
      $mpgamenname = ghbfffm($ryhfd);
      if (file_exists($cpath . 'ReCodMod/x_logs/g_shortversion.log'))
       {
        $fyfx = file($cpath . 'ReCodMod/x_logs/g_shortversion.log');
        foreach ($fyfx as $ryhfdv)
         {
          $mpshortver = ghbfffm($ryhfdv);
          if (strpos($mpgamenname, '5') !== false)
           {
            $game_patch = 'cod5';
           }
          else if (strpos($mpgamenname, 'Call of Duty 4') !== false)
           {
            $game_patch = 'cod4';
           }
          else if (strpos($mpgamenname, 'Call of Duty 2') !== false)
           {
            $game_patch = 'cod2';
           }
          else if (strpos($mpgamenname, 'Call of Duty') !== false)
           {
            $game_patch = 'cod1_' . $mpshortver . '';
           }
          else
           {
            $game_patch = 'cod1_1.41';
           }
         }
       }
     }
	 if(!empty($game_patch))
	$game_patch = trim($game_patch);   
   }
 }

?>
