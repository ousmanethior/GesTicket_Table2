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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
  </head>
  <body>
<<<<<<< HEAD
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
                 <div class="row  w-100 ">
                   <div class="col-3">
                      <img src="../public/img/sa logo.png" class="img-fluid mt-2" alt="">
                    </div>
                    <div class="col ">
                      <h2 class="text-center text-info mt-5 ">Planning menu</h2>
                    </div>
                 </div>
                 <div class="row  w-100 m-0">
                   <div class="col ml-3">
                   
                   <form class=" rounded mt-1" action="../controler/controlplanmenu.php" method="post">
                        <div>
                            <?php 
                                if(isset($_GET['erreur'])){
                                    echo $_GET['erreur'];
                                }    
                            ?>
                        </div>
                        <?php 
                              $query = $pdo->query("SELECT * FROM `menu` ");
                              $menu= $query->fetchAll(); 

                              $query = $pdo->query("SELECT * FROM `dessert` ");
                              $dessert= $query->fetchAll(); 
                          ?>  
=======
  <div class="col pt-0" style='background:url("4.jpg"); background-size:cover;'>
      <div class="container border border-primary w-130 h-50 mb-5">

              <div>
                    <nav class="navbar navbar-inverse bg-primary">
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
        </div>
      
   <div class="logo">
     <img src="../public/img/sa logo.png" alt=""/>
   </div>
        <div class="row">
            <div class="col-12">
              <h3 class="text-center">PLANIFIER MENU</h3>
                <table class="table table-bordered col-12 text-center">
                  <thead>
                    <tr>
                      <th scope="col">Jour</th>
                      <th scope="col">Date</th>
                      <th scope="col">Menu 1</th>
                      <th scope="col">Déssert</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Lundi<input type="hidden" name="jour1" value="Lundi"></th>
                      <td><input type="date" name="" value=""></td>
                      <option value=""></option>
                      <?php 
                    foreach ($menus as $key => $menu) {
                    ?>
                       <option value=""><?php echo $menu['Nom'];?></option> 
                    <?php
                     
                        }
                    ?>
                  </select></td>
                  <td><select class="form-control w-50 d-inline-block" name="menu" id="">
                      <option value=""></option> 
                      <option value="">Thiep</option> 
                      <option value="">Yassa</option> 
                      <option value="">Mbaxal</option> 
                      <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                       <option value=""><?php echo $menu['Nom'];?></option> 
                    <?php
                     
                        }
                    ?>
                  
                  </select></td>
                  <td> <select class="form-control w-70 d-inline-block" name="menu" id="">
                      <option value=""> </option>
                      <option value="">Fruit</option>
                      <option value="">Jus</option>
                     
                  </select></td>
                    </tr>
                    <tr>
                      <th scope="row">Mardi<input type="hidden" name="jour2" value="Mardi"></th>
                      <td><input type="date" name="" value=""></td>
                      <option value=""> </option> 
                      <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                       <option value=""><?php echo $menu['Nom'];?></option> 
                    <?php
                        }
                    ?>
                  </select></td>
                      <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                       <option value=""><?php echo $menu['Nom'];?></option> 
                    <?php
                     
                        }
                    ?>
                  </select></td>
                  <td> <select class="form-control w-100 d-inline-block" name="menu" id="">
                      <option value=""> </option> 
                      <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                       <option value=""><?php echo $menu['Nom'];?></option> 
                    <?php
                     
                        }
                    ?>
                  </select></td>
                  <td> <select class="form-control w-100 d-inline-block" name="menu" id="">
                      
                      <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                       <option value=""><?php echo $menu['Nom'];?></option> 
                    <?php
                     
                        }
                    ?>
                      <option value=""></option>
                      <option value="">Fruit</option>
                      <option value="">Jus</option>
                  </select></td>
                    </tr>
                    <tr>
                      <th scope="row">Mercredi <input type="hidden" name="jour3" value="Mercredi"></th>
                      
                      <td><input type="date" name="" value=""></td>
                       
                      <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                    <?php
                     
                        }
                    ?>
                  </select></td>
                      <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
>>>>>>> e0fe04889fc943f4c14933b27af8c8cc814c8ea6
                        
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                             
                            </label>
                            <div class="col-sm-6">
                            <input type="date" class="form-control form-control-sm" name="daten" Required>
                            </div>
                        </div>
                        <div class="form-group row"> 
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                
                            </label>
                            <div class="col-sm-6">
                                <select class="form-control " name="menu1"  Required>
                                   <option value="">Choisir menu1</option>
                                   <?php foreach ($menu as $key => $m) { ?>
                                   <option value="<?php echo $m['id_menu'];?>"><?php echo $m['nom_menu'];?></option>
                                   <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row"> 
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                
                            </label>
                            <div class="col-sm-6">
                                <select class="form-control " name="menu2"  Required>
                                   <option value="">Choisir menu2</option>
                                   <?php foreach ($menu as $key => $m) { ?>
                                   <option value="<?php echo $m['id_menu'];?>"><?php echo $m['nom_menu'];?></option>
                                   <?php } ?>
                                </select>
                            </div>
                          </div>

                          <div class="form-group row"> 
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                
                            </label>
                            <div class="col-sm-6">
                                <select class="form-control " name="menu3"  Required>
                                   <option value="">Choisir menu3</option>
                                   <?php foreach ($menu as $key => $m) { ?>
                                   <option value="<?php echo $m['id_menu'];?>"><?php echo $m['nom_menu'];?></option>
                                   <?php } ?>
                                </select>
                            </div>
                          </div>
                       
                          <div class="form-group row"> 
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                
                            </label>
                            <div class="col-sm-6">
                                <select class="form-control " name="menu4"  Required>
                                   <option value="">Choisir fast-food1</option>
                                   <?php foreach ($menu as $key => $m) { ?>
                                   <option value="<?php echo $m['id_menu'];?>"><?php echo $m['nom_menu'];?></option>
                                   <?php } ?>
                                </select>
                            </div>
                          </div>

                          <div class="form-group row"> 
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                
                            </label>
                            <div class="col-sm-6">
                                <select class="form-control " name="menu5"  Required>
                                   <option value="">Choisir fast-food2</option>
                                   <?php foreach ($menu as $key => $m) { ?>
                                   <option value="<?php echo $m['id_menu'];?>"><?php echo $m['nom_menu'];?></option>
                                   <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="form-group row"> 
                            <label for="inputPassword" class="col-sm-3 col-form-label text-secondary font-weight-bold">
                                
                            </label>
                            <div class="col-sm-6">
                            <select class="form-control " name="menu6"  Required>
                                   <option value="">dessert</option>
                                   <?php foreach ($dessert as $key => $d) { ?>
                                   <option value="<?php echo $d['id_dess'];?>"><?php echo $d['nom_dess'];?></option>
                                   <?php } ?>
                               </select>
                            </div>
                          </div>
                          <div class="row justify-content-center">
                            <button class="btn btn-primary mb-2 mt-2" type='submit' name="valider">Enregistrer</button>
                          </div>
                    </form>
                   </div>
                 </div>
             </div>
        <!-- Footer -->
          <div class="row bg-primary  row-footer">
             csdcs<?php  include_once('../controler/db.php'); ?>
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
    
    .rounded {
        border-radius: 50px !important;
    }
    .btn {
        font-weight: 810;
        border-radius: 30px;
        width: 200px;
    }
    .row-footer {
        height: 30px;
        margin-top: 18px;
    }
    .table td, .table th {
    width: 5px !important;
    height: 5px !important;
    padding:0px;
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