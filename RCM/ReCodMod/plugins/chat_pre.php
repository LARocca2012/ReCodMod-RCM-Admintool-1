<?php
$msgr = matmat($msgr);
$x_n4 = trim(clearnamex($nivv));
$yug = mb_strtolower($msgr, 'Windows-1251');
$yug = matmat($yug);
$x_mat = true;
foreach($matnie as $badword)
{
   preg_match("/".$badword."/si", $yug, $maxb);
  //$matches = strpos($badword, $yug);
  if(count($maxb) > 0)
  {  
	$x_mat = false;
	echo" -mat- ";
  }
} 	


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


$x_cry = true;
foreach($cryers as $cvr)
{
   preg_match("/".$cvr."/si", $yug, $maxj);
  //$matches = strpos($badword, $yug);
  if(count($maxj) > 0)
  {  
	$x_cry = false;
	echo" -cry- ";
  }
} 

?>
 
