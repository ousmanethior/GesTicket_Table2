<?php 
	
	include_once('./db.php');
	if (isset($_POST['menu'])) {
        $nom = $_POST['menu'];
        $id = $_POST['id_menu'];
		$req=$pdo->exec("UPDATE `menu` SET `nom_menu` = '$nom' WHERE `menu`.`id_menu` = $id");
         $_SESSION['message'] = "Address deleted!"; 
        header('location: ../views/listmenu.php');
    }

?>