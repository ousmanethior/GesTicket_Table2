<!DOCTYPE html>
<html lang="en">
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
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Prénom</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="inputPassword" placeholder="Prénom">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">CIN/Passeport</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="inputPassword" placeholder="CIN/Passeport">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mail</label>
                <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="inputPassword" placeholder="exemple@gmail">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Téléphone</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="inputPassword" placeholder="773893345">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Référentiel</label>
                <div class="col-sm-10">
                    <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <button type="reset" class="btn btn-primary">annuler</button>
            <button type="submit" class="btn btn-primary">Inscrire</button>
       </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>   
</html>