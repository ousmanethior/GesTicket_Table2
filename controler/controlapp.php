<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['prenom']) and !empty($_POST['nom']) 
and !empty($_POST['email']) and !empty($_POST['ref']) 
and !empty($_POST['cin']) and !empty($_POST['tel'])  
and !empty($_POST['session']) and !empty($_POST['daten'])
and !empty($_POST['lieu']) and !empty($_POST['adresse'])
and !empty($_POST['pwd']) and !empty($_POST['conf'])){
    if($_POST['pwd'] != $_POST['conf']){
        header("Location: ../views/inscription.php?erreur= le mot de passe est différent de la confirmation");
    }
    else{
        $prenom= $_POST['prenom'];
        $nom= $_POST['nom'];
        $email= $_POST['email'];
        $daten= $_POST['daten'];
        $lieu= $_POST['lieu'];
        $adr= $_POST['adresse'];
        $ref= $_POST['ref'];
        $cin=$_POST['cin'];
        $tel=$_POST['tel'];
        $session=$_POST['session'];
        $pwd=$_POST['pwd'];
        //3-Traitement => Connexion dans une BD
        include_once('./db.php');
        $req =$pdo-> exec("INSERT INTO apprenant (id_app, nom, prenom, cin, email, datenaiss, lieu, ref, ses, tel, statut, adresse, pwd) 
        VALUES (NULL, '$nom', '$prenom', '$cin', '$email', '$daten', '$lieu', '$ref', '$session', '$tel', NULL, '$adr', '$pwd')");
        header("Location: ../views/listapp.php");
    }
}else{
    header("Location: ../views/inscription.php?erreur= Remplissez tous champs");  
}




?>