<?php 
/* require 'administration/php/db.class.php';
$DB = new DB();


if(isset($_POST['login']) && isset($_POST['password'])){

$verif = $DB->query("SELECT * FROM administrateurs WHERE idAdmin = 1");
foreach($verif as $v){

    if($v->login == $_POST['login'] && $v->password == $_POST['password']){

        header('Location : administration/index.php');

    }
    else{

        echo("<div class='alert alert-danger' role='alert'>
                Mot de passe incorrect
        </div>");

    }

}



}
*/
?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" >
    <title>Corse Matin - E-reporter</title>
  </head>
  <body>

  
  <div class="container">
    <div class="row center-verticale">
        <div class="col-md-12">
        <div class="logo">
            <img src="images/logo.png" alt="">
        </div>
            <div class="wrap">
                <p class="form-title">
                    Connexion à l'administration</p>
            <form action="administration/index.php" method="post" class="login">  
                <input type="text" placeholder="login" name="login"required />
                <input type="password" placeholder="Password" name="password" required />
                <input type="submit" value="connexion" class="btn btn-default btn-lg" />
                </form> 
            </div>
        </div>
    </div>
</div>

    
















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>