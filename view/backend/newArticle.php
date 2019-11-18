<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../public/favicon.ico">

    <title>Jean Forteroche</title>

    <!-- Bootstrap core CSS -->
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../public/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../public/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../public/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php">Tableau de bord</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Déconnexion</a></li>

          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="newArticle.php">Ajouter un chapitre</a></li>
            <li><a href="changeArticle.php">Modifier un chapitre</a></li>
            <li><a href="manageReviews.php">Gérer les avis</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Billet simple pour l'Alaska</h1>

          <h2 class="sub-header">Ajouter un chapitre</h2>
          <div class="table-responsive">
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Date</label>
    <input type="date" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Chapitre</label>
    <input type="text" class="form-control" id="exampleFormControlInput2">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">Titre</label>
    <input type="text" class="form-control" id="exampleFormControlInput3">
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Légende</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea2">Texte</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="10"></textarea>
  </div>
  <div class="custom-file">
    <label class="custom-file-label" for="customFile">Ajouter une image</label>
    <input type="file" class="custom-file-input" id="customFile">
  </div>
</form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../public/js/jquery.min.js"><\/script>')</script>
    <script src="../../public/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../public/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../public/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
