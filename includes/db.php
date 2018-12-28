<?php

define("DB_HOST", "localhost", true);
define("DB_USER", "root", true);
define("DB_PASS", "root", true);
define("DB_NAME", "cms", true);

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$connection) {
    die("Failed to connect to the database. <br>" . mysqli_error($connection));
}

?>
