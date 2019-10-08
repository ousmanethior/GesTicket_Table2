<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <title>Document</title>
</head>
<body>
<header></header>
  <div class="logo">
        <img src="../public/img/sa logo.png" alt=""/>
        <h3 style="margin-left: 490px";>AJOUT REFERENTIEL</h3>
     </div>
  </div>
  <section>
      <form action="../controler/controlconnexion.php" method="post">
          <div>
              <?php 
                  if(isset($_GET['erreur'])){
                      echo $_GET['erreur'];
                  }    
              ?>
          </div >
          <div class="input-form-ref-m-b" style="margin-top:100px;">
            <label for="" style="color: white; font-size: 24px; font-family: Arial;">Nom Referentiel</label>
            <input type="text" name="referentiel" style="margin-left:50px;" >
          </div>
         
          <div class="input-form-ref-m-b" style="margin-left:475px; margin-top:75px;">
            <button type="submit">Créer</button>
          </div>
         
      </form>
  </section>
  <footer></footer>
</body>
</html>