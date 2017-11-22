<!DOCTYPE html>
<?php
$cookie_name = "Contatore";
$cookie_value = 2;
$cookie_time=time()+(86400 * 7);
$cookie_name1 = "tempo";
$cookie_value1 = $cookie_time;
$cookie_time1= time()+(86400 * 7);
if(!isset($_COOKIE[$cookie_name])) {

     echo "<h1>E' la prima volta che accedi <h1>";
	setcookie($cookie_name, $cookie_value,$cookie_time, "/");
    setcookie($cookie_name1, $cookie_value1,$cookie_time, "/");
} else {
     $cookie_value=$_COOKIE[$cookie_name]+1;
     $cookie_time=$_COOKIE[$cookie_name1];
     setcookie($cookie_name, $cookie_value,$cookie_time, "/");
     echo "<h3>Hai fatto l'accesso : " . $_COOKIE[$cookie_name]." volte</h3>";
}
?>
<?php

?>
<html>
<body>
</body>
</html>