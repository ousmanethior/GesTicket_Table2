
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=../public/css/listeapp.css>
  </head>

  <body>
  <div class="col pt-2" style='background:url("4.jpg"); background-size:cover;'>
      <div class="container border border-primary w-100 h-100 mt-3">

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
                      <th scope="col"></th>
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
                  <td><select class="form-control w-100 d-inline-block" name="menu" id="">
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
                  <td> <select class="form-control w-100 d-inline-block" name="menu" id="">
                      <option value=""> </option>
                      <option value="">Fruit</option>
                      <option value="">Jus</option>
                     
                  </select></td>
                    </tr>
                    <tr>
                      <th scope="row">Mardi <input type="hidden" name="jour2" value="Mardi"></th>
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
                      <option value=""> </option>
                      <option value="">Fruit</option>
                      <option value="">Jus</option>
                  </select></td>
                    </tr>
                    <tr>
                      <th scope="row">Jeudi <input type="hidden" name="jour4" value="Jeudi"> </th>
                      <td><input type="date" name="" value=""></td>
                      
                       
                      <?php 
                    foreach ($menus as $key => $menu) {  
                    ?> 
                    <?php
                     
                        }
                    ?>
                  </select></td>
                  
                      <option value=""> </option> 
                      <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
 
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
                      <option value=""> </option>
                      <option value="">Fruit</option>
                      <option value="">Jus</option>
                  </select></td>
                    </tr>
                    <tr>
                      <th scope="row">Vendredi <input type="hidden" name="jour5" value="Vendredi"></th>
                      <td><input type="date" name="" value=""></td>
                      <option value=""> </option> 
                      <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                       
                    <?php
                     
                        }
                    ?>
                  
                      <option value=""> </option> 
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
                      <option value=""> </option>
                      <option value="">Fruit</option>
                      <option value="">Jus</option>
                  
                    </tr>
                  </tbody>
      </table>
                    <br>
                <div class="row justify-content-center">
                        <button class="btn btn-primary mb-2" type='submit'>Enregistrer</button>
                </div>
        </div>
    </div>
                
              
          
<!--------------------------------------------- FORMULAIRE ---------------------------------------------->
          


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    <?php
  include_once('../controler/db_connect.php');
  $query = $pdo->query("SELECT * FROM `menu` ");
  $menus= $query->fetchAll();
  // var_dump($users) ;
?>
<style type="text/css">
 .bg-primary{
   background-color: #068689 !important;
 }
 .navbar-inverse {
    background-color: #068689 ;
    border-color: #068689 ; 
}
</style>
</body>
</html>