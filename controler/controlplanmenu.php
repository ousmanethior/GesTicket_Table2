<?php 
	include_once('./db.php');
	if (isset($_GET['del'])) {
		$nom = $_GET['del'];
		$req=$pdo->exec("DELETE FROM `menu` WHERE `nommenu`= '$nom'");
         $_SESSION['message'] = "menu supprimé!"; 
        header('location: ../views/listmenu.php');
    }

?>