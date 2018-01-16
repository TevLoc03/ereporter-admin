<?php

require 'php/db.class.php';
$DB = new DB();


if(isset($_POST)){
    extract($_POST);
    if(isset($commentaire) && isset($id)){

        $retour = $DB->query('UPDATE articles SET commentaire = :comm WHERE idArticle = :id',[
            'comm' => $commentaire,
            'id' => $id
        
          ]);

          header('Location: index.php?code=2');

    }
    else{

        echo "Une erreur est survenue";

    }

  }

  ?>