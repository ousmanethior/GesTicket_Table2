<!doctype html>
<html lang="en">
<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Liste des Menus</title>
</head>
<body>
<nav class="navbar bg-primary">
<div > 
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Assistante Directrice
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Creer un menu</a></li>
          <li><a href="#">Lister les menus</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Apprenant
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Choisir un menu</a></li>
          <li><a href="#">Lister les menus</a></li>
          
  </div>
</nav>
<div><img src="../public/img/sa logo.png" alt=""/></div>
=======
    <title>
    
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
>>>>>>> 80ef429bcc9d4a0cecc04a0d9abbc4cbf4109551

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
  </head>
  <body>
     <div class="container-fluid">
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
        <!-- Table--> 
             <div class="row ">
                 <div class="row  w-100 m-0">
                   <div class="col-3">
                      <img src="../public/img/sa logo.png" class="img-fluid mt-2" alt="">
                    </div>
                    <div class="col ">
                      <h2 class="text-center text-info mt-2">Liste menu</h2>
                    </div>
                 </div>
                 <div class="row  w-100 m-0">
                 <div class="col ml-3">
                    <?php
                        include_once('../controler/db.php');
                        $query = $pdo->query("SELECT * FROM `menu` ");
                        $users= $query->fetchAll();
                     ?>
                    <table id="example" class="table table-striped table-bordered ">
                        <thead class="bg-primary text-white">
                                <tr>
                                <th scope="col">Menu</th>
                                <th scope="col">Action</th>
                                </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php foreach ($users as $key => $user) { ?>
                                <tr>
                                    <td><?php echo $user['nom_menu'];?></td>
                                    <td> 
                                    <a  href="./modifmenu.php?edit=<?php echo $user['id_menu'];?>"> <i class="material-icons">border_color</i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                   </div>
                 </div>
             </div>
        <!-- Footer -->
          <div class="row bg-primary  row-footer">
             csdcs
          </div>
      </div>

    <style type="text/css">
<<<<<<< HEAD

 .bg-primary {
    color: #fff;
    background-color: #068689 !important;
=======
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
    .table td, .table th {
    width: 5px !important;
    height: 5px !important;
    padding:0px;
>>>>>>> 80ef429bcc9d4a0cecc04a0d9abbc4cbf4109551
}
 
      </style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "lengthMenu": "Affiche _MENU_ entrées",
            "zeroRecords": "inexistant veuillez vérifier l'orthographe",
            "info": "Affiche _PAGE_ de _PAGES_",
            "infoEmpty": "Aucun enregistrement disponible",
            "infoFiltered": "(filtré de _MAX_ total enregistrements)"
        }
    } );
} );
</script>
  </body>
</html>