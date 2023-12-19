<?php
$db["host"] = "94.198.216.114";
$db["port"] = "2525";
$db["user"] = "root";
$db["pass"] = "hZoE-R6H5hFYX-";
$db["dbname"] = "books";
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    $db["dbname"]
));