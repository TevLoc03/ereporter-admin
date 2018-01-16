<?php require 'header.php' ;?>
<style>


</style>  

<div class="content-wrapper">
    <div class="container-fluid">
        <?php
         if(isset($_GET['code']) && $_GET['code'] == 1){
            
            echo("<div class='alert alert-success' role='alert'>
            Article supprimé
            </div>");
        }
        if(isset($_GET['code']) && $_GET['code'] == 2){
            
            echo("<div class='alert alert-success' role='alert'>
            Demande de modification envoyée
            </div>");
        }



            ?>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Publications du jour</a>
        </li>
        <li class="breadcrumb-item active">Publications récentes</li>
      </ol>
      <!-- Icon Cards-->


<div class="container-fluide">

<?php
            $d =  date('Y-m-d');

            $articles = $DB->query("SELECT * FROM articles WHERE datePublication = '".$d."' ");
            foreach($articles as $article):
        ?>
	<div class="row">
          <div class="col-12 col-md-8">
              <article>
                      <div class="col-12">
                          <figure>
                              <img src="images/<?= $article->imgArticle ?>">
                          </figure>
                      </div>
                      <div class="col-12">
                          <span class="label label-success pull-right" class="label"><?= $article->statutArticle ?></span>
                          <h4><?= $article->titreArticle ?></h4>
                          <p><?= $article->corpsArticle ?></p>
                          <section>
                              <i class="glyphicon glyphicon-folder-open"></i>
                              <i class="glyphicon glyphicon-user"></i>
                              <i class="glyphicon glyphicon-calendar"></i>
                              <i class="glyphicon glyphicon-eye-open"></i>
                              <a href="traitementArticle.php?idArticle=<?= $article->idArticle ?>"><button class="btn btn-primary btn-sm pull-right">Traiter l'article ... </button></a>
                          </section>
                      </div>
              </article>
          </div>
          <div class="col-12 col-md-4 flou">
              <article>
              <div class="row form-group">
              <div class="col-12">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                      </div>
                      <div class="panel-body body-panel">
                          <ul class="chat">
                              <li class="left clearfix"><span class="chat-img pull-left">
                                  <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                              </span>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <strong class="primary-font">Reporter</strong> <small class="pull-right text-muted">
                                              <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                          dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                              <li class="right clearfix"><span class="chat-img pull-right">
                                  <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                              </span>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                          <strong class="pull-right primary-font">Modérateur</strong>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                          dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                              <li class="left clearfix"><span class="chat-img pull-left">
                                  <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                              </span>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <strong class="primary-font">Reporter</strong> <small class="pull-right text-muted">
                                              <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                          dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                              <li class="right clearfix"><span class="chat-img pull-right">
                                  <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                              </span>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                          <strong class="pull-right primary-font">Modérateur</strong>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                          dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <div class="panel-footer clearfix">
                          <textarea class="form-control" rows="3"></textarea>
                          <span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12" style="margin-top: 10px">
                              <button class="btn btn-warning btn-lg btn-block" id="btn-chat">Send</button>
                          </span>
                      </div>
                  </div>
              </div>
              </article>
          </div>


<?php endforeach ;?>

          
  </div>





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
