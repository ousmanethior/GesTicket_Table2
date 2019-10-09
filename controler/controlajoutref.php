<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['nomref'])){
    $nom= $_POST['nomref'];
    var_dump( $nom);
   //3-Traitement => Connexion dans une BD
   include_once('./db.php');
   $req =$pdo-> exec("INSERT INTO `referentiel`  VALUES ('$nom')");
   header("Location: ../views/listref.php");

}else{
    header("Location: ../views/ajoutref.php?erreur=Veuillez remplir le champs");  
}

?>