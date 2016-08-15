<?php

// Prefix for chat commands, you can use ! @ # $ % ^ * ~ ,  or letter - q w r t o r y .
$ixz = "!";   

// KIck who want to try use admin commands!
$kicknotingrp = 1;

// ONE BANLIST database (db2.sqlite) FOR ALL SERVERS - if use one banlist database for one server set to $bannlist = "";
// If one database for all servers  (COPY FROM THAT FOLDER ..\ReCodMod\databases\db2.sqlite  FILE) ->  $bannlist = "/way to database folder/db2.sqlite"; 
$bannlist = ""; 

// ONE ADMINS database (db1.sqlite) FOR ALL SERVERS - if use one ADMINS database for one server set to $adminlists = "";
// If one database for all servers  (COPY FROM THAT FOLDER ..\ReCodMod\databases\db1.sqlite  FILE) ->  $adminlists = "/way to database folder/db1.sqlite"; 
$adminlists = ""; 

// game server DOMAIN NAME //clan website
$website = "recod.ru"; 
 
// geo information ($geox = 1  - geo info with country and city)  ($geox = 0 - only country)
$geox = 1;

// Without autorized cd keys with guid = 0 need web server or website connection / with guid system add ($guids = 1;) // // Support only [cod1 p1.4, p1.5, cod uo all p, cod2 all p, cod4 all p] versions  - if use $guids = 1; change to  $code = 0;
$guids = 1;    

/////////ANTIFAKE NAMES PROTECTING
//Using another players name - warning messages for players \\\\\ 1 - ON  , 0 - OFF
$fakealert = 1;
//Protect using another players nicknames \\\\\ 1 - ON  , 0 - OFF
$namefaker = 1;
//Protect using another players nicknames with kick from server \\\\\ 1 - ON  , 0 - OFF
$namefakerkick = 0;
           
// Kick blacklisted STOPFORUMSPAM.COM ip adress, known ip proxy users from database will be kicked!
$stopforumspam = 0;   
     
// Set to your time zone, for database an logs creating.
date_default_timezone_set( 'Europe/Kaliningrad' );  
       
// scheduler, enter $rules_schedule[hour in 24h format 0-23][minute 0-59] = 'command';
// you can also enter more commands to the same timestamp in this format: $rules_schedule[hour][minute][] = 'say Welcome!';
$rules_schedule[6][0] = 'say RCM local time is 6:00';
$rules_schedule[9][0] = 'exec a__config_day.cfg';


// 1 - CHAT FLOOD, SWEARING, AND CHAT SPAM PROTECTING , 0 - OFF protection
$chat_protect = 1;  
$flood_time = false; //1 second btween messages
$flood_time_cmd = 2;    /// time between messages for flood protect
$flood_time_cmd2 = 3;   /// time between command messages for flood protect
//\\************************************************************************************//\\
$wflood = '4';    //\\ Flood warns limit, after this number limit - ban!
$wswear = '10';   //\\ Swearing warns limit, after this number limit - ban!
$wspams = '2';    //\\ Spam warns limit, after this number limit - ban!
$wdislk = '3';    //\\ Server dislike warns limit, after this number limit - ban!
//\\************************************************************************************//\\
// Deadchat beta xD  Dead chat 1 - on, 0 - off/
$deadchat = 0; 

// Player can be added in top list when player has 1000 frags. Better add 5000 kills limit for !top // Less of 1000 longer top updating)
$limm = "500";   

$v_time_gtx = 100;  //gametype vote time
$v_time_map = 100;  //map vote time
$v_time_ban = 100;  //ban vote time
$v_time_kick = 100; //kick vote time
/*############################################# Main configs #############################################*/ 


//********************************************************
/// Register from website sync. // if login from website use 1, no from website login = 0 - this line supporting only with special RCM web plugins
$registerx = '0';              
//********************************************************



?>
