<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
<<<<<<< HEAD

if(!empty($_POST['nommenu'])){
    $nom= $_POST['nommenu'];
  
   //3-Traitement => Connexion dans une BD
   include_once('./db.php');
 

   $req =$pdo-> exec("INSERT INTO `menu` (nommenu)  VALUES ('$nom')");
=======
if(!empty($_POST['menu'])){
    $nom= $_POST['menu'];
   //3-Traitement => Connexion dans une BD
   include_once('./db.php');
   $query = $pdo->query("SELECT * FROM `menu` ");
   $users= $query->fetchAll();
   $req =$pdo-> exec("INSERT INTO `menu` (`id_menu`, `nom_menu`) VALUES (NULL, '$nom')");
>>>>>>> 80ef429bcc9d4a0cecc04a0d9abbc4cbf4109551
   if($req){

    header("Location: ../views/listmenu.php");
   }else{
    header("Location: ../views/creermenu.php?erreur=Ce menu existe déjà"); 
   } 

}else{
    header("Location: ../views/creermenu.php?erreur=Veuillez remplir le champs");  
}

?>