<?php

require_once("database.php");
require_once("models/articles.php");

$link = db_connect(); // from database.php
$articles = articles_all($link); // from models/articles.php

include("views/articles.php"); // then when we got all neccessery data we draw it

