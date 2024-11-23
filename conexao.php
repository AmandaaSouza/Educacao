<?php
$mysqli = new mysqli('localhost', 'root', '', 'login');

if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
}

?>