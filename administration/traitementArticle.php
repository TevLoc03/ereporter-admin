<?php require 'header.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#"></a>
        </li>
        <li class="breadcrumb-item active">Vérification de publication</li>
      </ol>
      <!-- Icon Cards-->


<div class="container-fluide">

<?php

extract($_POST);
extract($_GET);
/*
if(isset($_GET)){
    

}
if(isset($_POST)){
    
  
if(isset($titreArticle) && isset($corpsArticle) && isset($idArticle)){
    $update = $DB->query('UPDATE articles SET titreArticle = :titre, corpsArticle = :corps, statutArticle = :statut WHERE idArticle = :id',[
        'titre' => $titreArticle,
        'corps' => $corpsArticle,
        'id' => $idArticle,
        'statut' => "validé"
    
      ]);
    
}


    
}*/

        ?>

<?php

$url = "http://webngraf.com/api/news/read_once.php?idArticle=$idArticle";
                $output = file_get_contents($url);
              $datas = json_decode($output);

              

?>


<div class="row">
          <div class="col-12">
              <article class="text-center">
              <form action="http://webngraf.com/api/news/update.php" method="post" name="formUpdate" id="formUpdate">
                  <input type="hidden" name="idArticle" value="<?= $datas->idArticle ?>">
              <h4><input name="titreArticle" type="text" style="width:50%;" value="<?= $datas->titreArticle ?>"></h4>
                      <div class="col-12" style="max-height:200px;overflow:hidden;">
                          <figure>
                              <img src="http://webngraf.com/api/images-articles/<?= $datas->imgArticle ?>">
                              <input type="hidden" value="<?= $datas->imgArticle ?>" name="imgArticle">
                          </figure>
                      </div>
                      <div class="col-12">
                          
                          <span class="label label-success pull-right" class="label"><?= $datas->statutArticle ?> </span>
                          
                       <textarea name="corpsArticle" id="" cols="60" rows="12"><?= $datas->corpsArticle ?> </textarea>
        
                      </div>
                      <div class="col-12">
                          <input type="submit" class="btn btn-success" value="Valider">
                </form> 
                          <a href="deletArticle.php?idArticle=<?=$datas->idArticle ?> "> <button class="btn btn-danger"> Suprimmer</button></a>
                          <br>
                          <br>
                      </div>





                      <div class="col-12">
                        <form method="post" action="retourArticle.php">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Proposer la modification de l'article</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="commentaire">
                                    <option>Photo non conforme aux conditions d'utilisations</option>
                                    <option>Contenue innaproprié</option>
                                    <option>Contenue sans interet</option>
                                    <option>Trop de fautes d'orthographe</option>
                                    <option>Manque d'informations</option>
                                </select>
                                <br>
                                <input type="hidden" value="<?=  $datas->idArticle ?>" name="id">
                                <input type="submit" class="btn btn-warning" value="Renvoyer pour modifications">
                            </div>
                        </form>
                      </div>

                      
              </article>
          </div>
</div>
         


          
</div>




</div>




    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>E-Reporter - 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>


    


  </div>
</body>

</html>