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

function articles_new($link, $title, $date, $content)
{
    $title = trim($title);
    $content = trim($content);

    if ($title == "") {
        return false;
    }

    $tmp = "INSERT INTO articles(title, date, content) VALUES('%s', '%s', '%s');";
    $query = sprintf($tmp, mysqli_real_escape_string($link, $title),
        mysqli_real_escape_string($link, $date),
        mysqli_real_escape_string($link, $content)
    );
    echo $query."<br>";
    $result = mysqli_query($link, $query);
    if (!$result) {
        die(mysqli_error($link));
    }
    return true;
}

function articles_edit($link, $id, $title, $date, $content)
{
    /*echo __FILE__." ".__METHOD__."<br>";
    $file = fopen('log.txt', 'w');
    fwrite($file, __FILE__." ".__METHOD__);
    fclose($file);*/
    $title = trim($title);
    $date = trim($date);
    $content = trim($content);
    $id = (int)$id;

    if ($title == "") {
        return false;
    }

    $sql = "UPDATE articles SET title='%s', date='%s', content='%s' WHERE id='%d';";
    $query = sprintf($sql,
        mysqli_real_escape_string($link, $title),
        mysqli_real_escape_string($link, $date),
        mysqli_real_escape_string($link, $content),
        $id
    );
    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }
    return mysqli_affected_rows($link);
}

function articles_delete($link, $id)
{
    $id = (int)$id;
    if ($id == 0) {
        return false;
    }
    $sql = "DELETE FROM articles WHERE id='%d';";
    $query = sprintf($sql,$id);
    $result = mysqli_query($link,$query);
    if (!$result) {
        die(mysqli_error($link));
    }
    return mysqli_affected_rows($link);
}

function articles_intro($text, $len = 300)
{
    return mb_substr($text, 0, $len);
}