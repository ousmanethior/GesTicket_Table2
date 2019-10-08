<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['nom'])){
    var_dump( $login);
    var_dump( $password);
   //3-Traitement => Connexion dans une BD
         include_once('./db.php');
         $query = $pdo->query("SELECT * FROM `referentiel` WHERE login='$login' and motpasse='$password'");
         //d) Recuperer resultat
         $resultat = $query->fetch();
         if(isset($resultat['nom referentiel'])){
            header("Location: ../views/listref.php");  
         }else{
            header("Location: ../views/form.php?erreur=Donner un nom de référentiel valide"); 
         }

}else{
    header("Location: ../views/formref.php?erreur=Donner un nom de Référentiel valide");  
}

?>