<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>planmenu</title>
</head>
<body>
<nav class="navbar navbar-inverse bg-primary">
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
      <div class="container1">
        <?php
           include_once('../controler/db.php');
           $query = $pdo->query("SELECT * FROM `menu` ");
           $users= $query->fetchAll();
         
           // var_dump($users) ;

        ?>
</nav>

            <img src="../public/img/sa logo.png" alt=""/>
            <h3 style="margin-left: 500px";>Liste des Menus planifiés</h3>
            <br>
            <br>
            <br>
            <br>
            <table style="table width:50px border:2px;">
      <thead>
          <tr>
              <th style="width:5%;">Semaine</th>
              <th style="width:5%;">lundi</th>
              <th style="width:5%;">Mardi</th>
              <th style="width:5%;">Mercredi</th>
              <th style="width:5%;">Jeudi</th>
              <th style="width:5%;">Vendredi</th>
              
          </tr>
      </thead>
      <tbody>
                <tr>
                    <td>02875401</td>
                    <td>Mohamed</td>
                    <td>Rahhal</td>
                    <td>mohamed.rahhal@gmail.com</td>
                    <td>Rahhal</td>
                    <td>mohamed.rahhal@gmail.com</td>
                </tr>
                <tr>
                    <td>07986532</td>
                    <td>Rachid</td>
                    <td>Hadded</td>
                    <td>rachidhadded@gmail.com</td>
                    <td>Rahhal</td>
                    <td>mohamed.rahhal@gmail.com</td>
                </tr>
                <tr>
                    <td>03985421</td>
                    <td>Jamila</td>
                    <td>Rahmani</td>
                    <td>rahmani123@gmail.com</td>
                    <td>Rahhal</td>
                    <td>mohamed.rahhal@gmail.com</td>
                </tr>
                <tr>
                    <td>03985477</td>
                    <td>Samira</td>
                    <td>Soltani</td>
                    <td>samirasousou@gmail.com</td>
                    <td>Rahhal</td>
                    <td>mohamed.rahhal@gmail.com</td>
                </tr>
                <tr>
                    <td>03985477</td>
                    <td>Samira</td>
                    <td>Soltani</td>
                    <td>samirasousou@gmail.com</td>
                    <td>Rahhal</td>
                    <td>mohamed.rahhal@gmail.com</td>
                </tr>
            </tbody>
      </table>
 
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