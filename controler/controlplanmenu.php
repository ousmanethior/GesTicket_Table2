<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(isset ($_POST['valider'])){
	
	$jour = $_POST['daten'];
    $menu1 = $_POST['menu1'];
    $menu2 = $_POST['menu2'];
    $menu3 = $_POST['menu3'];
    $menu4 = $_POST['menu4'];
    $menu5 = $_POST['menu5'];
	$menu6 = $_POST['menu6'];	
        //3-Traitement => Connexion dans une BD
		include_once('./db.php');
		$query = $pdo->query("SELECT * FROM `planifier` ");
        $users= $query->fetchAll();
		$req =$pdo-> exec("INSERT INTO `planifier` (`id_p`, `date`, `menu1`, `menu2`, `menu3`, `menu4`, `menu5`, `id_dess`) VALUES (NULL, '$jour', '$menu1', '$menu2', '$menu3', '$menu4', '$menu5', '$menu6');");
		if($req){
			header("Location: ../views/planmenu.php");
		   }else{
			header("Location: ../views/planifmenu.php?erreur=Ce jour a été planifié"); 
		   } 
}else{
    header("Location: ../views/planifmenu.php?erreur= Remplissez tous champs");  
}




?>