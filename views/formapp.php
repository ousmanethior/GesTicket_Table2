<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <title>Formulaire Utilisateur</title>
</head>
<body>
<?php include_once('../includes/menu.php');?>
   <div class="logo">
     <img src="../public/img/sa logo.png" alt=""/>
     <h3 style="margin-left: 410px";>inscription Apprenant</h3>
   </div>
     <div class="container">
      <form action="../controler/controformapp.php" method="post">
           <div>
              <?php 
                  if(isset($_GET['erreur'])){
                      echo $_GET['erreur'];
                  }    
              ?>
           </div>
           <div class="input-form-session-m-t">
                <label for="">prenom</label>
                <input style="margin-left: 80px;" type="text" name="prenom" placeholder="prénom">
           </div>

          <div class="input-form-session-m-t">
              <label for="">nom</label>
              <input style="margin-left: 53px;" type="text" name="nom" placeholder="nom">
          </div>

          <div class="input-form-session-m-t">
              <label for="">email</label>
              <input style="margin-left: 80px"; type="email" name="email" placeholder="exemple@exemple.com">
          </div>
          <div class="input-form-session-m-t">
            <label for="">referentiel</label>
            <input style="margin-left: 6px"; type="text" name="referentiel" placeholder="">
        </div>

          <div class="input-form-session-m-t">
              <label for="">cinpassport</label>
              <input style="margin-left: 35px"; type="text" name="cinpassport" placeholder="">
          </div>

          <div class="input-form-session-m-t">
              <label for="">telephone</label>
              <input style="margin-left: 35px"; type="text" name="telephone" placeholder="">
          </div>



          <div class="input-form-session-m-t">
             <button type="reset" style="margin-left: 200px";>Annuler</button>
             <button type="submit">Créer</button>
          </div>
        </form>  
      </div>
        
    <footer></footer>   
</body>
</html>