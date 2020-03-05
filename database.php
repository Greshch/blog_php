<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'd27pt4n32167');
define('DB_NAME', 'blog');

function db_connect() {
    $link = mysqli_connect(HOST, USER, PASS, DB_NAME)
    or die("Error: ".mysqli_error($link));

    if (!mysqli_set_charset($link, "utf8")) {
        printf("Error: ".mysqli_error($link));
    }
    return $link;
}


