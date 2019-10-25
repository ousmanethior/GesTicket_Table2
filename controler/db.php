<?php
   //a)connexion au SGBD login/Mot de passe Mysql
   $dsn = 'mysql:host=localhost;dbname=gesticketsa;port=3306;charset=utf8';
   //b) Selectionner BD
   try {
<<<<<<< HEAD
        $pdo = new PDO($dsn, 'ramaba' , 'Saliaba@rm.2019');
=======
        $pdo = new PDO($dsn, 'papy' , 'King_sa2;
>>>>>>> ad45686af1f2af659625567504e7d29951452403
      }
      catch (PDOException $exception) {
         mail('fauxmail@votremail.com', 'PDOException', $exception->getMessage());
         exit('Erreur de connexion à la base de données');
   }
?>