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
   <div class="col pt-2" style='background:url("4.jpg"); background-size:cover;'>
     <img src="../public/img/sa logo.png" alt=""/>
     <h2 style="margin-left: 410px";>Formulaire de création de Menu</h2>
   </div>
  <section>
      <form action="../controler/controlcreermenu.php" method="post">
          <div>
              <?php 
                  if(isset($_GET['erreur'])){
                      echo $_GET['erreur'];
                  }    
              ?>
          </div>
          <div class="input-form-session-m-b">
            <label for="">Nom du menu</label>
            <input type style="padding-bottom: 0px;height: 18px; margin: 18px;" type="text" name="nommenu" placeholder="">
          </div>
          <div class="input-form-session-m-b">
            <button type="submit">Créer</button>
          </div>
         
      </form>
  </section>
  <footer></footer>
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