<?php
   //a)connexion au SGBD login/Mot de passe Mysql
   $dsn = 'mysql:host=localhost;dbname=gesticketsa;port=3306;charset=utf8';
   //b) Selectionner BD
   try {
<<<<<<< HEAD
        $pdo = new PDO($dsn, 'groupe2' , 'Groupe2@');

=======
        $pdo = new PDO($dsn, 'ramaba' , 'Saliaba@rm.2019');
>>>>>>> 80ef429bcc9d4a0cecc04a0d9abbc4cbf4109551
      }
      catch (PDOException $exception) {
     
         exit('Erreur de connexion à la base de données');
   }
?>