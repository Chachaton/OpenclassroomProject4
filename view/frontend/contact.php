<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="contact" content="">
    <link rel="icon" href="">

    <title>Jean Forteroche</title>

    <!-- Bootstrap core CSS -->
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../public/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../../public/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Jean Forteroche</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="home.php">Accueil</a></li>
                <li><a href="author.php">L'auteur</a></li>
                <li><a href="chapters.php">Le roman</a></li>
                <li><a href="contact.php">Contactez-moi</a></li>  
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="../../public/images/caroussel1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Contact</h1>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->

    <!--Formulaire de contact-->
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Nom</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" >
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput2">Prénom</label>
        <input type="text" class="form-control" id="exampleFormControlInput2">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Adresse mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea2">Votre message</label>
        <textarea class="form-control" id="exampleFormControlTextarea2" rows="10"></textarea>
      </div>
    </form>

      <!-- FOOTER -->
      <footer>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="logIn.php">Admin</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="public/js/jquery.min.js"><\/script>')</script>
    <script src="../../public/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../public/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../public/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
