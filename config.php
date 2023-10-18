<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'apfi');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$siteKey = "6LcffLUhAAAAANgfZZedgL0x8w_mBxHUi-zH4dIr";
$secretKey = "6LcffLUhAAAAAHFKo8yWUUg4OOTljserXWEhHN3c";
?>