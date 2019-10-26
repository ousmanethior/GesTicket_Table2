<?php
   //a)connexion au SGBD login/Mot de passe Mysql
   $dsn = 'mysql:host=localhost;dbname=gesticketsa;port=3306;charset=utf8';
   //b) Selectionner BD
   try {
<<<<<<< HEAD
        $pdo = new PDO($dsn, 'ramaba' , 'Saliaba@rm.2019');
=======
        $pdo = new PDO($dsn, 'groupe2' , 'Groupe2@');
>>>>>>> 90cff80386c007f52e72225116c2ac95e8e41329
      }
      catch (PDOException $exception) {
         mail('fauxmail@votremail.com', 'PDOException', $exception->getMessage());
         exit('Erreur de connexion à la base de données');
   }
?>