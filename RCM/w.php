#!/bin/php
<?php
/*/ ///******************  |||           \\\	
/*/ ///******************  |||         ///\ROCCA 
/*/ ///******************  |||        ///  \\\ (c) http://recod.ru/
/*/ ///******************  |||       ///    \\\
/*/ ///******************  |||      ///\\\*ReCodMod V.3.X [2016]
/*/ ///******************  ||||||| ///        \\\          skype: larocca2012
/*/ ///******************/
$spps = 221000;
usleep(7000);
function hx($sc)
 {
  $sc = str_replace(array(
    "w.php"
  ), '', $sc);
  return $sc . "";
 }
$x_ff  = 0;
$cpath = hx(__FILE__);
require $cpath . 'ReCodMod/functions/_c.php';
require $cpath . 'ReCodMod/functions/inc_functions.php';
include($cpath . "ReCodMod/functions/functions.php");
include($cpath . "ReCodMod/geoip_bases/MaxMD/geoipcity.inc");
include($cpath . "ReCodMod/geoip_bases/MaxMD/timezone/timezone.php");
if (file_exists($log_folder . '/g_log.log'))
 {
  $fy = file($log_folder . '/g_log.log');
  foreach ($fy as $parseglog)
   {
    $mplogfiler = $parseglog;
   }
 }
if (strpos($mplogfiler, $mplogfile) != false)
 {
  echo "\n YOU USE WRONG LOGFILE IN cfg/_connection.php \n LINE WITH mplogfile - \n\n CHANGE \n" . $mplogfiler . " \n TO \n" . $mplogfile . " \n FOR RCM WORKING!!! \n \n \n";
  sleep(130);
  if (!empty($db))
    $db = NULL;
  if (!empty($db1))
    $db1 = NULL;
  if (!empty($db2))
    $db2 = null;
  if (!empty($db3))
    $db3 = NULL;
  if (!empty($db4))
    $db4 = NULL;
  if (!empty($db5))
    $db5 = NULL;
if(!empty($connect))
fclose($connect);
  exit;
 }
echo "\n      /-/ " . $z_set . " /-/ ready to work /-/ \n";
echo "   Game Server:   " . $servername = trim(meessagee($servername)) . " / " . $game_patch . "\n";
while (true)
 {
  usleep(1000);
  $start        = microtime(true);
  $stime        = time();
  $erroor       = 0;
  $confirm_user = 0;
  $x_commandz   = 0;
  $x_votg       = 0;
  $x_votg3      = 0;
  $x_number     = 0;
  $x_numberz    = 0;
  $x_pl_log     = 0;
  $x_numb1      = 0;
  $x_return     = 0;
  $x_admin      = 0;
  $x_admin1     = 0;
  $x_admin2     = 0;
  $x_admin3     = 0;
  $x_kik        = 0;
  $x_loops      = 0;
  $x_loopsv     = 0;
  $x_adminxxx   = 0;
  $x_looops     = 0;
  $x_nmbr       = 0;
  $x_nmbrf      = 0;
  $knownplayr   = 0;
  $bck          = 0;
  $bck2         = 0;
  $stop_lp      = 0;
  $x_stop_lp    = 0;
  $x_stop_lpst  = 0;
  $fakerz       = 0;
  $xz_flud      = false;
  if ($bck != 1)
   {
    $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_kicker");
    if ($stime - $cron_time >= 10)
     {
      usleep($sleep_rcon);
      $bck = 1;
      @file_put_contents($cpath . "ReCodMod/x_cron/cron_time_kicker", "");
      require $cpath . 'ReCodMod/functions/inc_functions2X.php';
      for ($i = 0; $i < $player_cnt; $i++)
       {
        require $cpath . 'ReCodMod/functions/inc_functions3x.php';
        $i_id   = 0;
        $i_ping = 0;
        if ($player_cnt <= 1)
          $spps = 721000;
        else if ($player_cnt <= 4)
          $spps = 195000;
        else if ($player_cnt <= 6)
          $spps = 160000;
        else if ($player_cnt <= 14)
          $spps = 100000;
        else if ($player_cnt <= 20)
          $spps = 99000;
        else if ($player_cnt <= 30)
          $spps = 90000;
        else if ($player_cnt <= 40)
          $spps = 80000;
        else if ($player_cnt <= 50)
          $spps = 70000;
        else if ($player_cnt <= 64)
          $spps = 50000;
        else if ($player_cnt <= 128)
          $spps = 40000;
        $bck = 1;
        if (($spps != 721000) && ($x_numberz == 0))
         {
          require $cpath . 'ReCodMod/plugins/ban_fast_kick.php';
          ++$x_numberz;
          $bck = 1;
         }
       }
     }
   }
  usleep($spps);
  if ($bck2 == 0)
   {
    if ($spps != 721000)
     {
      if ($spps != 221000)
       {
        if (empty($player_cnt))
         {
          $player_cnt = 2;
         }
        if ($player_cnt < 2)
          $msgt = 120;
        else if ($player_cnt < 5)
          $msgt = 30;
        else if ($player_cnt < 10)
          $msgt = 40;
        else if ($player_cnt < 14)
          $msgt = 45;
        else if ($player_cnt < 16)
          $msgt = 50;
        else
          $msgt = 60;
        $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_message");
        if ($stime - $cron_time >= $msgt)
         {
          file_put_contents($cpath . "ReCodMod/x_cron/cron_time_message", "");
          require $cpath . 'ReCodMod/functions/inc_functions2.php';
          for ($i = 0; $i < 1; $i++)
           {
            echo ' - ' . $spps . ' - ';
            require $cpath . 'ReCodMod/plugins/messages.php';
            if ($code == 1)
             {
              $date      = date('Y.m.d H.i.s');
              $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_code");
              if ($stime - $cron_time >= 40)
               {
                file_put_contents($cpath . "ReCodMod/x_cron/cron_time_code", "");
                $f    = fopen($cpath . "ReCodMod/x_logs/parsed_code.log", "wb");
                $file = file_get_contents($codecon);
                fwrite($f, $file);
                fclose($f);
                $fh     = file($cpath . "ReCodMod/x_logs/parsed_code.log");
                $pwrcm0 = md5(md5($admin_code));
                $pwrcm1 = md5(md5($moderator_code));
                $pwrcm2 = md5(md5($specialguests_code));
                $pwrcm3 = md5(md5($vip_code));
                $pwrcm4 = md5(md5($clan_member));
                foreach ($fh as $parsexrcm)
                 {
                  if ((preg_match("/$pwrcm0/i", $parsexrcm)) && (preg_match("/admin/i", $admin_code1)))
                    $groupzd = '0';
                  else if ((preg_match("/$pwrcm1/i", $parsexrcm)) && (preg_match("/moderator/i", $moderator_code1)))
                    $groupzd = 'md';
                  else if ((preg_match("/$pwrcm2/i", $parsexrcm)) && (preg_match("/specialguests/i", $specialguests_code1)))
                    $groupzd = '5';
                  else if ((preg_match("/$pwrcm3/i", $parsexrcm)) && (preg_match("/vip/i", $vip_code1)))
                    $groupzd = '2';
                  else if ((preg_match("/$pwrcm4/i", $parsexrcm)) && (preg_match("/clanz/i", $clan_member)))
                    $groupzd = 'cl';
                  if (!empty($groupzd))
                   {
                    list($ipg, $pwrrr) = explode('/', $parsexrcm);
                    echo "\n recod.ru/code.php ->" . $parsexrcm;
                    try
                     {
                      $db   = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db1.sqlite');
                      $sql  = "SELECT * FROM x_db_admins WHERE s_adm='$ipg' LIMIT 1";
                      $stat = $db->query($sql)->fetchColumn();
                      if ($stat > 0)
                       {
                        $db->exec("UPDATE x_db_admins SET s_group='$groupzd' WHERE s_adm='$ipg'");
                        echo '-Created-';
                       }
                      else
                       {
                        if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$ipg', '$date', '$groupzd', '0')") > 0)
                         {
                          echo "Created ADMIN CODE IN DATABASE." . "\n";
                         }
                       }
                      $res = null;
                      $db  = NULL;
                     }
                    catch (PDOException $e)
                     {
                      print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
                     }
                   }
                 }
               }
             }
            else
             {
              if ($guids == 0)
               {
                $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_resttt2");
                if ($stime - $cron_time >= 5)
                 {
                  file_put_contents($cpath . "ReCodMod/x_cron/cron_time_resttt2", "");
                  $fh = file("/media/DataBase/Game_Servers/RCM/CONNECT/LOG_logged_from_forum.txt");
                  foreach ($fh as $fline)
                   {
                    $flm = explode(" - ", $fline);
                    echo $ipg = $flm[1];
                    echo $groupg = $flm[2];
                    $date = date('Y.m.d H.i.s');
                    try
                     {
                      $db = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db1.sqlite');
                      $db->exec("DELETE FROM x_db_admins WHERE s_adm='$ipg'");
                      $sql  = "SELECT * FROM x_db_admins WHERE s_adm='$ipg' LIMIT 1";
                      $stat = $db->query($sql)->fetchColumn();
                      if ($stat > 0)
                       {
                        $db->exec("UPDATE x_db_admins SET s_group='$groupg' WHERE s_adm='$ipg'");
                        echo '-Created-';
                       }
                      else
                       {
                        if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$ipg', '$date', '$groupg', '$groupg')") > 0)
                         {
                          echo 'Inserted in database' . "\n";
                         }
                       }
                      $res = null;
                      $db  = NULL;
                     }
                    catch (PDOException $e)
                     {
                      print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
                     }
                   }
                  $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_resttt");
                  if ($stime - $cron_time >= 3800)
                   {
                    file_put_contents($cpath . "ReCodMod/x_cron/cron_time_resttt", "");
                    $fhc  = fopen("/media/DataBase/Game_Servers/RCM/CONNECT/LOG_logged_from_forum.txt", "w+");
                    $hhhe = '.  -  .  -  .';
                    fwrite($fhc, $hhhe . "\n");
                    fclose($fhc);
                   }
                 }
               }
              else
               {
               }
             }
           }
         }
        $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_top");
        if ($stime - $cron_time >= 4700)
         {
          file_put_contents($cpath . "ReCodMod/x_cron/cron_time_top", "");
          require $cpath . 'ReCodMod/plugins/top_update.php';
          require $cpath . 'ReCodMod/plugins/banlist_update.php';
         }
       }
     }
   }
  if ($spps != 5321000)
   {
    ini_set("log_errors", "1");
    ini_set("error_log", $cpath . "ReCodMod/x_errors/$filename");
    $logging = new log($cpath . "ReCodMod/x_errors/$filename");
    set_error_handler("error_handler");
    $datetime  = date('Y.m.d H:i:s');
    $dtx2      = date('Y-m-d H:i:s');
    $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_exec1");
    if ($stime - $cron_time >= 60)
     {
      file_put_contents($cpath . "ReCodMod/x_cron/cron_time_exec1", "");
      require $cpath . 'ReCodMod/functions/inc_functions2.php';
      for ($i = 0; $i < $player_cnt; $i++)
       {
        require $cpath . 'ReCodMod/functions/inc_functions3.php';
        if ((!$valid_id) || (!$valid_ping))
          Continue;
        require $cpath . 'ReCodMod/plugins/ban_fast_kick.php';
       }
     }
    if (isset($rules_schedule))
     {
      list($sh, $sm) = explode(' ', date('H i'));
      $sh = (int) $sh;
      $sm = (int) $sm;
      if ((isset($rules_schedule[$sh])) && (isset($rules_schedule[$sh][$sm])))
       {
        if (is_array($rules_schedule[$sh][$sm]))
         {
          foreach ($rules_schedule[$sh][$sm] as $c)
           {
            $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_exec1z");
            if (time() - $cron_time >= 60)
             {
              file_put_contents($cpath . "ReCodMod/x_cron/cron_time_exec1z", "");
              require $cpath . 'ReCodMod/functions/inc_functions2.php';
              for ($i = 0; $i < 1; $i++)
               {
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                  Continue;
                usleep($sleep_rcon);
                rcon($c);
                AddToLog("[" . $datetime . "] MAP ROTATION AUTO CHANGE (configs.php)");
               }
             }
           }
         }
        else
         {
          $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_exec1z");
          if (time() - $cron_time >= 60)
           {
            file_put_contents($cpath . "ReCodMod/x_cron/cron_time_exec1z", "");
            require $cpath . 'ReCodMod/functions/inc_functions2.php';
            for ($i = 0; $i < 1; $i++)
             {
              require $cpath . 'ReCodMod/functions/inc_functions3.php';
              if ((!$valid_id) || (!$valid_ping))
                Continue;
              usleep($sleep_rcon);
              rcon($rules_schedule[$sh][$sm]);
              AddToLog("[" . $datetime . "] MAP ROTATION AUTO CHANGE (configs.php)");
             }
           }
         }
       }
     }
    if ($mplogfile)
     {
      if ($x_stop_lp == 0)
       {
        $parseline = readloglines($mplogfile);
		
        clearstatcache();
        require($cpath . "ReCodMod/functions/log_reader_functions.php");
        if ((preg_match('/say;/', $parseline, $xnon)) || (preg_match('/sayteam;/', $parseline, $xm)) || (preg_match('/say; /', $parseline, $xnon)) || (preg_match('/sayteam; /', $parseline, $xm)) || (preg_match('/tell;/', $parseline, $xm)))
         {
          $parselinetxt = delxxxc($parseline);
          if (preg_match('/tell;/', $parseline, $xm))
           {
            list($tellw, $forguidn, $foridnum, $fornick, $guidn, $idnum, $nickr, $msgr) = explode(';', $parseline);
           }
          else
           {
            $counttdot = substr_count($parseline, ';');
            if ($counttdot == 4)
              list($sayyy, $guidn, $idnum, $nickr, $msgr) = explode(';', $parseline);
            else if ($counttdot == 2)
             {
              list($rrr, $nickr, $msgr) = explode('; ', $parseline);
              $guidn = '0';
             }
            else
              list($nickr, $msgr) = explode(' % ', $parselinetxt);
           }
          $msgO      = $msgr;
          $msgr      = mb_strtolower($msgr, 'cp1251');
          $originalz = $nickr;
          $nivv      = $nickr;
          $msgr      = dddzz($msgr);
          $msgO      = dddzz($msgr);
          if ($x_stop_lp == 0)
           {
            foreach ($admin_commands as $admin_cm)
             {
              if (preg_match('/' . $admin_cm . '/si', $msgr, $xnon))
               {
                echo "\n[cMd] : [", $datetime, "] : " . $nickr . " : " . $msgr;
                $dhgsj = addslashes(hjgdtr($nickr));
                if ((strpos($msgr, $admin_code) !== false) || (strpos($msgr, $moderator_code) !== false) || (strpos($msgr, $vip_code) !== false))
                  AddToLog1("<br/>[" . $datetime . "] " . $dhgsj . " : " . $msgO . "");
                else
                 {
                  AddToLog1clear("[" . $datetime . "] " . $dhgsj . " : " . $msgO . "");
                  AddToLog1("<br/>[" . $datetime . "] " . $dhgsj . " : " . $msgO . "");
                 }
                require $cpath . 'ReCodMod/functions/inc_functions2.php';
                $x_number = 0;
                for ($i = 0; $i < $player_cnt; $i++)
                 {
                  require $cpath . 'ReCodMod/functions/inc_functions3.php';
                  if ((!$valid_id) || (!$valid_ping))
                    Continue;
                  if ($x_stop_lp == 0)
                   {
                    require $cpath . 'ReCodMod/plugins/adm_plugins/cmds_other.php';
                    $x_namex = clearnamex($i_name);
                    $x_nickx = clearnamex($nickr);
                    require $cpath . 'ReCodMod/plugins/cmd/list.php';
                    require $cpath . 'ReCodMod/plugins/adm_plugins/ban.php';
                    require $cpath . 'ReCodMod/plugins/adm_plugins/kick.php';
                    require $cpath . 'ReCodMod/plugins/adm_plugins/change_map.php';
                    require $cpath . 'ReCodMod/plugins/adm_plugins/restart_map.php';
                    require $cpath . 'ReCodMod/plugins/adm_plugins/unban.php';
                    require $cpath . 'ReCodMod/plugins/adm_plugins/change_gametype.php';
                    require $cpath . 'ReCodMod/plugins/adm_plugins/delete.php';
                    require $cpath . 'ReCodMod/plugins/adm_plugins/update.php';
                    require $cpath . 'ReCodMod/plugins/adm_plugins/refresh.php';
                    if ($game_patch != 'cod1_1.1')
                      require $cpath . 'ReCodMod/plugins/adm_plugins/screenshot.php';
                    if ($x_stop_lp == 100)
                     {
                      if (!empty($db))
                        $db = NULL;
                      if (!empty($db1))
                        $db1 = NULL;
                      if (!empty($db2))
                        $db2 = null;
                      if (!empty($db3))
                        $db3 = NULL;
                      if (!empty($db4))
                        $db4 = NULL;
                      if (!empty($db5))
                        $db5 = NULL;
					if(!empty($connect))
                        fclose($connect);
                      exit;
                     }
                    if ($x_return >= 1)
                     {
                      if ($knownplayr > 0)
                       {
                        if ($connect){
							if(!empty($connect))
                          fclose($connect);
						  }
                       }
                      echo '.Changed.';
                      ++$x_stop_lp;
                     }
                    else
                     {
                     }
                    if ($x_nmbr >= 1)
                      ++$x_stop_lp;
                   }
                 }
                if ($knownplayr > 0)
                  fclose($connect);
                echo '  ..  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
                ++$x_stop_lp;
                foreach ($admin_commands as $commandprt)
                 {
                  if (preg_match('/' . $ixz . $commandprt . '/si', $msgr, $xnon))
                   {
                    ECHO 'sssss';
                    if ($knownplayr == 0)
                     {
                      ECHO 'vvvvv';
                      require $cpath . 'ReCodMod/functions/inc_functions2.php';
                      for ($i = 0; $i < $player_cnt; $i++)
                       {
                        require $cpath . 'ReCodMod/functions/inc_functions3.php';
                        if ((!$valid_id) || (!$valid_ping))
                          Continue;
                        usleep($sleep_rcon);
                        rcon('say ^6[^1RCM^3bot^6] ^1WARNING YOU! ^7' . $nickr . '  ^3its only for admins!', '');
                        if ($kicknotingrp == 1)
                         {
                          usleep($sleep_rcon * 5);
                          if ($game_patch == 'cod1_1.1')
                            rcon('clientkick ' . $unkwnplyersx, '');
                          else
                            rcon('clientkick ' . $idnum, '');
                          AddToLog("[" . $datetime . "] SELF KICK: (" . $nickr . ") (" . $idnum . ") ");
                          AddToLog1clear("[" . $datetime . "] SELF KICK: (" . $nickr . ") (" . $idnum . ") ");
                          AddToLog1("<br/>[" . $datetime . "] SELF KICK: (" . $nickr . ") (" . $idnum . ") ");
                          ++$x_number;
                          ++$x_return;
                          ++$x_stop_lp;
                         }
                       }
                     }
                   }
                 }
               }
             }
           }
          foreach ($funcommands as $funcommand)
           {
            if (preg_match('/' . $funcommand . '/si', $msgr, $xnon))
             {
              require $cpath . 'ReCodMod/functions/inc_functions2.php';
              for ($i = 0; $i < $player_cnt; $i++)
               {
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                  Continue;
                $x_namex = clearnamex($i_name);
                $x_nickx = clearnamex($nickr);
                if ($x_stop_lp == 0)
                 {
                  require $cpath . 'ReCodMod/plugins/cmd/fun_and_info.php';
                 }
               }
             }
           }
          foreach ($commands as $command)
           {
            if (preg_match('/' . $ixz . $command . '/si', $msgr, $xnon))
             {
              echo "\n[cmd] : [", $datetime, "] : " . $nickr . " : " . $msgr;
              $dhgsj    = addslashes(hjgdtr($nickr));
              $vote_cgu = 0;
              require $cpath . 'ReCodMod/functions/inc_functions2.php';
              for ($i = 0; $i < $player_cnt; $i++)
               {
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                  Continue;
                if ($x_stop_lp == 0)
                 {
                  require $cpath . 'ReCodMod/plugins/cmd/status.php';
                  require $cpath . 'ReCodMod/plugins/cmd/player_report.php';
                  require $cpath . 'ReCodMod/plugins/cmd/playerinfo.php';
                  require $cpath . 'ReCodMod/plugins/cmd/_rules.php';
                  require $cpath . 'ReCodMod/plugins/cmd/list.php';
                  require $cpath . 'ReCodMod/plugins/cmd/list_status.php';
                  require $cpath . 'ReCodMod/plugins/cmd/top.php';
                  require $cpath . 'ReCodMod/plugins/cmd/system.php';
                  require $cpath . 'ReCodMod/plugins/cmd/register.php';
                  require $cpath . 'ReCodMod/plugins/cmd/login.php';
                 }
               }
              if ($knownplayr == 100)
                exit;
              foreach ($admin_commands as $commandprt)
               {
                if (preg_match('/' . $ixz . $commandprt . '/si', $msgr, $xnon))
                 {
                  ECHO 'xxxxx';
                  if ($knownplayr == 0)
                   {
                    ECHO 'zzzzz';
                    usleep($sleep_rcon);
                    rcon('say ^6[^1RCM^3bot^6] ^1WARNING YOU! ^7' . $nickr . '  ^3its not your group commands!', '');
                    if ($kicknotingrp == 1)
                     {
                      usleep($sleep_rcon * 5);
                      if ($game_patch == 'cod1_1.1')
                        rcon('clientkick ' . $unkwnplyersx, '');
                      else
                        rcon('clientkick ' . $idnum, '');
                      AddToLog("[" . $datetime . "] SELF KICK: (" . $nickr . ") (" . $idnum . ") ");
                      AddToLog1clear("[" . $datetime . "] SELF KICK: (" . $nickr . ") (" . $idnum . ") ");
                      AddToLog1("<br/>[" . $datetime . "] SELF KICK: (" . $nickr . ") (" . $idnum . ") ");
                      ++$x_number;
                      ++$x_return;
                      ++$x_stop_lp;
                     }
                   }
                 }
               }
              if ($x_stop_lp == 0)
               {
                $status = new COD4ServerStatus($server_ip, $server_port);
                if ($status->getServerStatus())
                 {
                  $status->parseServerData();
                  $serverStatus = $status->returnServerData();
                  $players      = $status->returnPlayers();
                  $pings        = $status->returnPings();
                  $scores       = $status->returnScores();
                  $rank         = 1;
                  foreach ($players as $i => $v)
                   {
                    $i_id   = $rank;
                    $i_name = $players[$i];
                    $i_ip   = $scores[$i];
                    $i_ping = $pings[$i];
                    require $cpath . 'ReCodMod/plugins/cmd/skill_test.php';
                    require $cpath . 'ReCodMod/plugins/cmd/skill_and_rank.php';
                    $rank++;
                   }
                 }
               }
              echo ' ' . $tfinishh = (microtime(true) - $start);
             }
           }
          if ($x_stop_lp == 0)
           {
            require $cpath . 'ReCodMod/plugins/cmd/skill_and_stats.php';
            require $cpath . 'ReCodMod/plugins/vote/banvote.php';
            require $cpath . 'ReCodMod/plugins/vote/kickvote.php';
            require $cpath . 'ReCodMod/plugins/vote/mapvote.php';
            require $cpath . 'ReCodMod/plugins/vote/gametype_vote.php';
           }
          if ($stop_lp == 0)
           {
            if ($chat_protect == 0)
             {
              $dhgsj = addslashes(hjgdtr($nickr));
              $msgO  = $msgr;
              echo "\n--say : [", $datetime, "] : " . $nickr . " : " . $msgO;
              if ((strpos($msgr, $admin_code) !== false) || (strpos($msgr, $moderator_code) !== false) || (strpos($msgr, $vip_code) !== false))
                AddToLog1("<br/>[" . $datetime . "] " . $dhgsj . " : " . $msgO . "");
              else
               {
                AddToLog1clear("[" . $datetime . "] " . $dhgsj . " : " . $msgO . "");
                AddToLog1("<br/>[" . $datetime . "] " . $dhgsj . " : " . $msgO . "");
               }
              echo '.' . $tfinishh = (microtime(true) - $start);
             }
            else
             {
              $msgr = mb_strtolower($msgr, 'cp1251');
              require $cpath . 'ReCodMod/functions/inc_functions2.php';
              for ($i = 0; $i < $player_cnt; $i++)
               {
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                  Continue;
                require $cpath . 'ReCodMod/plugins/chat_pre.php';
                require $cpath . 'ReCodMod/plugins/chat.php';
               }
              if ($chat_protect == 1)
                require $cpath . 'ReCodMod/plugins/log_reader_chat_flood.php';
              $msgr = mb_strtolower($msgr, 'cp1251');
             }
           }
          ++$x_stop_lp;
         }
        else if (preg_match('/J;/', $parseline, $xnon))
         {
          require $cpath . 'ReCodMod/plugins/log_reader_geo_welcome.php';
         }
        else if (preg_match('/Q;/', $parseline, $xnon))
         {
          usleep($spps);
          require $cpath . 'ReCodMod/plugins/log_reader_stats_updater.php';
          usleep($spps / 4);
         }
        else if (preg_match('/K;/', $parseline, $xnon))
         {
          usleep($spps);
          require $cpath . 'ReCodMod/plugins/log_reader_stats_updater.php';
          usleep($spps / 4);
         }
        else if (preg_match('/D;/', $parseline, $xnon))
         {
         }
        else if (preg_match('/InitGame:/', $parseline, $xnon))
         {
          if ((strpos($parseline, 'g_gametype\^5sd') != false) || (strpos($parseline, 'g_gametype\^9old^5sd') != false) || (strpos($parseline, 'g_gametype\^5sd') != false) || (strpos($parseline, 'g_gametype\pam') != false) || (strpos($parseline, 'g_gametype\promod') != false) || (strpos($parseline, 'g_gametype\^1bash') != false) || (strpos($parseline, 'g_gametype\^5promod') != false) || (strpos($parseline, 'g_gametype\rsd') != false) || (strpos($parseline, 'g_gametype\sd') != false) || (strpos($parseline, 'g_gametype\bel') != false))
           {
            echo ' - Objective gametype - ';
            $geosp = 'sd';
            if ($game_patch == 'cod1_1.1')
             {
              if (strpos($parseline, 'g_gametype\sd') != false)
               {
                usleep($sleep_rcon);
                require $cpath . 'ReCodMod/functions/getinfo/sd_fix/sdfix.php';
                fclose($connx);
                list($vv9cl, $vv12nl, $xxkl, $xxklj, $xxvlf, $xdflt) = explode('"', $sdfix);
                if (!empty($xxklj))
                  $sddth = sevenofff($xxklj);
                else
                  $sddth = sevenofff($xdflt);
                echo '---' . $sddthf = $stime + ($sddth * 60) + 50;
                AddTopsdpp($sddth);
                $cron_sd = filemtime($cpath . "ReCodMod/x_cron/cron_time_sd");
                echo 'ddddddddd' . $cron_sd;
                if ($sddthf - $cron_sd < 10)
                 {
                  file_put_contents($cpath . "ReCodMod/x_cron/cron_time_sd", "");
                  usleep($sleep_rcon);
                  require $cpath . 'ReCodMod/functions/inc_functions2.php';
                  for ($i = 0; $i < 1; $i++)
                   {
                    require $cpath . 'ReCodMod/functions/inc_functions3.php';
                    usleep($sleep_rcon);
                    rcon('say ^1RCM bot ^7find problem with SD timelimit, and ^1RCM ^7solve it!', '');
                    usleep($sleep_rcon * 3);
                    rcon('map_restart', '');
                    if (!empty($db))
                      $db = NULL;
                    if (!empty($db1))
                      $db1 = NULL;
                    if (!empty($db2))
                      $db2 = null;
                    if (!empty($db3))
                      $db3 = NULL;
                    if (!empty($db4))
                      $db4 = NULL;
                    if (!empty($db5))
                      $db5 = NULL; 
				  if(!empty($connect))
                    fclose($connect);
                    exit;
                   }
                 }
                else
                 {
                  file_put_contents($cpath . "ReCodMod/x_cron/cron_time_sd", "");
                 }
               }
             }
            else if ($game_patch == 'cod4')
             {
              if (preg_match('/rotu/', $parseline, $xnon))
               {
                echo 'rotu? test';
               }
             }
           }
          else
           {
            $geosp = 'good';
           }
         }
        else
         {
          ++$x_stop_lp;
         }
       }
     }
   }
 }

?>