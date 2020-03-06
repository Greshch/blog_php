<?php

require_once ("../database.php");
require_once ("../models/articles.php");

$link = db_connect();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "";
}

/*echo "FILL<br>";
echo "<pre>";
print_r($_GET);
echo "</pre>";*/

if ($action == "add") {
    if (!empty($_GET)) {
        echo "FILL<br>";
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
        echo "FILL<br>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        //articles_new($link, $_GET['title'], $_GET['date'], $_GET['content']);
        //header("Location: index.php");
    }
    include ("../views/article_admin.php");
} else {
    $articles = articles_all($link);
    include ("../views/articles_admin.php");
}


/*echo "admin panel<br>";*/