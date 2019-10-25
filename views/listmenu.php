<!DOCTYPE html>
<html lang="en">
<head>
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
</nav>
<div><img src="../public/img/sa logo.png" alt=""/></div>

     <h3 style="margin-left: 410px";>Liste des Menus</h3>
  </div>
      <div class="container1">
        <?php
           include_once('../controler/db.php');
           $query = $pdo->query("SELECT * FROM `menu` ");
           $users= $query->fetchAll();
         
           // var_dump($users) ;

        ?>
  <table style="width: 1000px;height:80px;">
          <thead>
               <tr>
                <th>Nom des Menus</th>
                
                <th>Actions</th>
                </tr>
          </thead> 
          <tbody>
             <?php foreach ($users as $key => $user) { ?>
                    <tr>
                       <td><?php echo $user['nommenu'];?></td>
                       
                      <td>
                      <a  href="./modif.php?edit=<?php echo $user['nommenu'];?>"> <i class="material-icons">border_color</i></a> 
                     
                      <a href="../controler/controllistmenu.php?del=<?php echo $user['id'];?>"  onclick="return confirm('Voulez vous vraiment supprimer?')"><i class="material-icons">delete</i></a>

                     
                      </td>
                    </tr>
             <?php } ?>
         <tbody>
        </table>
        
     </div >
     
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