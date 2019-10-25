<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données

if(!empty($_POST['nommenu'])){
    $nom= $_POST['nommenu'];
  
   //3-Traitement => Connexion dans une BD
   include_once('./db.php');
 

   $req =$pdo-> exec("INSERT INTO `menu` (nommenu)  VALUES ('$nom')");
   if($req){

    header("Location: ../views/listmenu.php");
   }else{
    header("Location: ../views/creermenu.php?erreur=Ce menu existe déjà"); 
   } 

}else{
    header("Location: ../views/creermenu.php?erreur=Veuillez remplir le champs");  
}

?>