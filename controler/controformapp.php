<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['prenom']) and !empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['referentiel']) and !empty($_POST['cinpassport']) and !empty($_POST['telephone'])){
        $prenom= $_POST['prenom'];
        $pnom= $_POST['nom'];
        $email= $_POST['email'];
        $referentiel= $_POST['referentiel'];
        $cinpassport=$_POST['cinpassport'];
        $telephone=$_POST['telephone'];
        //3-Traitement => Connexion dans une BD
        include_once('./db.php');
        $req =$pdo-> exec("INSERT INTO `listapp` (`matricule`, `prenom`, `nom`, `email`, `referentiel`, `cinpassport`, 'telephone`) VALUES (NULL, '$prenom', '$nom', '$email', '$referentiel', '$cinpassport', '$telephone'");
        header("Location: ../views/listapp.php");
       
}else{
    header("Location: ../views/formapp.php?erreur= Remplissez tous champs");  
}




?>