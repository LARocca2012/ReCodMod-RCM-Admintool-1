<?php
if ($x_stop_lp == 0)
 {
  if (strpos($msgr, $ixz . 'ban ') !== false)
   {
    //$knownplayr = 0;
    echo "\n[ADB] : [", $datetime, "] : " . $nickr . " : " . $msgr;
    $r_ch = trim($chistx);
    //$vipt = (array_search($r_ch, $r_adm, true) !== false);
    if ($web_con == '0')
     {
      list($i1p, $i2p, $i3p, $i4p) = explode('.', $i_ip);
      $ipt = (array_search($i1p . '.' . $i2p . '.' . $i3p, $r_admi, true) !== false);
     }
    else if (($web_con == '1') && ($x_stop_lp == 0))
     {
      try
       {
        if (empty($adminlists))
          $db = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db1.sqlite');
        else
          $db = new PDO('sqlite:' . $adminlists);
        ////////////////////////////
        if (empty($bannlist))
          $db2 = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db2.sqlite');
        else
          $db2 = new PDO('sqlite:' . $bannlist);
        ////////////////////////////
        $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
        ////////////////////////////////////////////////////////////////////NEW DOWN AT THE LIST   
        // list($nickr, $msgr) = explode(' % ', $parselinetxt);  
        list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
        $i_namex = chatrr($i_name);
        $tk      = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
        $kski    = explode(" / ", $tk);
        if (strpos(chatrr($nickr), $kski[1]) !== false)
          $unkwnplyersx = $i_id;
        foreach ($result as $row)
         {
          $adm_ip  = $row['s_adm'];
          $a_grp   = $row['s_group'];
          $adm_ip  = trim($adm_ip);
          $i_ip    = trim($i_ip);
          $kski[1] = trim($kski[1]);
          $nickr   = trim($nickr);
          if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
            $jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ip) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555)) || (array_search(strtolower($i_ip), $adminIP, true) !== false));
          else
            $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false) || (array_search(strtolower($i_ip), $adminIP, true) !== false) || ($adm_ip == $i_ip) && ($kski[0] == $idnum) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555)));
          if ($jjj)
           {
            ++$knownplayr;
            list($x_cmd, $x_idn, $x_reason) = explode(' ', $msgr); // !ban 5 Wh ( 5 = id  wh = reason)
            if ($x_reason == '')
              $x_reason = 'None';
            for ($i = 0; $i < $player_cnt; $i++)
             {
              require $cpath . 'ReCodMod/functions/inc_functions3.php';
              if ((!$valid_id) || (!$valid_ping))
                Continue;
              $i_namex = aaxa($i_name);
              $tk      = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
              $x_bann  = explode(" / ", $tk);
              if ($x_bann[0] == $x_idn)
               {
                $db2->exec("INSERT INTO bans (playername,ip,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','$x_reason','$datetime','$x_nickx','$game_patch')");
                usleep($sleep_rcon);
                if (($game_ac == '0') && ($x_stop_lp == 0))
                 {
                  rcon('say  ^6 ' . $chistx . ' ' . $ban_ip_all . ' "^7Reason:^1" "' . $x_reason . '"', '');
                  if ($game_patch == 'cod4')
                   {
                    usleep($sleep_rcon);
                    rcon('getss ' . $i_id, '');
                    usleep($sleep_rcon);
                    rcon('permban ' . $i_id . ' Reason: [' . $x_reason . ']!', '');
                    usleep($sleep_rcon);
                    rcon('clientkick ' . $i_id, '');
                   }
                  else
                   {
                    usleep($sleep_rcon);
                    usleep($sleep_rcon);
                    rcon('clientkick ' . $i_id, '');
                   }
                  AddToLog("[" . $datetime . "] BANNED: " . $i_ip . " (" . $i_namex . ") (" . $i_id . ") BY: (" . $x_nickx . ")  R ");
                  ++$x_number;
                  ++$x_stop_lp;
                  echo '  ban  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
                  //return;
                 }
                else
                 {
                  rcon('say  ^6 ' . $chistx . ' ' . $ban_ip_all . ' "^7Reason:^1" "' . $x_reason . '"^6[^7BAN By Admin^6]""', '');
                  usleep($sleep_rcon);
                  rcon('akick ' . $i_id . ' " ^6[^7BAN By Admin^6]"', '');
                 }
                AddToLog("[" . $datetime . "] BANNED: " . $i_ip . " (" . $i_namex . ") (" . $i_id . ") BY: (" . $x_nickx . ")  R ");
                ++$x_number;
                echo '  ban  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
                ++$x_stop_lp;
                //return;	
               }
             }
           }
         }
        $result = null;
        $db     = NULL;
        $db2    = NULL;
       }
      catch (PDOException $e)
       {
        print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
       }
     }
   }
 }
if ($x_stop_lp == 0)
 {
  ///ban ip range naprimer 111.222    iz    111.222.333.444   +++++  !range 111.222 WH
  if (strpos($msgr, $ixz . 'range ') !== false)
   {
    //$knownplayr = 0;
    echo "\n[ADB] : [", $datetime, "] : " . $nickr . " : " . $msgr;
    $r_ch = trim($chistx);
    //$vipt = (array_search($r_ch, $r_adm, true) !== false);
    if ($web_con == '0')
     {
      list($i1p, $i2p, $i3p, $i4p) = explode('.', $i_ip);
      $ipt = (array_search($i1p . '.' . $i2p . '.' . $i3p, $r_admi, true) !== false);
     }
    else if ($web_con == '1')
     {
      ////////////////////////////////////////////////////////////////////NEW DOWN AT THE LIST   
      // list($nickr, $msgr) = explode(' % ', $parselinetxt);  
      list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
      $i_namex = chatrr($i_name);
      $tk      = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
      $kski    = explode(" / ", $tk);
      try
       {
        if (empty($adminlists))
          $db = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db1.sqlite');
        else
          $db = new PDO('sqlite:' . $adminlists);
        ////////////////////////////
        if (empty($bannlist))
          $db2 = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db2.sqlite');
        else
          $db2 = new PDO('sqlite:' . $bannlist);
        ////////////////////////////
        $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
        foreach ($result as $row)
         {
          $adm_ip  = $row['s_adm'];
          $a_grp   = $row['s_group'];
          $adm_ip  = trim($adm_ip);
          $i_ip    = trim($i_ip);
          $kski[1] = trim($kski[1]);
          $nickr   = trim($nickr);
          if (strpos(chatrr($nickr), $kski[1]) !== false)
            $unkwnplyersx = $i_id;
          if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
            $jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ip) && (($a_grp == 0) || ($a_grp == 111)) || (array_search(strtolower($i_ip), $adminIP, true) !== false));
          else
            $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false) || (array_search(strtolower($i_ip), $adminIP, true) !== false) || ($adm_ip == $i_ip) && ($kski[0] == $idnum) && (($a_grp == 0) || ($a_grp == 111)));
          if ($jjj)
           {
            ++$knownplayr;
            list($x_cmd, $x_idn, $x_reason) = explode(' ', $msgr); // !ban 5 Wh ( 5 = id  wh = reason)
            // for ($i=0; $i<$player_cnt; $i++)
            //	{
            //require $cpath.'ReCodMod/functions/inc_functions3.php';
            //if ((! $valid_id) || (! $valid_ping)) Continue; 
            //$i_namex = aaxa($i_name);	
            //$tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
            //$x_bann = explode(" / ", $tk); 
            //$dat = '.';
            //		$x_addr = explode(".", $i_ip); 	
            $yesrnge = substr_count($x_idn, '.'); // 1
            if ($yesrnge == 1)
             {
              $db2->exec("INSERT INTO x_ranges (ip_ranges,ip_info) VALUES ('$x_idn','$x_reason')");
              usleep($sleep_rcon);
              if (($game_ac == '0') && ($x_stop_lp == 0))
               {
                rcon('say  ^6 ^1IP Range ' . $ban_ip_all . ' ^7Reason:^1 ' . $x_reason . '', '');
                usleep($sleep_rcon);
                usleep($sleep_rcon);
                rcon('clientkick ' . $i_id, '');
                AddToLog("[" . $datetime . "] BANNED: " . $i_ip . " (" . $x_reason . ") (" . $i_id . ") BY: (" . $x_nickx . ")  R ");
                ++$x_number;
                ++$x_stop_lp;
                echo '  ban  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
                //return;
               }
              else
               {
                rcon('say  ^6 ^1IP Range ' . $ban_ip_all . ' ^7Reason:^1 ' . $x_reason . '', '');
                usleep($sleep_rcon);
                rcon('akick ' . $i_id . ' " ^6[^7BAN By Admin^6]"', '');
               }
              AddToLog("[" . $datetime . "] BANNED: " . $i_ip . " (" . $x_reason . ") (" . $i_id . ") BY: (" . $x_nickx . ")  R ");
              ++$x_number;
              echo '  ban  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
              ++$x_stop_lp;
              //return;	
             }
            else
             {
              usleep($sleep_rcon);
              usleep($sleep_rcon);
              rcon('say  ^6 ^1IP Range is not correct! (Example 111.222)', '');
              ++$x_number;
              ++$x_stop_lp;
             }
            //}
           }
         }
        $result = null;
        $db     = NULL;
        $db2    = NULL;
       }
      catch (PDOException $e)
       {
        print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
       }
     }
    /*
    //$vipt = (array_search($chistx, $r_adm, true) !== false);
    if($knownplayr == 0){	
    usleep($sleep_rcon);
    rcon('say ^6[^1RCM^3bot^6] ^1WARNING YOU! ^7' . $nickr . '  ^3its not your group commands!', '');
    if ($kicknotingrp == 1){
    usleep($sleep_rcon*5);
    if ($game_patch == 'cod1_1.1')
    rcon('clientkick '. $unkwnplyersx, '');
    else
    rcon('clientkick '. $idnum, '');
    AddToLog("[".$datetime."] SELF KICK: (" . $nickr . ") (" . $idnum . ") "); 
    ++$x_number;
    ++$x_return;
    ++$x_stop_lp;
    }}
    */
   }
 }
if (strpos($msgr, $ixz . 'banlist') !== false)
 {
  $x_namex = clearnamex($i_name);
  $x_nickx = clearnamex($nickr);
  $mmm     = trim($x_nickx);
  $nnn     = trim($x_namex);
  if (strpos($mmm, $nnn) !== false)
   {
    $gi      = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
    $i_namex = afdasfawf($i_name);
    $tk      = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
    $kski    = explode(" / ", $tk);
    $newid   = $i_id;
    $newip2  = $i_ip;
    if (strpos(chatrr($nickr), $kski[1]) !== false)
      $unkwnplyersx = $i_id;
    try
     {
      if (empty($adminlists))
        $db = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db1.sqlite');
      else
        $db = new PDO('sqlite:' . $adminlists);
      $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
      foreach ($result as $row)
       {
        $adm_ip = $row['s_adm'];
        $a_grph = $row['s_group'];
        $adm_ip = trim($adm_ip);
        $i_ipn  = trim($newip2);
        //////////////////GROUPS  
        if (($adm_ip == $i_ipn) && ($a_grph == 0) || ($adm_ip == $i_ipn) && ($a_grph == 111) || ($adm_ip == $i_ipn) && ($a_grph == 555) || ($adm_ip == $i_ipn) && ($a_grph == 1) || ($adm_ip == $i_ipn) && ($a_grph == 2) || ($adm_ip == $i_ipn) && ($a_grph == 3) || ($adm_ip == $i_ipn) && ($a_grph == 4) || ($adm_ip == $i_ipn) && ($a_grph == 5) || ($adm_ip == $i_ipn) && ($a_grph == 6) || ($adm_ip == $i_ipn) && ($a_grph == 7) || ($adm_ip == $i_ipn) && ($a_grph == 8) || ($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false) || (array_search(strtolower($i_ip), $adminIP, true) !== false))
         {
          echo '---' . $i_namex . '---';
          ++$x_number;
          ++$knownplayr;
         }
       }
      $result = null;
      $db     = NULL;
     }
    catch (PDOException $e)
     {
      print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
     }
   }
  if ($x_number > 0)
   {
    usleep($sleep_rcon);
    require $cpath . 'ReCodMod/functions/inc_functions2.php';
    for ($i = 0; $i < $player_cnt; $i++)
     {
      $colorb = $i % 2 > 0 ? '^6' : '^3';
      $colora = $i % 2 > 0 ? '^7' : '^7';
      require $cpath . 'ReCodMod/functions/inc_functions3.php';
      if ((!$valid_id) || (!$valid_ping))
        Continue;
      ////////////////////////////////////////////////////////////////////////////////////////////////////
      try
       {
        ////////////////////////////
        if (empty($bannlist))
          $db2 = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db2.sqlite');
        else
          $db2 = new PDO('sqlite:' . $bannlist);
        ////////////////////////////
        $result = $db2->query("SELECT * FROM bans WHERE id>=1 and patch = '$game_patch' ORDER BY (id+0) DESC LIMIT 10");
        $number = 0;
        foreach ($result as $row)
         {
          $playername = $row['playername'];
          $ipm        = $row['id'];
          $ipadrr     = $row['ip'];
          $rshs       = $row['reason'];
          $timfk      = $row['time'];
          $ywhoo      = $row['whooo'];
          usleep($sleep_rcon);
          $record = geoip_record_by_addr($gi, $ipadrr);
          if ($geox == 1)
            $xxcity = ($record->country_name . ", " . $record->city . "");
          else
            $xxcity = ($record->country_name);
          if ($game_patch == 'cod1_1.1')
            rcon('say ^6 ' . $colorb . '#Id:' . $colorb . ' ' . $colora . $ipm . ' ' . $colorb . ' Nick: ' . $colorb . $colora . substr($playername, 0, 16) . ' ' . $colorb . 'City: ' . $colorb . $colora . $xxcity . ' ^3Reason: ' . $colorb . $colora . $rshs . ' ^3Time: ' . $colorb . $colora . substr($timfk, 0, 22) . ' ^3By: ' . $colorb . $colora . $ywhoo . '"', '');
          else if ($game_patch == 'cod4')
            rcon('tell ' . $newid . ' ^6 ' . $colorb . '#' . $colorb . '' . $colora . $ipm . ' ' . $colorb . ' ' . $colorb . $colora . substr($playername, 0, 12) . ' ' . $colorb . 'City: ' . $colorb . $colora . $xxcity . ' ^3Why: ' . $colorb . $colora . $rshs . ' ^3Date: ' . $colorb . $colora . substr($timfk, 0, 10) . '', '');
          else
            rcon('tell ' . $newid . ' ^6 ' . $colorb . '#Id:' . $colorb . ' ' . $colora . $ipm . ' ' . $colorb . ' Nick: ' . $colorb . $colora . substr($playername, 0, 16) . ' ' . $colorb . 'City: ' . $colorb . $colora . $xxcity . ' ^3Reason: ' . $colorb . $colora . $rshs . ' ^3Time: ' . $colorb . $colora . substr($timfk, 0, 22) . ' ^3By: ' . $colorb . $colora . $ywhoo . '"', '');
         }
        ++$x_number;
        AddToLogInfo("[" . $datetime . "] BANLIST-10: (" . $x_nickx . ") (" . $msgr . ") reason: LIST");
        ++$x_stop_lp;
        echo '  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
        $result = null;
        $db2    = NULL;
        return;
       }
      catch (PDOException $e)
       {
        print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
       }
     }
   }
 }
if ($x_stop_lp == 0)
 {
  if (strpos($msgr, '' . $ixz . 'ulist') !== false)
   {
    $x_namex = clearnamex($i_name);
    $x_nickx = clearnamex($nickr);
    $mmm     = trim($x_nickx);
    $nnn     = trim($x_namex);
    if (strpos($mmm, $nnn) !== false)
     {
      $i_namex = afdasfawf($i_name);
      $tk      = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
      $kski    = explode(" / ", $tk);
      $newid   = $i_id;
      $newip2  = $i_ip;
      try
       {
        if (empty($adminlists))
          $db = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db1.sqlite');
        else
          $db = new PDO('sqlite:' . $adminlists);
        $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
        foreach ($result as $row)
         {
          $adm_ip = $row['s_adm'];
          $a_grph = $row['s_group'];
          $adm_ip = trim($adm_ip);
          $i_ipn  = trim($newip2);
          //////////////////GROUPS  
          if (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false) || ($adm_ip == $i_ipn) && ($a_grph == 0) || ($adm_ip == $i_ipn) && ($a_grph == 111) || ($adm_ip == $i_ipn) && ($a_grph == 555) || ($adm_ip == $i_ipn) && ($a_grph == 1) || ($adm_ip == $i_ipn) && ($a_grph == 2) || ($adm_ip == $i_ipn) && ($a_grph == 3) || ($adm_ip == $i_ipn) && ($a_grph == 4) || ($adm_ip == $i_ipn) && ($a_grph == 5) || ($adm_ip == $i_ipn) && ($a_grph == 6) || ($adm_ip == $i_ipn) && ($a_grph == 7) || ($adm_ip == $i_ipn) && ($a_grph == 8) || (array_search(strtolower($i_ip), $adminIP, true) !== false))
           {
            echo '---' . $i_namex . '---';
            ++$x_number;
            ++$knownplayr;
           }
         }
        $result = null;
        $db     = NULL;
       }
      catch (PDOException $e)
       {
        print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
       }
     }
    if ($x_number > 0)
     {
      usleep($sleep_rcon);
      require $cpath . 'ReCodMod/functions/inc_functions2.php';
      for ($i = 0; $i < $player_cnt; $i++)
       {
        $colorb = $i % 2 > 0 ? '^6' : '^2';
        $colora = $i % 2 > 0 ? '^7' : '^7';
        require $cpath . 'ReCodMod/functions/inc_functions3.php';
        if ((!$valid_id) || (!$valid_ping))
          Continue;
        ////////////////////////////////////////////////////////////////////////////////////////////////////
        try
         {
          ////////////////////////////
          if (empty($bannlist))
            $db2 = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db2.sqlite');
          else
            $db2 = new PDO('sqlite:' . $bannlist);
          ////////////////////////////
          $result = $db2->query("SELECT * FROM amnistia WHERE id>=1 ORDER BY (id+0) DESC LIMIT 10");
          $number = 0;
          foreach ($result as $row)
           {
            $playername = $row['playername1'];
            $ipm        = $row['id'];
            $rshs       = $row['reason1'];
            usleep($sleep_rcon);
            if ($game_patch == 'cod1_1.1')
              rcon('say ^6 ' . $colorb . '#Id:' . $colorb . ' ' . $colora . $ipm . ' ' . $colorb . ' Nick: ' . $colorb . $colora . $playername . ' ^3Reason: ' . $colorb . $colora . $rshs . '"', '');
            else
              rcon('tell ' . $newid . ' ^6 ' . $colorb . '#Id:' . $colorb . ' ' . $colora . $ipm . ' ' . $colorb . ' Nick: ' . $colorb . $colora . $playername . ' ^3Reason: ' . $colorb . $colora . $rshs . '"', '');
           }
          ++$x_number;
          AddToLogInfo("[" . $datetime . "] UN-BANLIST-10: (" . $x_nickx . ") (" . $msgr . ") reason: LIST");
          ++$x_stop_lp;
          echo '  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
          $result = null;
          $db2    = NULL;
         }
        catch (PDOException $e)
         {
          print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
         }
        return;
       }
     }
   }
 }
if ($x_stop_lp == 0)
 {
  if (strpos($msgr, $ixz . 'tban ') !== false)
   {
    echo "\n[ADB] : [", $datetime, "] : " . $nickr . " : " . $msgr;
    $r_ch = trim($chistx);
    //$vipt = (array_search($r_ch, $r_adm, true) !== false);
    if ($web_con == '0')
     {
      list($i1p, $i2p, $i3p, $i4p) = explode('.', $i_ip);
      $ipt = (array_search($i1p . '.' . $i2p . '.' . $i3p, $r_admi, true) !== false);
     }
    else if (($web_con == '1') && ($x_stop_lp == 0))
     {
      list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
      $i_namex = chatrr($i_name);
      $tk      = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
      $kski    = explode(" / ", $tk);
      try
       {
        if (empty($adminlists))
          $db = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db1.sqlite');
        else
          $db = new PDO('sqlite:' . $adminlists);
        ////////////////////////////
        if (empty($bannlist))
          $db2 = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db2.sqlite');
        else
          $db2 = new PDO('sqlite:' . $bannlist);
        ////////////////////////////
        $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
        foreach ($result as $row)
         {
          $adm_ip  = $row['s_adm'];
          $a_grp   = $row['s_group'];
          $adm_ip  = trim($adm_ip);
          $i_ip    = trim($i_ip);
          $kski[1] = trim($kski[1]);
          $nickr   = trim($nickr);
          if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
            $jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ip) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555)) || (array_search(strtolower($i_ip), $adminIP, true) !== false));
          else
            $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false) || (array_search(strtolower($i_ip), $adminIP, true) !== false) || ($adm_ip == $i_ip) && ($kski[1] == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555)));
          if ($jjj)
           {
            ++$knownplayr;
            list($x_cmd, $x_idn, $x_r_minutes) = explode(' ', $msgr); // !tban 5 30  ( 5 = id  30 = times in minutes)
            if ($x_r_minutes == '')
              $x_r_minutes = '5';
            //$x_x_minutes = ''.$x_r_minutes.'.minute(-s)';
            $datetimex   = date('YmdHis');
            $x_n_minutes = $x_r_minutes * 60;
            $x_x_m       = $datetimex + $x_n_minutes;
            for ($i = 0; $i < $player_cnt; $i++)
             {
              require $cpath . 'ReCodMod/functions/inc_functions3.php';
              if ((!$valid_id) || (!$valid_ping))
                Continue;
              $i_namex = aaxa($i_name);
              $tk      = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
              $x_bann  = explode(" / ", $tk);
              if ($x_bann[0] == $x_idn)
               {
                $db2->exec("INSERT INTO bans (playername,ip,guid,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','','$x_x_m','$datetime','$x_nickx','$game_patch')");
                usleep($sleep_rcon);
                if (($game_ac == '0') && ($x_stop_lp == 0))
                 {
                  rcon('clientkick ' . $i_id, '');
                  ++$x_stop_lp;
                 }
                else
                 {
                  rcon('say  ^6 ' . $chistx . ' ' . $ban_ip_all . ' "^7Reason: ^1tempban" "' . $x_r_minutes . '" minute(-s)', '');
                  usleep($sleep_rcon);
                  rcon('akick ' . $i_id . ' " ^6[^7TempBan^6]"', '');
                  ++$x_stop_lp;
                 }
                AddToLog("[" . $datetime . "] Tempban: " . $i_ip . " (" . $i_namex . ") (" . $i_id . ") BY: (" . $x_nickx . ")  R ");
                AddToLog1("<br/>[" . $datetime . "]<font color='green'> Server :</font> " . $i_namex . " Ban  Reason:^1 Tempban " . $x_r_minutes . " ");
                AddToLog1clear("[" . $datetime . "] Server : " . $i_namex . " Ban  Reason:^1 Tempban " . $x_r_minutes . " ");
                ++$x_number;
                echo '  tempban  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
                //return;	
               }
             }
           }
         }
        $result = null;
        $db     = NULL;
        $db2    = NULL;
       }
      catch (PDOException $e)
       {
        print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
       }
     }
    ///$vipt = (array_search($chistx, $r_adm, true) !== false);
    //return;	
   }
 }
?>