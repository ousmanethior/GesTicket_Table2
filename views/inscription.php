<?php  include_once('../controler/db.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>
    
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  
     <div class="container-fluid"  style='background:url("4.jpg"); background-size:cover;'>
       <!-- menu -->
          <div class="row bg-primary">
            <div class="col-3 text-center">
                <img src="../public/img/as.jpg" class="tiket-img-fluid  rounded-circle" alt="">
                <p class="text-secondary font-weight-bold">Astou Ndiaye</p>
            </div>
            <div class="col">
              <nav class="navbar navbar-expand-sm navbar-dark float-right">
                    <div class="collapse navbar-collapse col-sm-3" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-secondary font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Référentiel
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="formsession.php">Nouveau</a>
                                <a class="dropdown-item" href="liste_session.php">Liste</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-secondary font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Utilisateur
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="formutilisateur.php">Nouveau</a>
                            <a class="dropdown-item" href="liste_utilisateur.php">Liste</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-secondary font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <div class="col-8">
                   <h2 class="text-center text-info mt-2 mb-5">Inscription</h2>
                   <form class="bg-primary rounded " action="../controler/controlapp.php" method="post">
                        <div>
                            <?php 
                                if(isset($_GET['erreur'])){
                                    echo $_GET['erreur'];
                                }    
                            ?>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                             Nom
                            </label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control form-control-sm" name="nom" placeholder="THIOR">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                             Prénom
                            </label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control form-control-sm" name="prenom" placeholder="Ousmane">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                             Date 
                            </label>
                            <div class="col-sm-6">
                            <input type="date" class="form-control form-control-sm" name="daten" placeholder="THIOR">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                             Lieu 
                            </label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control form-control-sm" name="lieu" placeholder="Dakar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                CIN/Passeport
                            </label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control form-control-sm" name="cin" placeholder="00edhjh45">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                Email
                            </label>
                            <div class="col-sm-6">
                            <input type="email" class="form-control form-control-sm" name="email" placeholder="exemple@gmail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                Téléphone
                            </label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control form-control-sm" name="tel" placeholder="77 777 77">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                Adresse
                            </label>
                            <div class="col-sm-6">
                                <textarea class="form-control form-control-sm" name="adresse"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php 
                                $query = $pdo->query("SELECT * FROM `referentiel` ");
                                $refs= $query->fetchAll();
                            ?>  
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                Référentiel
                            </label>
                            <div class="col-sm-6">
                                <select class="form-control form-control-sm" name="ref">
                                   <option value="">  </option>
                                    <?php foreach ($refs as $key => $ref) { ?>
                                    <option value="<?php echo $ref['id'];?>"><?php echo $ref['nomreferentiel'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php 
                                $query = $pdo->query("SELECT * FROM `session` ");
                                $sessions= $query->fetchAll(); 
                            ?>  
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                Session
                            </label>
                            <div class="col-sm-6">
                                <select class="form-control form-control-sm" name="session">
                                   <option value="">  </option>
                                   <?php foreach ($sessions as $key => $session) { ?>
                                   <option value="<?php echo $session['id'];?>"><?php echo $session['annee']."     ".$session['nom'];?></option>
                                   <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                Mot de passe
                            </label>
                            <div class="col-sm-6">
                            <input type="password" class="form-control form-control-sm" name="pwd">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                Confirmer
                            </label>
                            <div class="col-sm-6">
                            <input type="password" class="form-control form-control-sm" name="conf">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3"></div>
                            <div class="col-8 ml-50">
                                <button type="reset" class="btn btn-primary ">Annuler</button>
                                <button type="submit" class="btn btn-primary">Inscrire</button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
              <div class="col"></div>
          </div>
        <!-- Footer -->
          <div class="row bg-primary  row-footer">
             csdcs
          </div>
      </div>

    <style type="text/css">
    .tiket-img-fluid {
        max-width: 7%;
        height: auto;
    }
    .img-fluid {
        max-width: 30%;
        height: auto;
    }
    .bg-primary {
        background-color: #068689 !important;
    }
    .bg-secondary {
        background-color: #e0f0f0 !important;
    }
    .bg-info {
        background-color: #ee7f22 !important;
    }
    .text-primary {
        color: #068689 !important;
        }
    .text-primary {
        color: #068689 !important;
        }
        .text-info {
        color: #ee7f22 !important;
        }
        .text-secondary {
        color: #e0f0f0 !important;
        }
    .border-primary {
        border-color: #068689 !important;
    } 
    .btn-primary {
        color: #ee7f22;
        background-color: #fff;
        border-color: #e0f0f0;
    } 
    .col-form-label {
        padding-top: 10px;
        padding-left: 80px;
    }
    .form-control-sm {
        margin-top: 9px;
        margin-left: 100px;
    }
    .rounded {
        border-radius: 50px !important;
    }
    .btn {
        font-weight: 810;
        border-radius: 30px;
        width: 200px;
    }
    .row-footer {
        height:80%;
    }
 
      </style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>