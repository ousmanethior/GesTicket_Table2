<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <title>Connexion</title>
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
        <h3 style="margin-left: 490px";>Formulaire de création de Référentiel</h3>
     </div>
  </div>
  <section>
      <form action="../controler/controlajoutref.php" method="post">
          <div>
              <?php 
                  if(isset($_GET['erreur'])){
                      echo $_GET['erreur'];
                  }    
              ?>
          </div>
          <div class="input-form-session-m-b">
            <label for="">Nom Référentiel</label>
            <input type="text" name="nomref" placeholder="">
          </div>
          <div class="input-form-session-m-b">
            <button type="submit">Créer</button>
          </div>
         
      </form>
  </section>
  <footer></footer>
</body>
</html>