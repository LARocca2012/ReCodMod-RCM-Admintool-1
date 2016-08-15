<?php

if (empty($_SERVER['OS']))
     $_SERVER['OS'] = '';
if (strpos($_SERVER['OS'], 'Win') !== false){

function hxlog($scwin)
{
    $scwin = str_replace(array(
        "//////"
    ), "\\", $scwin);
    $scwin = str_replace(array(
        "/////"
    ), "\\", $scwin);
    $scwin = str_replace(array(
        "////"
    ), "\\", $scwin);
    $scwin = str_replace(array(
        "///"
    ), "\\", $scwin);
    $scwin = str_replace(array(
        "//"
    ), "\\", $scwin);
    $scwin = str_replace(array(
        "/"
    ), "'\\'", $scwin);	
    $scwin = str_replace(array(
        "'\\\\'"
    ), "\\", $scwin);
    $scwin = str_replace(array(
        "'\\\'"
    ), "\\", $scwin);
    $scwin = str_replace(array(
        "'\\'"
    ), "\\", $scwin);	
    $scwin = str_replace(array(
        "'\'"
    ), "\\", $scwin);		
    return $scwin . "";
}

}else{

function hxlog($scwin)
{
    $scwin = str_replace(array(
        "//////"
    ), "/", $scwin);
    $scwin = str_replace(array(
        "/////"
    ), "/", $scwin);
    $scwin = str_replace(array(
        "////"
    ), "/", $scwin);
    $scwin = str_replace(array(
        "///"
    ), "/", $scwin);
    $scwin = str_replace(array(
        "//"
    ), "/", $scwin);
    $scwin = str_replace(array(
        "'\\\\'"
    ), "/", $scwin);
    $scwin = str_replace(array(
        "'\\\'"
    ), "/", $scwin);
    $scwin = str_replace(array(
        "'\\'"
    ), "/", $scwin);	
    $scwin = str_replace(array(
        "'\'"
    ), "/", $scwin);		
    return $scwin . "";
}

}

function ewc($string) {
$string = str_replace("Resource id", "Rank", $string);
return $string;
}

	class COD4ServerStatus{
		var $server = '127.0.0.1';
		var $port = '28960';
		var $protocol = 'udp';
		var $data = '';
		var $serverData = array();
		var $players = array();
		var $scores = array();
		var $pings = array();
		var $meta = array();
		var $timeout = 1;
		
		function __construct($server, $port, $timeout = 1){
			$this->server = $server;
			$this->port = $port;
			$this->timeout = $timeout;
		}
		
		function getServerStatus(){
			$error = false;
			
			if (!empty($this->server) && !empty($this->port)){					
				$handle = @fsockopen($this->protocol . '://' . $this->server, $this->port);
				
				if ($handle){				
					socket_set_timeout($handle, 1);
					stream_set_blocking($handle, 1);
					stream_set_timeout($handle, 5);
							
					fputs($handle, "\xFF\xFF\xFF\xFFgetstatus\x00");
					fwrite($handle, "\xFF\xFF\xFF\xFFgetstatus\x00");					
					
					$this->data = fread($handle, 8192);
					$this->meta = stream_get_meta_data($handle);
					$counter = 8192;
					
					while (!feof($handle) && !$error && $counter < $this->meta['unread_bytes']){
						$this->data .= fread($handle, 8192);
						$this->meta = stream_get_meta_data($handle);
						
						if ($this->meta['timed_out']){
							$error = true;
						}
						
						$counter += 8192;
					}
					
					if ($error){
						echo 'Request timed out.';
						return false;							
					}else{
						if (strlen(trim($this->data)) == 0){							
							echo 'No data received from server.';
							return false;
						}else{
							return true;
						}
					}
				}else{
					echo 'Could not connect to server.';
					return false;
				}
				
				fclose($handle);
			}
		}
		
		function parseServerData(){
			$this->serverData = explode("\n", $this->data);

			$tempplayers = array();

			for ($i = 2; $i <= sizeof($this->serverData) - 1; $i++){
			
				$tempplayers[sizeof($tempplayers)] = trim($this->serverData[$i]);
			}
			
			$tempdata = array();
			$tempdata = explode('\\', $this->serverData[1]);
			$this->serverData = array();
			
			foreach($tempdata as $i => $v){
				if (fmod($i, 2) == 1){
					$t = $i + 1;
					
					$this->serverData[$v] = $tempdata[$t];
				}
			}
			
			$this->serverData['sv_hostname'] = $this->colorCode($this->serverData['sv_hostname']);
			//$this->serverData['_Maps'] = explode('-', $this->serverData['_Maps']);

			foreach($tempplayers as $i => $v){
							
				if (strlen(trim($v)) > 1){
					$temp = explode(' ', $v);					

					$this->scores[sizeof($this->scores)] = $temp[0];
					$this->pings[sizeof($this->pings)] = $temp[1];
					
					$pos = strpos($v, '"') + 1;
					$endPos = strlen($v) - 1;
					
					$this->players[sizeof($this->players)] = substr($v, $pos, $endPos - $pos);
				}
			}			
		}
		
		function colorCode($string){
			$string .= "^";
		
			$find = array(
				'/\^0(.*?)\^/is',
				'/\^1(.*?)\^/is',
				'/\^2(.*?)\^/is',
				'/\^3(.*?)\^/is',
				'/\^4(.*?)\^/is',
				'/\^5(.*?)\^/is',
				'/\^6(.*?)\^/is',
				'/\^7(.*?)\^/is',
				'/\^8(.*?)\^/is',
				'/\^9(.*?)\^/is',																								
			);
			
			$replace = array(
				'<font color="color:#000000;">$1</font>^',
				'<font color="color:#F65A5A;">$1</font>^',
				'<font color="color:#00F100;">$1</font>^',
				'<font color="color:#EFEE04;">$1</font>^',
				'<font color="color:#0F04E8;">$1</font>^',
				'<font color="color:#04E8E7;">$1</font>^',
				'<font color="color:#F75AF6;">$1</font>^',
				'<font color="color:#FFFFFF;">$1</font>^',
				'<font color="color:#7E7E7E;">$1</font>^',
				'<font color="color:#6E3C3C;">$1</font>^',				
			);
			
			
			$string = preg_replace($find, $replace, $string);
			return substr($string, 0, strlen($string) - 1);
		}
		
		function returnData(){
			return $this->data;
		}
		
		function returnMeta(){
			return $this->meta;
		}
		
		function returnServerData(){
			return $this->serverData;
		}
		
		function returnPlayers(){
			return $this->players;
		}
		
		function returnPings(){
			return $this->pings;
		}
		
		function returnScores(){
			return $this->scores;
		}
	}


require $cpath.'cfg/_connection.php';
require $cpath.'cfg/_settings.php';

 $mplogfilexl = hxlog($mplogfile);

 function readloglines($infologtxt) {
global $cpath;
require $cpath.'cfg/_connection.php';
require $cpath.'cfg/_settings.php';
 $filepath = hxlog($mplogfile);
 $handlePos = @fopen($cpath.'ReCodMod/x_cache/pos.txt', 'r+');//открываем файл с последним положением
    if (($buffer = fgets($handlePos, 10)) !== false) {
        $startPos=(int)$buffer;
        if($startPos<0) $startPos=0;

        $handle = @fopen($filepath, 'rb');
        //$handle = file_get_contents($filepath,true);
        if($handle){
            $buffer='';
            $newPos=$startPos;
            fseek($handle, $startPos, SEEK_SET);//указатель в положение
            if (($buffer = fgets($handle, 5000)) !== false) {//попытка чтения строки
            //echo "\n read line: \n",$buffer,"\n\n";//прочитали строку
				$infologtxt = $buffer;
                $newPos=ftell($handle);//оказались в позиции
            }
            fclose($handle);

            if($newPos!=$startPos){
                rewind($handlePos);
                fwrite($handlePos, sprintf('%09d', $newPos));//записываем позицию, на которой остановились
            }
        }
        fclose($handlePos);
   
   }
    return $infologtxt;
}


function readloglinercx($inlogtxtc) {
global $cpath;
require $cpath.'cfg/_connection.php';
require $cpath.'cfg/_settings.php';
 $filepathf = $cpath."ReCodMod/x_logs/parsed_code.log";
 $handlePosh = @fopen($cpath.'ReCodMod/x_cache/pos2.txt', 'r+');//открываем файл с последним положением
    if (($bufferh = fgets($handlePosh, 10)) !== false) {
        $startPos=(int)$bufferh;
        if($startPos<0) $startPos=0;

        $handleh = @fopen($filepathf, 'rb');
        if($handleh){
            $bufferh='';
            $newPosh=$startPos;
            fseek($handleh, $startPos, SEEK_SET);//указатель в положение
            if (($bufferh = fgets($handleh, 5000)) !== false) {//попытка чтения строки
                //echo "\n read line: \n",$bufferh,"\n\n";//прочитали строку
				$inlogtxtc = $bufferh;
                $newPosh=ftell($handleh);//оказались в позиции
            }
            fclose($handleh);

            if($newPosh!=$startPos){
                rewind($handlePosh);
                fwrite($handlePosh, sprintf('%09d', $newPosh));//записываем позицию, на которой остановились
            }
        }
        fclose($handlePosh);
   
   }
    return $inlogtxtc;
}

//Funktionen
function makeuptime($time)		//Generiert aus Minuten Tage, Stunden und Minuten
{
	$minuten = $time % 60;
	$weiter = ($time - $minuten) / 60;
	$stunden = $weiter % 24;
	$tage = ($weiter - $stunden) / 24;
	return sprintf("%dD %02d:%02d", (int)$tage, (int)$stunden, (int)$minuten);
}

function makeuptime2 ($time)		//Generiert aus Sekunden Stunden, Minuten und Sekunden
{
	$sekunden = $time % 60;
	$weiter = ($time - $sekunden) / 60;
	$minuten = $weiter % 60;
	$stunden = ($weiter - $minuten) / 60;
	return sprintf("%02d:%02d:%02d", (int)$stunden, (int)$minuten, (int)$sekunden);
}

function error_handler($errno, $errstr, $errfile, $errline) {
	global $logging;

	if (error_reporting() == 0) return;

    $errortype = array (
        E_ERROR              => 'Error',
        E_WARNING            => 'Warning',
        E_PARSE              => 'Parsing Error',
        E_NOTICE             => 'Notice',
        E_CORE_ERROR         => 'Core Error',
        E_CORE_WARNING       => 'Core Warning',
        E_COMPILE_ERROR      => 'Compile Error',
        E_COMPILE_WARNING    => 'Compile Warning',
        E_USER_ERROR         => 'User Error',
        E_USER_WARNING       => 'User Warning',
        E_USER_NOTICE        => 'User Notice',
        E_STRICT             => 'Runtime Notice',
        E_RECOVERABLE_ERROR  => 'Catchable Fatal Error'
    );

    $dir = dirname(__FILE__);
    $errfile = substr(str_replace($dir, "", $errfile), 1);

	$logging->write(MOD_PHPERROR, "$errortype[$errno] in $errfile:$errline => $errstr");
}

function parse_cfg_file($file, $process_sections = false) {
  global $logging;

  $process_sections = ($process_sections !== true) ? false : true;

  $ini = file($file);
  if (count($ini) == 0) {return array();}

  $sections = array();
  $values = array();
  $result = array();
  $globals = array();
  $i = 0;
  $lineno = 0;
  foreach ($ini as $line) {
    $lineno ++;
    $line = trim($line);
    $line = str_replace("\t", " ", $line);

    // Comments
    if (!preg_match('/^[a-zA-Z0-9[-]/', $line)) {
        if (!empty($line) && $line{0} != ";") { //Not a Comment
            $logging->write(MOD_ERROR, "Parse error in $file on line $lineno");
        }
        continue;
    }

    // Sections
    if ($line{0} == '[') {
      $tmp = explode(']', $line);
      $sections[] = trim(substr($tmp[0], 1));
      $i++;
      continue;
    }

    // Key-value pair
    $parts = explode('=', $line, 2);
    if (count($parts) != 2) {
        $logging->write(MOD_ERROR, "Parse error in $file on line $lineno");
    }
    list($key, $value) = $parts;
    $key = trim($key);
    $value = trim($value);

    if (strtolower($value) == "null") {
        $value = null;
    }
    else {
        if (strstr($value, ";")) {
          $tmp = explode(';', $value);
          if (count($tmp) == 2) {
            if ((($value{0} != '"') && ($value{0} != "'")) ||
                preg_match('/^".*"\s*;/', $value) || preg_match('/^".*;[^"]*$/', $value) ||
                preg_match("/^'.*'\s*;/", $value) || preg_match("/^'.*;[^']*$/", $value) ){
              $value = $tmp[0];
            }
          } else {
            if ($value{0} == '"') {
              $value = preg_replace('/^"(.*)".*/', '$1', $value);
            } elseif ($value{0} == "'") {
              $value = preg_replace("/^'(.*)'.*/", '$1', $value);
            } else {
              $value = $tmp[0];
            }
          }
        }
        $value = trim($value);
        $value = trim($value, "'\"");
    }

    if ($i == 0) {
      if (substr($line, -1, 2) == '[]') {
        $globals[$key][] = $value;
      } else {
        $globals[$key] = $value;
      }
    } else {
      if (substr($line, -1, 2) == '[]') {
        $values[$i-1][$key][] = $value;
      } else {
        $values[$i-1][$key] = $value;
      }
    }

  }

  for($j = 0; $j < $i; $j++) {
    if ($process_sections === true) {
      $result[$sections[$j]] = $values[$j];
    } else {
      $result[] = $values[$j];
    }
  }

  return $result + $globals;
}

function size($size)
{
	$sizes = Array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
	$ext = $sizes[0];
	for ($i=1; (($i < count($sizes)) && ($size >= 1024)); $i++) {
		$size = $size / 1024;
		$ext  = $sizes[$i];
	}
	$size = round($size, 2) . ' ' . $ext;
	return $size;
}

function config_merge($config1, $config2) {
    $configs = func_get_args();
    $result = array_shift($configs);

    foreach ($configs as $config) {
        foreach ($config as $sectionname => $section) {
            foreach ($section as $key => $value) {
                $result[$sectionname][$key] = $value;
                if ($value == null) {
                    unset($result[$sectionname][$key]);
                }
            }
        }
    }

    return $result;
}

function array_i_key_exists($needle, $stack) {
    $needle = strtolower($needle);
    $keys = array_keys($stack);
    $keys = array_map("strtolower", $keys);
    return (in_array($needle, $keys));
}

function parse_argv($possible) {

    global $argv, $argc;

    $parsed = array();

    for ($i = 1; $i < $argc; $i ++) {
        if ($argv[$i]{0} != "-" && $argv[$i]{0} != "/") {
            throw new Exception("Unrecognized part '$argv[$i]'");
        }

        $name = strtolower(substr($argv[$i], 1));
        if (!array_key_exists($name, $possible)) {
            throw new Exception("Unrecognized parameter '$argv[$i]'");
        }

        if (array_key_exists($name, $parsed) && !$possible[$name]["multiple"]) {
            throw new Exception("'$name' can't be set multiple times");
        }

        $values = array();
        for ($j = 1; $j <= $possible[$name]["count"]; $j++, $i++) {

            if (!isset($argv[$i + 1])) {
                throw new Exception("Wrong parameter count for '$name'");
            }

            if ($possible[$name]["count"] == 1) {
                $values = $argv[$i + 1];
            }
            else {
                $values[] = $argv[$i + 1];
            }
        }

        if ($possible[$name]["multiple"]) {
            if (!array_key_exists($name, $parsed)) {
                $parsed[$name] = array();
            }
            $parsed[$name][] = $values;
        }
        else {
            $parsed[$name] = $values;
        }

    }

    return $parsed;

}

function get_time() {  
    $start  = date('Y-m-d H:i:s', time());  
    $end    = date('Y-m-13 7:i:s', strtotime('next Wednesday'));  
    $d_start    = new DateTime($start);  
    $d_end      = new DateTime($end);  
    $diff = $d_start->diff($d_end); 
    if ($diff->format('%d') == 6 && $diff->format('%h') >= 22)  
        return '-----------'; 
    else 
//	return $diff->format('^7HA4AJIO 4EPE3: ^1%d  ^7DHEU  ^1%h  ^74ACOB  ^1%i  ^7MUHYT ^1%s  ^7CEKYHD.'); 
return $diff->format('^7THE BEGINNING IN: ^1%d  ^7DAYS  ^1%h  ^7HOURS  ^1%i  ^7MIN.  AND ^1%s  ^7SEC.');  
	 } 
	 
	 
function chatrr($string) {
$string = str_replace("^0", "", $string);
$string = str_replace("^1", "", $string);
$string = str_replace("^2", "", $string);
$string = str_replace("^3", "", $string);
$string = str_replace("^4", "", $string);
$string = str_replace("^5", "", $string);
$string = str_replace("^6", "", $string);
$string = str_replace("^7", "", $string);
$string = str_replace("^8", "", $string);
$string = str_replace("^9", "", $string);
return $string;
}	 

// !"sv_mapRotation" is:"gametype ^5sd map mp_harbor gametype ^5sd map mp_harbor map mp_pavlov map mp_carentan map mp_powcamp map mp_railyard map mp_depot map mp_dawnville map mp_logging_mill map mp_brecourt map mp_rocket^7" default:"^7"

function sv_rotation($string) {
$string = str_replace(" default:", "", $string);
$string = str_replace(" is:", "", $string);
$string = str_replace("map ", "", $string);
$string = str_replace("sv_mapRotation", "", $string);
$string = str_replace("sv_Rotation", "", $string);
$string = str_replace("^5sd ", "", $string);
$string = str_replace("tdm ", "", $string);
$string = str_replace("pam ", "", $string);
$string = str_replace("bel ", "", $string);
$string = str_replace("^5pam ", "", $string);
$string = str_replace("^1zom ", "", $string);
$string = str_replace("all ", "", $string);
$string = str_replace("zom ", "", $string);
$string = str_replace("dm ", "", $string);
$string = str_replace("war ", "", $string);
$string = str_replace("bas ", "", $string);
$string = str_replace("gg ", "", $string);
$string = str_replace("gungame ", "", $string);
$string = str_replace("gun ", "", $string);
$string = str_replace("gg ", "", $string);
$string = str_replace("koth ", "", $string);
$string = str_replace("surv ", "", $string);
$string = str_replace("dth ", "", $string);
$string = str_replace("ctf ", "", $string);
$string = str_replace("actf ", "", $string);
$string = str_replace("htf ", "", $string);
$string = str_replace("rsd ", "", $string);
$string = str_replace("sv_mapRotation", "", $string);
$string = str_replace("mp_", "", $string);
$string = str_replace("^2_tdm ", "", $string);
$string = str_replace("^2tdm ", "", $string);
$string = str_replace("gametype ", "", $string);
$string = str_replace("default:", "", $string);
$string = str_replace('^7""^7"', '', $string);
$string = str_replace('!"""', '', $string);
return $string;
}

function sv_rotationx($string) {
$string = str_replace(" default:", "", $string);
$string = str_replace(" is:", "", $string);
$string = str_replace("map ", "", $string);
$string = str_replace("sv_mapRotation", "", $string);
$string = str_replace("sv_Rotation", "", $string);
$string = str_replace("^5sd ", "", $string);
$string = str_replace("tdm ", "", $string);
$string = str_replace("pam ", "", $string);
$string = str_replace("bel ", "", $string);
$string = str_replace("^5pam ", "", $string);
$string = str_replace("^1zom ", "", $string);
$string = str_replace("all ", "", $string);
$string = str_replace("zom ", "", $string);
$string = str_replace("dm ", "", $string);
$string = str_replace("war ", "", $string);
$string = str_replace("bas ", "", $string);
$string = str_replace("gg ", "", $string);
$string = str_replace("gungame ", "", $string);
$string = str_replace("gun ", "", $string);
$string = str_replace("gg ", "", $string);
$string = str_replace("koth ", "", $string);
$string = str_replace("surv ", "", $string);
$string = str_replace("dth ", "", $string);
$string = str_replace("ctf ", "", $string);
$string = str_replace("actf ", "", $string);
$string = str_replace("htf ", "", $string);
$string = str_replace("rsd ", "", $string);
$string = str_replace("sv_mapRotation", "", $string);
//$string = str_replace("mp_", "", $string);
$string = str_replace("^2_tdm ", "", $string);
$string = str_replace("^2tdm ", "", $string);
$string = str_replace("gametype ", "", $string);
$string = str_replace("default:", "", $string);
$string = str_replace('^7""^7"', '', $string);
$string = str_replace('!"""', '', $string);
return $string;
}

function mapmprs($string) {
$string = str_replace("mp_", "", $string);
return $string;
}

function sv_rtdot($string) {
$string = str_replace(" ", ",", $string);
return $string;
}

function onefxx($onxf)
{
    $onxf = str_replace(array(
        " 50"
    ), "", $onxf);
    $onxf = str_replace(array(
        " 100"
    ), "", $onxf);
}	

function __autoload($class_name) {
global $cpath;
    require_once $cpath."ReCodMod/classes/" . $class_name . '.class.php';
}

?>
