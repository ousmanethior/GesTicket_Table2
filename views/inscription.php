<!doctype html>
<html lang="en">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Formulaire inscription</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info float-right">
   
    <div class="collapse navbar-collapse col-sm-2" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Référentiel
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="formsession.php">Nouveau</a>
                <a class="dropdown-item" href="liste_session.php">Liste</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Utilisateur
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="formutilisateur.php">Nouveau</a>
            <a class="dropdown-item" href="liste_utilisateur.php">Liste</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Session
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="ajoutref.php">Nouveau</a>
            <a class="dropdown-item" href="listref.php">Liste</a>
            <a class="dropdown-item" href="session_ref.php">Session_Référentiel</a>
            <a class="dropdown-item" href="liste_session_ref.php">Liste_Session_Référentiel</a>
            </div>
        </li>
        </ul>

    </div>
    </nav>
    <div class="col-4 ">
       <img src="../public/img/sa logo.png" alt=""/>
       <h3 style="margin-left: 410px";>Inscription</h3>
       <form>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="inputPassword" placeholder="Nom">
                </div>
=======
  <head>
    <title>
    
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid">
       <!-- menu -->
          <div class="row bg-primary">
            <div class="col-3">
                <img src="../public/img/as.jpg" class="tiket-img-fluid  rounded-circle " alt="">
>>>>>>> face95c4c83d23acc9ae21972ad84d6ecb6ebec6
            </div>
            <div class="col">
              <nav class="navbar navbar-expand-sm navbar-dark float-right">
                    <div class="collapse navbar-collapse col-sm-2" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Référentiel
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="formsession.php">Nouveau</a>
                                <a class="dropdown-item" href="liste_session.php">Liste</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Utilisateur
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="formutilisateur.php">Nouveau</a>
                            <a class="dropdown-item" href="liste_utilisateur.php">Liste</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Session
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="ajoutref.php">Nouveau</a>
                            <a class="dropdown-item" href="listref.php">Liste</a>
                            <a class="dropdown-item" href="session_ref.php">Session_Référentiel</a>
                            <a class="dropdown-item" href="liste_session_ref.php">Liste_Session_Référentiel</a>
                            </div>
                        </li>
                        </ul>
                    </div>
                </nav>
            
            </div>
          </div>
        <!-- Formulaire-->
          <div class="row">
                <div class="col">
                  <img src="../public/img/sa logo.png" class="img-fluid mt-2" alt="">
                </div>
                <div class="col-6">
                <h2 class="text-center text-primary mt-2">Inscription</h2>
                <form class="bg-primary">
                
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control border border-primary form-control-sm" id="inputPassword" placeholder="Password">
                </div>
                </div>
                </form>
                </div>
                <div class="col"></div>
          </div>
        <!-- Footer -->
          <div class="row"></div>
      </div>



      <style type="text/css">
       .tiket-img-fluid {
            max-width: 15%;
            height: auto;
        }
                    .img-fluid {
                max-width: 30%;
                height: auto;
            }
        .bg-primary {
          background-color: #068689 !important;
                }
                .text-primary {
               color: #068689 !important;
}
.border-primary {

border-color: #068689 !important;

}   
      </style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>