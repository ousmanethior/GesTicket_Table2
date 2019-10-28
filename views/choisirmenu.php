<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Connexion</title>
<head></head>         
<body>

<div class="col pt-2" style='background:url("4.jpg"); background-size:cover;'>
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
            <li><a href="#">Lister les menus</a></li>/
            
      </div>
      <div class="logo">
     <img src="../public/img/sa logo.png" alt=""/>
     <h2 style="margin-left: 410px;">Formulaire pour choisir un menu</h2>
   </div> 
   <section>
  <table>
  <th scope="col">Jour</th>
  <th scope="col">Choix du menu</th>
  <th scope="col">Dessert</th>
  <tr>
  <td><select class="form-control w-10 d-inline-block" name="menu" id="">
                      <option value=""></option> 
                      <option value="">Lundi</option> 
                      <option value="">Mardi</option> 
                      <option value="">Mercredi</option> 
                      <option value="">Jeudi</option> 
                      <option value="">Vendredi</option> 
                      <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                       <option value=""><?php echo $menu['Nom'];?></option> 
                    <?php
                     
                        }
                    ?>
                  
                  </select>
  <td>
  <select class="form-control w-1" name="menu" id="">
                      <option value=""></option> 
                      <option value="">Mbaxal</option> 
                      <option value="">Yassa</option> 
                      <option value="">Mafé</option> 
                      <option value="">Thiéb</option> 
                      <option value=""></option> 
                    
                
  </td>
  <td>
  <select class="form-control w-5" name="menu" id="">
                      <option value=""></option> 
                      <option value="">Fruit</option> 
                      <option value="">Jus</option>
  </td>
  </tr>
  </td>
  </tr>
  </table>
                <div class="row justify-content-center">
                        <button class="btn btn-primary mb-2" type='submit'>Enregistrer mes choix</button>
  </div>
   
      </section>
 
  <style type="text/css">
 .bg-primary{
   background-color: #068689 !important;
 }
 .navbar-inverse {
    background-color: #068689 ;
    border-color: #068689 ; 
}
</style>
<footer></footer>
</body>
</html>