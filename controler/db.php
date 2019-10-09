<?php
   //a)connexion au SGBD login/Mot de passe Mysql
   $dsn = 'mysql:host=localhost;dbname=gesticketsa;port=3306;charset=utf8';
   //b) Selectionner BD
   try {
<<<<<<< HEAD
      $pdo = new PDO($dsn, 'ramaba' , 'Saliaba@rm.2019');
      
=======
      $pdo = new PDO($dsn, 'ouze' , 'malamine10');
>>>>>>> 499cc36c2d7fa2bac4dbf169174e29da3a0a59b3
      }
      catch (PDOException $exception) {
         
         //mail('fauxmail@votremail.com', 'PDOException', $exception->getMessage());
         exit('Erreur de connexion à la base de données');  
   }
?>