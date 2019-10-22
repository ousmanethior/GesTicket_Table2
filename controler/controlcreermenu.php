<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['nommenu'])){
    $nom= $_POST['nommenu'];
    var_dump( $nom);
   //3-Traitement => Connexion dans une BD
   include_once('./db.php');
   $query = $pdo->query("SELECT * FROM `menu` ");
   $users= $query->fetchAll();
   $req =$pdo-> exec("INSERT INTO `menu` (nommenu)  VALUES ('$nom')");
   if($req){
    header("Location: ../views/listmenu.php");
   }else{
    header("Location: ../views/creermenu.php?erreur=Ce référentiel existe déjà"); 
   } 

}else{
    header("Location: ../views/creermenu.php?erreur=Veuillez remplir le champs");  
}

?>