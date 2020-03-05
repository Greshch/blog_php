<?php

function articles_all($link)
{
   /* return [
      ['id' => 1, 'title' => "Title1" , 'date' => "2015-01-01", 'content' => "Content1"],
      ['id' => 2, 'title' => "Title2" , 'date' => "2015-01-02", 'content' => "Content2"],
    ];*/
   $query = "SELECT * FROM articles ORDER BY id DESC";
   $result = mysqli_query($link, $query);
   if (!$result) {
       die(mysqli_error($link));
   }
   $articles = array();
   while (($row = mysqli_fetch_assoc($result))) {
       $articles[] = $row;
   }
   return $articles;
}

function articles_get($link, $id)
{
    /*return ['id' => 1, 'title' => "Это простой заголовок" , 'date' => "2015-01-01",
        'content' => "Здесь будет статья"];*/
    $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id);
    $result = mysqli_query($link, $query);
    if (!$result) {
        die(mysqli_error($link));
    }
    $article = mysqli_fetch_assoc($result);
    return $article;
}

function articles_new($title, $date, $content)
{

}

function articles_edit($id, $title, $date, $content)
{

}

function articles_delete($id)
{

}