<?php 

$link = mysqli_connect('localhost', 'root', '', 'hospital');

if ($link->connect_errno) {
    echo "Failed to connect to MySQL: " . $link->connect_errno;
}