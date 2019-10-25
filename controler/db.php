<?php
   //a)connexion au SGBD login/Mot de passe Mysql
   $dsn = 'mysql:host=localhost;dbname=gesticketsa;port=3306;charset=utf8';
   //b) Selectionner BD
   try {
<<<<<<< HEAD
        $pdo = new PDO($dsn, 'papy' , 'King_sa2');
=======
<<<<<<< HEAD
        $pdo = new PDO($dsn, 'ramaba' , 'Saliaba@rm.2019');
=======
        $pdo = new PDO($dsn, 'papy' , 'King_sa2;
>>>>>>> ad45686af1f2af659625567504e7d29951452403
>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920
      }
      catch (PDOException $exception) {
     
         exit('Erreur de connexion à la base de données');
   }
?>