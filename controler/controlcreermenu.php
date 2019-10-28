<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['menu'])){
    $nom= $_POST['menu'];
   //3-Traitement => Connexion dans une BD
   include_once('./db.php');
   $query = $pdo->query("SELECT * FROM `menu` ");
   $users= $query->fetchAll();
   $req =$pdo-> exec("INSERT INTO `menu` (`id_menu`, `nom_menu`) VALUES (NULL, '$nom')");
   if($req){
    header("Location: ../views/listmenu.php");
   }else{
    header("Location: ../views/creermenu.php?erreur=Ce menu existe déjà"); 
   } 

}else{
    header("Location: ../views/creermenu.php?erreur=Veuillez remplir le champs");  
}

?>