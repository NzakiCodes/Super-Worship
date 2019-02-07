<?php	
    define('SERVER', 'localhost');
	define('USER', 'root');
	define('PASSW', '');
	define('DB', 'super_worship_db');
	
	#Connection Process
	$dbconn = new mysqli(SERVER, USER, PASSW, DB);
	if ($dbconn->connect_error) {
		die("Cannot connect to server: ".$dbconn->connect_error );
	}
    else  {
        echo '<script>console.log("connected")</script>';
    }
	
 ?>