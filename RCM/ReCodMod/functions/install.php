<?php

    if(file_exists($cpath . 'ReCodMod/x_logs/g_log.log') 
        || file_exists($cpath . 'ReCodMod/x_cache/pos.txt')
	|| file_exists($cpath . 'ReCodMod/x_cron/cron_time_kicker')
	|| file_exists($cpath . 'ReCodMod/x_cache/temp_gametype_vote.txt')
	|| file_exists($cpath . 'ReCodMod/x_logs/archive/chat/none.log')
	|| file_exists($cpath . 'ReCodMod/x_cache/temp7.txt')
        || file_exists($cpath . 'ReCodMod/x_cache/temp-a2.txt')){
    //echo "\n Cache files ok..\n";
	echo ".\n";
}else{


if ((!mkdir($cpath.'ReCodMod/x_crontime/', 0777, true)) ||
(!mkdir($cpath.'ReCodMod/x_errors/', 0777, true)) ||
(!mkdir($cpath.'ReCodMod/x_logs/', 0777, true)) ||
(!mkdir($cpath.'ReCodMod/x_logs/archive/chat/', 0777, true)) ||
(!mkdir($cpath.'ReCodMod/x_cron/', 0777, true)) ||
(!mkdir($cpath.'ReCodMod/x_update/', 0777, true)) ||
(!mkdir($cpath.'ReCodMod/x_cache/', 0777, true))) {
    echo "\n RCM was INSTALLED..\n";
}
else{
echo "\n RCM FIRST INSTALL......\n";
touch($cpath.'ReCodMod/x_logs/archive/chat/none.log');
touch($cpath.'ReCodMod/x_logs/g_log.log');
touch($cpath.'ReCodMod/x_logs/g_gamename.log');
touch($cpath.'ReCodMod/x_logs/g_shortversion.log');
touch($cpath.'ReCodMod/x_logs/g_servername.log');
touch($cpath.'ReCodMod/x_crontime/cron_time');
touch($cpath.'ReCodMod/x_crontime/cron_time_alba');
touch($cpath.'ReCodMod/x_crontime/cron_time_message');
touch($cpath.'ReCodMod/x_crontime/cron_time_msg');
touch($cpath.'ReCodMod/x_crontime/cron_time_players');
touch($cpath.'ReCodMod/x_crontime/cron_time_top');
touch($cpath.'ReCodMod/x_crontime/cron_time1');

touch($cpath.'ReCodMod/x_cron/cron_time');
touch($cpath.'ReCodMod/x_cron/cron_time_code');
touch($cpath.'ReCodMod/x_cron/cron_time_exec1');
touch($cpath.'ReCodMod/x_cron/cron_time_exec1z');
touch($cpath.'ReCodMod/x_cron/cron_time_kicker');
touch($cpath.'ReCodMod/x_cron/cron_time_message');
touch($cpath.'ReCodMod/x_cron/cron_time_msg');
touch($cpath.'ReCodMod/x_cron/cron_time_resttt');
touch($cpath.'ReCodMod/x_cron/cron_time_resttt2');
touch($cpath.'ReCodMod/x_cron/cron_time_sd');
touch($cpath.'ReCodMod/x_cron/cron_time_top');

touch($cpath.'ReCodMod/x_cache/filesize.log');
touch($cpath.'ReCodMod/x_cache/pos.txt');
touch($cpath.'ReCodMod/x_cache/pos2.txt');
touch($cpath.'ReCodMod/x_cache/temp.txt');
touch($cpath.'ReCodMod/x_cache/temp_gametype_vote.txt');
touch($cpath.'ReCodMod/x_cache/temp_mapvote.txt');
touch($cpath.'ReCodMod/x_cache/temp0.txt');
touch($cpath.'ReCodMod/x_cache/temp2.txt');
touch($cpath.'ReCodMod/x_cache/temp3.txt');
touch($cpath.'ReCodMod/x_cache/temp4.txt');
touch($cpath.'ReCodMod/x_cache/temp5.txt');
touch($cpath.'ReCodMod/x_cache/temp6.txt');
touch($cpath.'ReCodMod/x_cache/temp7.txt');
touch($cpath.'ReCodMod/x_cache/temp8.txt');
touch($cpath.'ReCodMod/x_cache/temp-a.txt');
touch($cpath.'ReCodMod/x_cache/temp-a2.txt');
touch($cpath.'ReCodMod/x_cache/temp-b.txt');
touch($cpath.'ReCodMod/x_cache/temp-b2.txt');
touch($cpath.'ReCodMod/x_cache/temp-c.txt');
touch($cpath.'ReCodMod/x_cache/temp-c2.txt');
touch($cpath.'ReCodMod/x_cache/temp-d.txt');
touch($cpath.'ReCodMod/x_cache/z-alba.log');
touch($cpath.'ReCodMod/x_cache/z-vote.log');
touch($cpath.'ReCodMod/x_cache/z-vote-gametype.log');
touch($cpath.'ReCodMod/x_cache/z-vote-map.log');

touch($cpath.'ReCodMod/x_update/update.log');

//touch($cpath.'ReCodMod/x_errors/z-vote-map.log');
echo "Install - Ok.\n";
}}


?>
