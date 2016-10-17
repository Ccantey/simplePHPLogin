<?php
  session_start();

$ip = array();
$ip[] = 'xxx';
$ip[] = 'xxxx';
$ip[] = 'xxxx6';
$ip[] = 'xxxx8';

echo testIP($ip);
//echo $_SERVER['HTTP_X_FORWARDED_FOR'];
function testIP($ip){
    for($i=0, $cnt=count($ip); $i<$cnt; $i++) {
                                $ipregex = preg_replace("/\./", "\.", $ip[$i]);
                                $ipregex = preg_replace("/\*/", ".*", $ipregex);
                                if(preg_match('/^'.$ipregex.'/', $_SERVER['HTTP_X_FORWARDED_FOR'])) //REMOTE_ADDR might be the way to go - h_x_f_f is best used when serving behind proxy
                                                return $uid . ':' . $pwd;
    }
    return "nomatch";
}


  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
  	header("Location: index.php");
  }

  if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
  }
  $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp


?>
<h2> you have logged in</h2>
