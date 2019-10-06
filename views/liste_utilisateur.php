<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <title>Liste utilisateur</title>
</head>
<body>
    <header>
        <div class="profil">
            <img src="../public/img/as.jpg" alt="">
            <div class="point"></div>
            <p>Astou Ndiaye</p> 
        </div>
        <ul>
                <li><a href="formsession.php">Session</a>
                    <ul >
                        <li><a href="formsession.php">Nouveau</a></li>
                        <li><a href="liste_session.php">Liste </a></li>
                    </ul>
                </li>
                <li ><a href="formutilisateur.php">Utilisateur</a>
                    <ul>
                        <li><a href="formutilisateur.php">Nouveau</a></li>
                        <li><a href="liste_utilisateur.php">Liste </a></li>
                    </ul>
                </li>
        </ul>
    </header>
    <div class="logo">
        <img src="../public/img/sa logo.png" alt=""/>
        <h3 style="margin-left: 490px";>Liste utilisateur</h3>
    </div>
      <div class="container1">
        <?php
           include_once('../controler/db.php');
           $query = $pdo->query("SELECT * FROM `user` ");
           $users= $query->fetchAll();
          // var_dump($users) ;

        ?>
        <table style="width: 1000px";>
          <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Profil</th>
                <th>Login</th>
            </tr>
          </thead> 
          <tbody>
             <?php foreach ($users as $key => $user) { ?>
                    <tr>
                       <td><?php echo $user['nom'];?></td>
                       <td><?php echo $user['prenom'];?></td>
                       <td><?php echo $user['profil'];?></td>
                       <td><?php echo $user['login'];?></td>
                    </tr>
             <?php } ?>
         <tbody>
        </table>
     </div >
    <footer></footer>   
</body>
</html>