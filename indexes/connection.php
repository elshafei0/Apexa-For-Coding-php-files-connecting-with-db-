<?php
$link = mysqli_connect("localhost", "root", "", "apexa_form");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    exit;
}
