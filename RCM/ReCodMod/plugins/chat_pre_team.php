<?php
$msgr = matmat($msgr);
$parselinetxt = delxxxc($parseline); 

$x_n4 = trim(clearnamex($nivv));
$yug = mb_strtolower($parselinetxt, 'Windows-1251');
$yug = matmat($yug);
	
$x_spam = true;
foreach($spams as $spms)
{
   preg_match("/".$spms."/si", $yug, $maxn);
  //$matches = strpos($badword, $yug);
  if(count($maxn) > 0)
  {  
	$x_spam = false;
	echo" -spam- ";
  }
} 
?>
 