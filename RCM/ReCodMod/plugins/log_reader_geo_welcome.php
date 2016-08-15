<?php
//406:13 J;0;11;BLACK OPS III MASTER                          cod1_1.4
//5:37 J;02d45f0829c42b2a4460060012e5bbbe;0;^1LA^9|^7Rocca    cod4
if ($x_stop_lp == 0)
 {
  /////////////////SD GAMETYPE TIMELIMIT FIX/////////////////					
  if ($game_patch == 'cod1_1.1')
   {
    if (empty($geosp))
      $geosp = 'fuckxD';
    if ($geosp == 'sd')
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
      if ($sddthf - $cron_sd < 10) //50 if server has mapvote+endmap stats
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
          exit;
         }
       }
      else
       {
        file_put_contents($cpath . "ReCodMod/x_cron/cron_time_sd", "");
       }
     }
   }
  /////////////////SD GAMETYPE TIMELIMIT FIX/////////////////	
  if ($game_patch == 'cod1_1.1')
    list($noon, $idk, $nickname) = explode(';', $parseline);
  else
    list($noon, $guid, $idk, $nickname) = explode(';', $parseline);
  if (empty($guid))
    $guid = 'non';
  echo '-' . $guid . '-' . $idk . '-' . $nickname;
  $x4vvv = clearnamex2($nickname);
  $date  = date('Y.m.d H.i.s');
  if (strpos($parseline, 'J;') !== false)
   {
    $geoxx  = 0;
    $limitj = substr_count($parseline, ';'); // 3
    if ($limitj == 3)
     {
      //echo "\n[CNT] : [",$datetime, "] : ".$nickr." : ".$msgr;	
      $vote_cgu = 0;
      require $cpath . 'ReCodMod/functions/inc_functions2.php';
      for ($i = 0; $i < $player_cnt; $i++)
       {
        require $cpath . 'ReCodMod/functions/inc_functions3.php';
        if ((!$valid_id) || (!$valid_ping))
          Continue;
        require $cpath . 'ReCodMod/plugins/ban_fast_kick.php';
        $dropip = explode(".", $i_ip);
        $xdot   = '.';
        if ((strpos($nickname, $chistx) !== false) || (strpos($i_id, $idk) !== false))
         {
          if ( //!preg_match("/^bot\d+$/", $chistx, $tmp2n) || 
            (!empty($i_ip)) || !preg_match("/192.168/", $dropip[0] . $xdot . $dropip[1], $tmp2n) || !preg_match("/255.255/", $dropip[0] . $xdot . $dropip[1], $tmp2n) || !preg_match("/localhost/", $dropip[0] . $xdot . $dropip[1], $tmp2n) || !preg_match("/127.0.0.1/", $dropip[0] . $xdot . $dropip[1], $tmp2n))
           {
            $mdxxx   = md5(md5(md5($chistx)));
            $guidip  = $mdxxx . 'Z' . $i_ip;
            $i_namex = afdasfawf($i_name);
            $x_date  = date('Y-m-d H:i:s');
            $x_namex = clearnamex($i_name);
            //$vip     = (array_search($i_name, $r_adm, true) !== false);
            require $cpath . 'ReCodMod/plugins/ban1.php';
            if (($i_ping != 111) && ($i_ping != '999'))
             {
              $i_namex = afdasfawf($i_name);
              $x_date  = date('Y-m-d H:i:s');
              $ts1     = strtotime($x_date);
              try
               {
                $db4  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db4.sqlite');
                $sql  = "SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 1";
                $stat = $db4->query($sql)->fetchColumn();
                if ($stat > 0)
                 {
                  $result = $db4->query($sql);
                  foreach ($result as $row)
                   {
                    $ipcc   = $row['x_db_ip'];
                    $datecc = $row['x_db_date'];
                    //60 * 60 * 24 * 14  - two weeks
                    //60 * 60 * 2        - two hours
                    if (empty($geosp))
                      $geosp = 'x';
                    if ($geosp == 'sd')
                      $newwtimer = (60 * 60 * 2);
                    else
                      $newwtimer = (60);
                    if (abs(strtotime($datecc) - $ts1) > $newwtimer)
                     {
                      if ($x_stop_lp == 0)
                       {
                        $idcc = $row['id'];
                        if ((empty($i_ip)) || (strpos($i_ip, '192.168') !== false) || (strpos($i_ip, '255.255') !== false) || (strpos($i_ip, 'localhost') !== false) || (strpos($i_ip, '127.0.0.1') !== false))
                          $i_ip = '37.120.56.200';
                        $db4->exec("UPDATE x_db_players SET x_db_date='{$x_date}' WHERE x_db_ip='{$i_ip}'");
                        $gi     = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                        $record = geoip_record_by_addr($gi, $i_ip);
                        $xxxnnn = ($record->country_name);
                        if ($geox == 1)
                          $xxxnw = ($record->country_name . ", " . $record->city . "");
                        else
                          $xxxnw = ($record->country_name);
                        $date = date('Y.m.d H.i.s');
                        if ($x_stop_lp == 0)
                         {
                          if ($guids == 0)
                           {
                            $mdguid = md5(md5(md5($nickname)));
                            $db3    = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
                            $sql    = "select * FROM x_db_play_stats where s_player='$x4vvv' and s_guid = '$mdguid' limit 1";
                            $stat   = $db3->query($sql)->fetchColumn();
                            if (empty($stat))
                             {
                              $db3->exec("INSERT INTO x_db_play_stats (s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle) 
VALUES ('$x4vvv','999','1','1','0','0','0','0','$date','','','$nickname','$mdguid','$xxxnnn','0','$idk','0')");
                             }
                            else
                              $db3->exec("update x_db_play_stats set s_fall='$idk' where s_player='$x4vvv'");
                           }
                          else
                           {
                            $db3  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
                            $sql  = "select * FROM x_db_play_stats where s_player='$x4vvv' and s_guid = '$guid' limit 1";
                            $stat = $db3->query($sql)->fetchColumn();
                            if (empty($stat))
                             {
                              $db3->exec("INSERT INTO x_db_play_stats 
(s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle) 
VALUES ('$x4vvv','999','1','1','0','0','0','0','$date','','','$nickname','$guid','$xxxnnn','0','$idk','0')");
                             }
                           }
                          usleep($sleep_rcon);
                          rcon('say ' . $welcome_x2 . ' ' . $nickname . ' ^3from ^6[^2' . $xxxnw . '^6] ^1id#' . $idcc . ' ^7' . $website . '', '');
                          ++$x_stop_lp;
                         }
                       }
                     }
                    else
                     {
                      ////echo '  Ne proshlo 5 chasov  '.$tfinishh = (microtime(true) - $start);
                      ++$x_stop_lp;
                     }
                   }
                 }
                else
                 {
                  if ($x_stop_lp == 0)
                   {
                    if ((empty($i_ip)) || (strpos($i_ip, '192.168') !== false) || (strpos($i_ip, '255.255') !== false) || (strpos($i_ip, 'localhost') !== false) || (strpos($i_ip, '127.0.0.1') !== false))
                      $i_ip = '37.120.56.200';
                    $gi     = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                    $record = geoip_record_by_addr($gi, $i_ip);
                    $xxxnnn = ($record->country_name);
                    if ($geox == 1)
                      $xxxnw = ($record->country_name . ", " . $record->city . "");
                    else
                      $xxxnw = ($record->country_name);
                    $date = date('Y.m.d H.i.s');
                    $t    = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
                    $x_ai = explode(" / ", $t);
                    if ($guids == 0)
                     {
                      $mdguid = md5(md5(md5($nickname)));
                      $db3    = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
                      $sql    = "select * FROM x_db_play_stats where s_player='$x4vvv' and s_guid = '$mdguid' limit 1";
                      $stat   = $db3->query($sql)->fetchColumn();
                      if (empty($stat))
                       {
                        $db3->exec("INSERT INTO x_db_play_stats (s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle) 
VALUES ('$x4vvv','999','1','1','0','0','0','0','$date','','','$nickname','$mdguid','$xxxnnn','0','$idk','0')");
                       }
                      else
                        $db3->exec("update x_db_play_stats set s_fall='$idk' where s_player='$x4vvv'");
                     }
                    else
                     {
                      $db3  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
                      $sql  = "select * FROM x_db_play_stats where s_player='$x4vvv' and s_guid = '$guid' limit 1";
                      $stat = $db3->query($sql)->fetchColumn();
                      if (empty($stat))
                       {
                        $db3->exec("INSERT INTO x_db_play_stats 
(s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle) 
VALUES ('$x4vvv','999','1','1','0','0','0','0','$date','','','$nickname','$guid','$xxxnnn','0','$idk','0')");
                       }
                     }
                    $db4->exec("INSERT INTO x_db_players (x_db_name, x_db_ip, x_db_ping, x_db_date, x_db_warn)
    VALUES ('$x_ai[1]', '$x_ai[2]', '$mdxxx', '$x_date', '0')");
                    echo 'W...';
                    if ($x_stop_lp == 0)
                     {
                      usleep($sleep_rcon);
                      rcon('say ' . $welcome_x . ' ' . $nickname . ' ^3from ^6[^2' . $xxxnw . '^6]', '');
                      ++$x_stop_lp;
                     }
                   }
                  //return;
                 }
                $result = null;
                $db4    = NULL;
                $db3    = NULL;
               }
              catch (PDOException $e)
               {
                print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
               }
             }
           }
         }
       } ///end loop
      //ob_end_flush(); 
      echo '   =W=   ' . $tfinishh = (microtime(true) - $start);
      //return;
     }
   }
  ///////////////////////////
 }
?>
