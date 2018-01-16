<?php

require 'php/db.class.php';
$DB = new DB();


if(isset($_GET['idArticle'])){

    $product = $DB->query('DELETE FROM articles WHERE idArticle = :id',['id' => $_GET['idArticle'] ]);
  header('Location: index.php?code=1');

}



?>