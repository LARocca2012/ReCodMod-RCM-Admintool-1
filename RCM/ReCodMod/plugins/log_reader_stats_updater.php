 <?php
if ($x_stop_lp == 0)
 {
  if ((strpos($parseline, 'J;') != false) || (strpos($parseline, 'InitGame: ') != false) || (strpos($parseline, 'RestartGame:') != false) || (strpos($parseline, 'L;') != false) || (strpos($parseline, 'W;') != false) || (strpos($parseline, '-----------------------------------') != false))
   {
    //echo'--';
   }
  else if (strpos($parseline, 'Q;') != false)
   {
    if ($game_patch == 'cod1_1.1')
     {
      //--------  104:46 Q;6;xxx
      list($x1e, $x2e, $x4e) = explode(';', $parseline);
      ///////////////error fix
      $counttdot = substr_count($parselinetxt, ';');
      if ($counttdot > 2)
        $x_stop_lp = 2;
      ///////////////error fix
     }
    else
     {
      //--------  4471:49Q;0;2;xxx
      ///////////////error fix
      $counttdot = substr_count($parselinetxt, ';');
      if ($counttdot > 3)
        $x_stop_lp = 3;
      ///////////////error fix		
      list($x1e, $x2e, $x3e, $x4e) = explode(';', $parseline);
     }
    if ($x_stop_lp == 0)
     {
      if ($guids == 1)
        $x4e = $x2e;
      $x4vvv = clearnamex2($x4e);
      try
       {
        usleep(10300);
        $db3  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
        $sql  = "select * FROM x_db_play_stats where s_player='$x4vvv' limit 1";
        $res  = $db3->query("select * FROM x_db_play_stats where s_player='$x4vvv' limit 1");
        $stat = $db3->query($sql)->fetchColumn();
        if ($stat > 0)
         {
          foreach ($res as $row)
           {
            $ippppp = $row['s_city'];
            if ($ippppp != 0)
              $x4i = $ippppp;
            else
              $x4i = '';
            echo ' - ' . $x4i . '=====';
           }
          $sql  = "select * FROM x_db_play_stats where s_player='$x4vvv' and (s_city is null OR s_city = '') limit 1";
          $stat = $db3->query($sql)->fetchColumn();
          if ($stat > 0)
           {
           }
          else
           {
            if (!empty($ippppp))
              $x4i = $ippppp;
            else
              $x4i = '';
            if (!empty($ippppp))
             {
              /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
              /////////////////////////////////////FALSE LOST CONNECT FIX GUID/////////////////////////////////////////////////
              /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
              if ($guids == 0)
                $mdguid = md5(md5(md5($x4e)));
              else
                $mdguid = $x2e;
              $sqlTotal = $db3->prepare("SELECT SUM(s_kills) s_kills FROM x_db_play_stats WHERE s_city='$x4i'");
              $sqlTotal->execute();
              $totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
              $kilsss      = $totalResult[0];
              $sqlTotal    = $db3->prepare("SELECT SUM(s_deaths) s_deaths FROM x_db_play_stats WHERE s_city='$x4i'");
              $sqlTotal->execute();
              $totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
              $deathsss    = $totalResult[0];
              $sqlTotal    = $db3->prepare("SELECT SUM(s_grenade) s_grenade FROM x_db_play_stats WHERE s_city='$x4i'");
              $sqlTotal->execute();
              $totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
              $nadesss     = $totalResult[0];
              $sqlTotal    = $db3->prepare("SELECT SUM(s_heads) s_heads FROM x_db_play_stats WHERE s_city='$x4i'");
              $sqlTotal->execute();
              $totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
              $headsss     = $totalResult[0];
              $sqlTotal    = $db3->prepare("SELECT SUM(s_suicids) s_suicids FROM x_db_play_stats WHERE s_city='$x4i'");
              $sqlTotal->execute();
              $totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
              $suicides    = $totalResult[0];
              $sqlTotal    = $db3->prepare("SELECT SUM(s_melle) s_melle FROM x_db_play_stats WHERE s_city='$x4i'");
              $sqlTotal->execute();
              $totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
              $melles      = $totalResult[0];
              $result      = $db3->query("SELECT * FROM x_db_play_stats WHERE s_city='$x4i' ORDER BY (s_kills+0) DESC LIMIT 1");
              foreach ($result as $row)
               {
                $playername = $row['s_player'];
                $place      = $row['s_place'];
                $ipm        = $row['s_kills'];
                $iratio     = $row['s_ratio'];
                $iskill     = $row['s_skill'];
                $heads      = $row['s_heads'];
                $nades      = $row['s_grenade'];
                $lasttime   = $row['s_lasttime'];
                $timee      = $row['s_time'];
                $guid       = $row['s_guid'];
                $clc        = $row['s_clear'];
                $cgeo       = $row['s_geo'];
                echo ' - ' . $place;
                echo ' - ' . $playername;
                echo ' - ' . $lasttime;
                echo ' - ' . $timee;
                echo ' - ' . $guid;
                echo ' - ' . $clc;
                echo ' - ' . $nades;
                echo ' - ' . $heads;
                echo ' - ' . $kilsss;
                echo ' - ' . $deathsss . ' - ';
                AddToLogGUID("[" . $datetime . "] " . $x4i . " - " . $place . " P. " . $playername . " L. " . $lasttime . " T. " . $timee . " - " . $guid . " K. " . $kilsss . " D. " . $deathsss . " H. " . $heads . " G. " . $nades . " N. " . $clc . " EXIT PLAYER");
                usleep(7000);
                // DELETE DUBLICATES
                $result = $db3->query("DELETE FROM x_db_play_stats WHERE s_city='$x4i'");
                usleep(3000);
                // INSERT NEW TABLE WITHOUT IP ADRESS,        BE GOOD ADD THEIR CITY *(
                $db3->exec("INSERT INTO x_db_play_stats (s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle)  
 VALUES ('$x4vvv','$place','$kilsss','$deathsss','$nadesss','$iskill','$iratio','$headsss','$timee','$lasttime','','$clc','$mdguid','$cgeo','$suicides','','$melles')");
               }
             }
           }
         }
        //$res = null;
        //$db3 = NULL;
       }
      catch (PDOException $e)
       {
        print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
       }
      echo '-> EXIT ' . $x4e . ' ' . $tfinishh = (microtime(true) - $start);
      ++$x_stop_lp;
      /////////////////////////////////
     }
   }
  else
   {
    //echo'+';
    if (strpos($parseline, 'K;') != false)
     {
      if ($x_stop_lp == 0)
       {
        //echo '-------------';
        ///////////////////////////
        require $cpath . 'cfg/_connection.php';
        require $cpath . 'cfg/_settings.php';
        ///////////////////////////////////////////////////////////////////////////////////////////////
        $parselinetxt = delxkll($parseline);
        ///////////////error fix
        $counttdot    = substr_count($parselinetxt, ';');
        if ($counttdot < 9)
          $x_stop_lp = 10;
        ///////////////error fix
        /////736:04 K;6;allies;NOOB1;7;allies;NOOB2   ;mosin_nagant_mp;107;MOD_PISTOL_BULLET;torso_upper
        if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
         {
          list($vv1, $iddeath, $vv3, $death, $idkill, $vv6, $kill, $vv8, $vv9c, $vv12n, $xxk) = explode(';', $parselinetxt);
          list($vv12, $vv22, $vv32, $death, $vv42, $vv62, $kill, $vv82, $vv92c) = explode(';', $parselinetxt);
         }
        else if (($game_patch == 'cod2') || ($game_patch == 'cod4'))
         {
          //207:29 K;0000000066b3268b76693bba8501807b;2;;Darth_Abaddon;000000003fa9b346d09079aa1b1ef56c;0;;LA|Rocca;m16_mp;135;MOD_MELEE;neck
          ///////////////error fix
          ///////////////error fix
          list($vv1, $iddeath, $vv3, $vv4, $death, $vv6, $idkill, $vv8, $kill, $vv10, $vv11, $vv12n, $vv13) = explode(';', $parselinetxt);
          list($vv12, $vv22, $vv32, $vv42, $death, $vv62, $idkill, $vv82, $kill, $vv102, $vv112, $vv113) = explode(';', $parselinetxt);
         }
        else
         {
          //1663:32K;0;19;allies;Qazaq RUS;0;17;axis;TheCaza;kar98k_mp;144;MOD_RIFLE_BULLET;torso_lower
          list($vv1, $iddeath, $vv3, $vv4, $death, $vv6, $idkill, $vv8, $kill, $vv10, $vv11, $vv12n, $vv13) = explode(';', $parselinetxt);
          list($vv12, $vv22, $vv32, $vv42, $death, $vv62, $idkill, $vv82, $kill, $vv102, $vv112, $vv113) = explode(';', $parselinetxt);
         }
        if ($game_patch == 'cod1_1.1')
          echo "\n[kill] : [", $datetime, "] : [" . $kill . " -> " . $death . "] ";
        else
          echo "\n[kill] : [", $datetime, "] : [" . $kill . " -> " . $death . "]  [" . $vv13 . "]";
        if ($game_patch == 'cod1_1.1')
          $vv13 = $xxk;
        /*
        $x_kill = quotemeta(htmlspecialchars($kill, ENT_QUOTES));
        $x_death = quotemeta(htmlspecialchars($death, ENT_QUOTES));
        $xc_kill = quotemeta(htmlspecialchars($kill, ENT_QUOTES));
        $xc_death = quotemeta(htmlspecialchars($death, ENT_QUOTES));
        */
        $x_kill   = clearnamex2($kill);
        $x_death  = clearnamex2($death);
        $xc_kill  = clearnamex2($kill);
        $xc_death = clearnamex2($death);
        $date     = date('Y.m.d H.i.s');
        if ($game_patch == 'cod1_1.2')
         {
          if ((strpos($vv13, 'helmet') !== false) || (strpos($vv13, 'head') !== false) || (strpos($vv113, 'MOD_MELEE') !== false))
           {
            require $cpath . 'ReCodMod/functions/inc_functions2.php';
            for ($i = 0; $i < $player_cnt; $i++)
             {
              require $cpath . 'ReCodMod/functions/inc_functions3.php';
              if ((!$valid_id) || (!$valid_ping))
                Continue;
              if (strpos($vv13, 'helmet') !== false)
               {
                usleep($sleep_rcon);
                rcon('say ^6 ^3Blow up helmet by ^7' . $kill . '  ^1---> ^7 ' . $death, '');
               }
              else if (strpos($vv13, 'head') !== false)
               {
                usleep($sleep_rcon);
                rcon('say ^6 ^3HeadShot made by ^7' . $kill . '  ^1---> ^7 ' . $death, '');
               }
              else if (strpos($vv113, 'MOD_MELEE') !== false)
               {
                usleep($sleep_rcon);
                rcon('say ^6 ^3Melee(bash) made by ^7' . $kill . '  ^1---> ^7 ' . $death, '');
               }
             }
           }
         }
        if ($kill)
         {
          $mdxxx = md5(md5(md5($kill)));
          if ($guids == 0)
           {
            $mdguid = md5(md5(md5($kill)));
           }
          else
           {
            $mdguid = $vv6;
            $mdxxx  = $vv6;
           }
          try
           {
            $db3  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
            $sql  = "select * FROM x_db_play_stats where s_player='$x_kill' and s_guid='' limit 1";
            $stat = $db3->query($sql)->fetchColumn();
            if ($stat > 0)
             {
              require $cpath . 'ReCodMod/functions/inc_functions2.php';
              for ($i = 0; $i < $player_cnt; $i++)
               {
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                  Continue;
                //if (substr(trim($kill), 0, 5) == substr(trim($chistx), 0, 5)) {
                if (trim($idkill) == trim($i_id))
                 {
                  if ((empty($i_ip)) || (strpos($i_ip, '192.168') !== false) || (strpos($i_ip, '255.255') !== false) || (strpos($i_ip, 'localhost') !== false) || (strpos($i_ip, '127.0.0.1') !== false))
                    $i_ip = '37.120.56.200';
                  $forumip = $i_ip;
                  $gi      = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                  $record  = geoip_record_by_addr($gi, $i_ip);
                  $geoz    = ($record->country_name);
                  usleep(1000);
                  $db3->exec("update x_db_play_stats set s_city='$forumip', s_guid='$mdxxx', s_geo='$geoz', s_fall='$idkill' where s_player='$x_kill'");
                  AddToLogGUID("[" . $datetime . "] " . $x_kill . " - " . $kill . " - " . $mdxxx . " UPDATE GUID");
                 }
               }
             }
            // $res = null;
            // $db3 = NULL;
           }
          catch (PDOException $e)
           {
            print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
           }
          try
           {
            $db3  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
            $sql  = "select * FROM x_db_play_stats where s_player='$x_kill' limit 1";
            $stat = $db3->query($sql)->fetchColumn();
            if (empty($stat))
             {
              usleep(1000);
              $db3->exec("INSERT INTO x_db_play_stats (s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle)  
 VALUES ('$x_kill','','','','','','','','','','$date','','$kill','','','','$idkill','')");
              AddToLogGUID("[" . $datetime . "] " . $x_kill . " - " . $kill . " - " . $mdxxx . " ADD GUID");
              require $cpath . 'ReCodMod/functions/inc_functions2.php';
              for ($i = 0; $i < $player_cnt; $i++)
               {
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                  Continue;
                //if (substr(trim($kill), 0, 5) == substr(trim($chistx), 0, 5)) {
                if (trim($idkill) == trim($i_id))
                 {
                  $forumip = $i_ip;
                  $gi      = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                  $record  = geoip_record_by_addr($gi, $i_ip);
                  $geoz    = ($record->country_name);
                  usleep(1000);
                  $db3->exec("update x_db_play_stats set s_city='$forumip', s_guid='$mdxxx', s_geo='$geoz', s_fall='$idkill' where s_player='$x_kill'");
                  AddToLogGUID("[" . $datetime . "] " . $x_kill . " - " . $kill . " - " . $mdxxx . " UPDATE GUID");
                 }
               }
             }
            // $res = null;
            // $db3 = NULL;
           }
          catch (PDOException $e)
           {
            print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
           }
          try
           {
            $db3  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
            $sql  = "select * FROM x_db_play_stats where s_player='$x_kill' and (s_city is null OR s_city = '') limit 1";
            $stat = $db3->query($sql)->fetchColumn();
            if ($stat > 0)
             {
              require $cpath . 'ReCodMod/functions/inc_functions2.php';
              for ($i = 0; $i < $player_cnt; $i++)
               {
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                  Continue;
                if (trim($idkill) == trim($i_id))
                 {
                  if ((empty($i_ip)) || (strpos($i_ip, '192.168') !== false) || (strpos($i_ip, '255.255') !== false) || (strpos($i_ip, 'localhost') !== false) || (strpos($i_ip, '127.0.0.1') !== false))
                    $i_ip = '37.120.56.200';
                  $forumip = $i_ip;
                  $gi      = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                  $record  = geoip_record_by_addr($gi, $i_ip);
                  $geoz    = ($record->country_name);
                  usleep(1000);
                  $db3->exec("update x_db_play_stats set s_city='$forumip', s_guid='$mdxxx', s_fall='$idkill' where s_player='$x_kill'");
                  AddToLogGUID("[" . $datetime . "] " . $x_kill . " - " . $kill . " - " . $mdxxx . " UPDATE IP " . $forumip . " ");
                 }
               }
             }
           }
          catch (PDOException $e)
           {
            print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
           }
          try
           {
            $db3 = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            $zzk = rand(0, 3);
            if ($namefaker == 0)
              $zzk = 'FUCK';
            if ($zzk == '1')
             {
              require $cpath . 'ReCodMod/functions/inc_functions2.php';
              for ($i = 0; $i < $player_cnt; $i++)
               {
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                  Continue;
                $x_namex = clearnamex($i_name);
                $x_nickx = clearnamex($kill);
                $mmm     = substr(trim($x_nickx), 0, 5);
                $nnn     = substr(trim($x_namex), 0, 5);
                if (trim($i_id) == trim($idkill))
                 {
                  $gi      = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                  $record  = geoip_record_by_addr($gi, $i_ip);
                  $geoz    = ($record->country_name);
                  //  $sqlg  = "select * FROM x_db_play_stats where (s_guid = '$mdxxx' and s_kills>='100' and s_ratio>='2' and s_geo = '$geoz') limit 1";
                  //  $statr = $db3->query($sqlg)->fetchColumn();
                  $resultl = $db3->query("select * FROM x_db_play_stats where s_guid = '$mdxxx' limit 1");
                  foreach ($resultl as $row)
                   {
                    $guidddz = $row['s_guid'];
                    $killlz  = $row['s_kills'];
                    $ratiooz = $row['s_ratio'];
                    $geooz   = $row['s_geo'];
                   }
                  $geoz = trim($geoz);
                  if (!empty($geooz))
                    $geooz = trim($geooz);
                  if (!empty($geooz))
                   {
                    if (($geooz != $geoz) && ($ratiooz > '0') || ($geooz != $geoz) && ($ratiooz > 0))
                     {
                      if ((empty($i_ip)) || (strpos($i_ip, '192.168') !== false) || (strpos($i_ip, '255.255') !== false) || (strpos($i_ip, 'localhost') !== false) || (strpos($i_ip, '127.0.0.1') !== false))
                        $i_ip = '37.120.56.200';
                      $db4  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db4.sqlite');
                      $sql  = "SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 2";
                      $stat = $db4->query($sql)->fetchColumn();
                      if ($stat > 0)
                       {
                        $result = $db4->query($sql);
                        $xix    = 0;
                        foreach ($result as $row)
                         {
                          $inamekk[$xix] = $row['x_db_name'];
                          $xix++;
                         }
                        if (empty($inamekk[0]))
                         {
                          $inamekk[0] = '';
                          $ilinex0    = '';
                         }
                        else
                         {
                          $ilinex0 = ' / ';
                         }
                        if (empty($inamekk[1]))
                         {
                          $inamekk[1] = '';
                          $ilinex1    = '';
                         }
                        else
                         {
                          $ilinex1 = ' / ';
                         }
                       }
                      if ($x_stop_lpst == 0)
                       {
                        echo "\n $i_name City Name faker! \n";
                        if ($fakealert == 1)
                         {
                          usleep($sleep_rcon * 3);
                          rcon('say ^6[^1RCM^3bot^6] ^1WARNING YOU! ^7' . $inamekk[0] . $ilinex0 . $inamekk[1] . $ilinex1 . '  ^3you USED ^7' . $kill . ',  ^1WANT BAN?!', '');
                         }
                        if ($namefakerkick == 1)
                         {
                          usleep($sleep_rcon * 7);
                          rcon('kick ' . $kill . '', '');
                         }
                        if ((empty($i_ip)) || (strpos($i_ip, '192.168') !== false) || (strpos($i_ip, '255.255') !== false) || (strpos($i_ip, 'localhost') !== false) || (strpos($i_ip, '127.0.0.1') !== false))
                          $i_ip = '37.120.56.200';
                        if (empty($inamekk[0]))
                         {
                          $inamekk[0] = '';
                          $ilinex0    = '';
                         }
                        else
                         {
                          $ilinex0 = ' / ';
                         }
                        if (empty($inamekk[1]))
                         {
                          $inamekk[1] = '';
                          $ilinex1    = '';
                         }
                        else
                         {
                          $ilinex1 = ' / ';
                         }
                        AddToLogfakerz("[" . $datetime . "] WARNING!!! " . $kill . " aka " . $inamekk[0] . $ilinex0 . $inamekk[1] . $ilinex1 . " - " . $mdxxx . " - " . $i_ip . " ");
                        ++$x_stop_lpst;
                       }
                     }
                   }
                 }
               }
             }
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////					
            $sql  = "select * FROM x_db_play_stats where s_player='$x_kill' and s_guid = '$mdxxx' limit 1";
            $stat = $db3->query($sql)->fetchColumn();
            if (empty($stat))
             {
              echo 'fakekill';
              if (empty($fakealert))
                $fakealert = 1;
              if ($fakealert == 0)
               {
                $recv[0] = '1';
                $recv[1] = '2';
                $recv[2] = '3';
                $recv[3] = '4';
                $recv[4] = '5';
                $recv[5] = '6';
                $recv[6] = '7';
                $recv[7] = '8';
                $recv[8] = '9';
                $zzk     = rand(0, 8);
                if ($zzk == '4')
                 {
                  require $cpath . 'ReCodMod/functions/inc_functions2.php';
                  for ($i = 0; $i < 1; $i++)
                   {
                    require $cpath . 'ReCodMod/functions/inc_functions3.php';
                    if ((!$valid_id) || (!$valid_ping))
                      Continue;
                    //usleep($sleep_rcon*5);
                    //rcon('say ^6  ^7'.$kill.' ^3FAKE, change YOUR nickname, no $ixz.'stats update ^7$ixz.'guid: '.$mdxxx.'', '');
                    usleep($sleep_rcon);
                    rcon('say ^6  ^7' . $kill . ' ^3possible FAKEname, blocked ' . $ixz . 'stats update ^7' . $ixz . 'guid: ' . $mdxxx . '', '');
                    //usleep($sleep_rcon*5);
                    AddToLogfakerz("[" . $datetime . "] " . $kill . " - " . $mdxxx . " ");
                    //rcon('kick '.$kill.'', '');
                   }
                 }
               }
              ++$x_stop_lpst;
              //return;
             }
            else
             {
              echo 'okfrag';
              //echo $vv12n;
             }
            //$result = null;
            $db4 = NULL;
           }
          catch (PDOException $e)
           {
            print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
           }
          if ($x_stop_lpst == 0)
           {
            if ($kill)
             {
              try
               {
                $db3 = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
                if ($guids == 0)
                 {
                  $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_player='{$x_kill}'");
                  foreach ($result as $row)
                   {
                    $kl   = $row['s_kills'];
                    $dth  = $row['s_deaths'];
                    $ply  = $row['s_player'];
                    $slll = $row['s_skill'];
                    if ($kl <= 0 || $dth <= 0)
                     {
                     }
                    else
                     {
                      $skil_x = round((($kl - $dth) * ($kl / $dth) * 10));
                      if ($kl == 0)
                        $ratio_x = ($kl / 1);
                      else
                        $ratio_x = ($kl / $dth);
                      $ratio_n = substr($ratio_x, 0, 19);
                      usleep(1000);
                      $db3->exec("UPDATE x_db_play_stats SET  s_lasttime='{$dtx2}', s_skill='{$skil_x}', s_ratio='{$ratio_n}' WHERE s_player='{$x_kill}' and s_fall='{$idkill}'");
                      echo '    ' . substr($tfinishh = (microtime(true) - $start), 0, 4);
                     }
                   }
                  $sql  = "SELECT * FROM x_db_play_stats WHERE s_player='$x_kill' and s_fall='{$idkill}'";
                  $stat = $db3->query($sql)->fetchColumn();
                  if ($stat > 0)
                   {
                    if (strpos($vv12n, 'MOD_GRENADE_SPLASH') !== false)
                      $db3->exec("UPDATE x_db_play_stats SET s_grenade=s_grenade +1 WHERE s_player='{$x_kill}'");
                    if (strpos($vv13, 'head') !== false)
                      $db3->exec("UPDATE x_db_play_stats SET s_heads=s_heads +1 WHERE s_player='{$x_kill}'");
                    if (strpos($vv12n, 'MOD_MELEE') !== false)
                      $db3->exec("UPDATE x_db_play_stats SET s_melle=s_melle +1 WHERE s_player='{$x_kill}'");
                    if (strpos($vv12n, 'MOD_SUICIDE') !== false)
                      echo 'suicide';
                    else
                      $db3->exec("UPDATE x_db_play_stats SET s_kills=s_kills +1 WHERE s_player='{$x_kill}'");
                   }
                  else
                   {
                    usleep(1000);
                    $db3->exec("INSERT INTO x_db_play_stats (s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle)  
 VALUES ('$x_kill','','','','','','','','','','$date','','$kill','','','','$vv3','')");
                   }
                 }
                else
                 {
                  $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_guid='{$vv6}'");
                  foreach ($result as $row)
                   {
                    $kl   = $row['s_kills'];
                    $dth  = $row['s_deaths'];
                    $ply  = $row['s_player'];
                    $slll = $row['s_skill'];
                    if ($kl <= 0 || $dth <= 0)
                     {
                     }
                    else
                     {
                      $skil_x = round((($kl - $dth) * ($kl / $dth) * 10));
                      if ($kl == 0)
                        $ratio_x = ($kl / 1);
                      else
                        $ratio_x = ($kl / $dth);
                      $ratio_n = substr($ratio_x, 0, 19);
                      usleep(1000);
                      $db3->exec("UPDATE x_db_play_stats SET  s_lasttime='{$dtx2}', s_skill='{$skil_x}', s_ratio='{$ratio_n}' WHERE s_guid='{$vv6}'");
                      echo '    ' . substr($tfinishh = (microtime(true) - $start), 0, 4);
                     }
                   }
                  $sql  = "SELECT * FROM x_db_play_stats WHERE s_guid='$vv6'";
                  $stat = $db3->query($sql)->fetchColumn();
                  if ($stat > 0)
                   {
                    if (strpos($vv12n, 'MOD_GRENADE_SPLASH') !== false)
                      $db3->exec("UPDATE x_db_play_stats SET s_grenade=s_grenade +1 WHERE s_guid='{$vv6}'");
                    if (strpos($vv13, 'head') !== false)
                      $db3->exec("UPDATE x_db_play_stats SET s_heads=s_heads +1 WHERE s_guid='{$vv6}'");
                    if (strpos($vv12n, 'MOD_SUICIDE') !== false)
                      echo 'suicide';
                    else
                      $db3->exec("UPDATE x_db_play_stats SET s_kills=s_kills +1 WHERE s_guid='{$vv6}'");
                   }
                  else
                   {
                    usleep(3000);
                    $db3->exec("INSERT INTO x_db_play_stats (s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle)  
 VALUES ('$x_kill','','','','','','','','','','$date','','$kill','$vv6','','','$idkill','')");
                   }
                 }
                //$result = null;
                //$db = NULL;
               }
              catch (PDOException $e)
               {
                print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
               }
              if ($death)
               {
                try
                 {
                  $db3 = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
                  if ($guids == 0)
                   {
                    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_player='{$xc_death}'");
                    foreach ($result as $row)
                     {
                      $kl   = $row['s_kills'];
                      $dth  = $row['s_deaths'];
                      $ply  = $row['s_player'];
                      $slll = $row['s_skill'];
                      if ($kl <= 0 || $dth <= 0)
                       {
                       }
                      else
                       {
                        $skil_x = round((($kl - $dth) * ($kl / $dth) * 10));
                        if ($kl == 0)
                          $ratio_x = ($kl / 1);
                        else
                          $ratio_x = ($kl / $dth);
                        $ratio_n = substr($ratio_x, 0, 19);
                        usleep(1000);
                        $db3->exec("UPDATE x_db_play_stats SET s_skill='{$skil_x}', s_ratio='{$ratio_n}' WHERE s_player='{$xc_death}'");
                        echo '    ' . substr($tfinishh = (microtime(true) - $start), 0, 6);
                       }
                     }
                    $sql  = "SELECT * FROM x_db_play_stats WHERE s_player='$xc_death'";
                    $stat = $db3->query($sql)->fetchColumn();
                    if ($stat > 0)
                     {
                      if (strpos($vv12n, 'MOD_SUICIDE') !== false)
                        $db3->exec("UPDATE x_db_play_stats SET s_suicids=s_suicids +1 WHERE s_player='{$xc_death}'");
                      if (strpos($vv12n, 'MOD_FALLING') !== false)
                        $db3->exec("UPDATE x_db_play_stats SET s_fall=s_fall +1 WHERE s_player='{$xc_kill}'");
                      $db3->exec("UPDATE x_db_play_stats SET s_deaths=s_deaths +1 WHERE s_player='{$xc_death}'");
                      echo '    ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
                     }
                    else
                     {
                      //
                     }
                   }
                  else
                   {
                    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_guid='{$vv22}'");
                    foreach ($result as $row)
                     {
                      $kl   = $row['s_kills'];
                      $dth  = $row['s_deaths'];
                      $ply  = $row['s_player'];
                      $slll = $row['s_skill'];
                      if ($kl <= 0 || $dth <= 0)
                       {
                       }
                      else
                       {
                        $skil_x = round((($kl - $dth) * ($kl / $dth) * 10));
                        if ($kl == 0)
                          $ratio_x = ($kl / 1);
                        else
                          $ratio_x = ($kl / $dth);
                        $ratio_n = substr($ratio_x, 0, 19);
                        usleep(1000);
                        $db3->exec("UPDATE x_db_play_stats SET s_skill='{$skil_x}', s_ratio='{$ratio_n}' WHERE s_guid='{$vv22}'");
                        echo '    ' . substr($tfinishh = (microtime(true) - $start), 0, 6);
                       }
                     }
                    $sql  = "SELECT * FROM x_db_play_stats WHERE s_guid='$vv22'";
                    $stat = $db3->query($sql)->fetchColumn();
                    if ($stat > 0)
                     {
                      if (strpos($vv12n, 'MOD_SUICIDE') !== false)
                        $db3->exec("UPDATE x_db_play_stats SET s_suicids=s_suicids +1 WHERE s_guid='{$vv6}'");
                      if (strpos($vv12n, 'MOD_FALLING') !== false)
                        $db3->exec("UPDATE x_db_play_stats SET s_fall=s_fall +1 WHERE s_guid='{$vv22}'");
                      $db3->exec("UPDATE x_db_play_stats SET s_deaths=s_deaths +1 WHERE s_guid='{$vv22}'");
                      echo '    ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
                     }
                    else
                     {
                      //
                     }
                   }
                  //$result = null;
                  //$db3    = NULL;
                 }
                catch (PDOException $e)
                 {
                  print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
                 }
               }
             }
            ++$x_stop_lp;
            //return;
           }
         }
        if ($deathv !== false)
         {
          ++$x_stop_lp;
          //return;
         }
        ++$x_stop_lp;
       }
     }
   }
 }
?> 

