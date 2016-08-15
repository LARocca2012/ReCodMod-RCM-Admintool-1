<?php


$xnone  = 'QUICKMESSAGE';
if ($game_patch == 'cod1_1.1') $kill   = 'K;'; else $kill   = 'K;0;';
if ($game_patch == 'cod1_1.1') $death   = 'D;'; else $death   = 'D;0;';
if ($game_patch == 'cod1_1.1') $quit   = 'Q;'; else $quit   = 'Q;0;';
if ($game_patch == 'cod1_1.1') $findme1   = 'J;'; else $findme1   = 'J;0;'; 
$xnonev = strpos($parseline, $xnone); $deathv = strpos($parseline, $death);
$killv = strpos($parseline, $kill); $pos1 = strpos($parseline, $findme1);
$ff1 = strpos($parseline, '100000;MOD_CRUSH;none'); $ff2 = strpos($parseline, 'MOD_FALLING;none');
$pos = strpos($parseline, '');


	 
?>
