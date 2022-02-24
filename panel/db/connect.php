<?php 

$ip = "localhost";
$un = "root";
$pw = "";
$db = "reatorapp";

$conn = new mysqli($ip, $un, $pw);

if ($conn->connect_error) {
    echo "<h1>Nah</h1>";
}else {
    echo "<h1>Worked</h1>";
}

?>