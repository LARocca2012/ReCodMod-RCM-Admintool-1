<?php  
///

if ($game_patch == 'cod1_1.1')
			$i_name1c = 22;
else if ($game_patch == 'cod4')
                        $i_name1c = 47;
else
		        $i_name1c = 22;

if((empty($output[$i])) || ( $server_rconpass == 'my_rcon_password'))
{

$output[$i] = 0;
$player_cnt = 2;
$i_id = '';
$i_ping = '';
$i_ip = '';
$i_name = '';

$erroor = 'ERROR001';
//echo $erroor;
}else{

	$i_rcon_string = $output[$i];
	if ($i_rcon_string != '')
		{
		$pat[0] = "/^\s+/";
		$pat[1] = "/\s{2,}/";
		$pat[2] = "/\s+\$/";
		$rep[0] = "";
		$rep[1] = " ";
		$rep[2] = "";
		  $i_rcon_string = preg_replace($pat,$rep,$i_rcon_string);

		unset($tmp2);
        if (preg_match("/[[:space:]][0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/",  $i_rcon_string, $tmp2))
            {
            $i_ip = substr($tmp2[0],1);
			} else $i_ip = '';

if ($game_patch == 'cod1_1.1')
		$i_rcon_string = explode(' ', $i_rcon_string, 15);
else
                $i_rcon_string = explode(' ', $i_rcon_string, 5); 
        
$i_id = $i_rcon_string[0];
if (!empty($i_rcon_string[2]))
$i_ping = $i_rcon_string[2];
else 
$i_ping = '001';
		
if ($game_patch == 'cod1_1.1')
{

if(empty($i_rcon_string[4]))
$i_rcon_string[4] = '';
 if(empty($i_rcon_string[5]))
$i_rcon_string[5] = '';
 if(empty($i_rcon_string[6]))
$i_rcon_string[6] = '';
 if(empty($i_rcon_string[7]))
$i_rcon_string[7] = '';
 if(empty($i_rcon_string[8]))
$i_rcon_string[8] = '';
 if(empty($i_rcon_string[9]))
$i_rcon_string[9] = '';
 if(empty($i_rcon_string[10]))
$i_rcon_string[10] = '';
 if(empty($i_rcon_string[11]))
$i_rcon_string[11] = '';


$i_ping = $i_rcon_string[3].' '.$i_rcon_string[4].' '.$i_rcon_string[5].' '.$i_rcon_string[6].' '.$i_rcon_string[7].' '.$i_rcon_string[8].' '.$i_rcon_string[9].' '.$i_rcon_string[10].' '.$i_rcon_string[11];
 
$fff = preg_replace("/[[:space:]][0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\:/",  '#;#;#', $i_ping);

$i_nam = explode("#;#;#", $fff);
 $i_namea = $i_nam[0];        

}

		$i_name = substr($output[$i], $i_name1c);
		$i_name = preg_replace($pat,$rep,$i_name);
		$vyk = ':';
		$tmp = stringrpos($i_name, $vyk);
		if ($tmp === false)
		    {
			$vyk = '!';
			$tmp = stringrpos($i_name, $vyk);
			  
			  
			  if ($tmp === false)
			 	{
					
				}
				else
				{
					
				if(!empty($output[$i]))
					return;	
					
				}
			
			}



	    $i_name = substr($i_name, 0, $tmp);
	    $i_name = substr($i_name, 0, stringrpos($i_name, ' '));
	    $tmp2 = stringrpos($i_name, ' ');
	    if ($tmp2 !== false)
	    	{$i_name = substr($i_name, 0, $tmp2);}
		$chistx = $i_name;
        $i_name = trim(GetPlainName($i_name));

		}
	
if ($game_patch == 'cod1_1.1')
{
$chistx = $i_namea;
$i_name = trim(GetPlainName($i_namea));
}

$valid_id = is_numeric($i_id);
	
if ($game_patch == 'cod1_1.1')
$valid_ping = !is_numeric($i_ping);
else
$valid_ping = is_numeric($i_ping); 	
}

if ($game_patch == 'cod1_1.1'){
$i_name = onefxx($i_name);
$chistx = onefxx($chistx);
}


	//if(empty($valid_id))
	//	return;
?>
