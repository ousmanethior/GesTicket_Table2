<?php 	
    include_once('./db.php');
    if (isset($_POST['nom']) and isset($_POST['prenom'])
    and isset($_POST['cin']) and isset($_POST['email'])
    and isset($_POST['daten']) and isset($_POST['lieu'])
    and isset($_POST['ref']) and isset($_POST['session'])
    and isset($_POST['tel']) and isset($_POST['adresse'])
    and isset($_POST['statut']) and isset($_POST['pwd'])) {
        $prenom= $_POST['prenom'];
        $nom= $_POST['nom'];
        $email= $_POST['email'];
        $daten= $_POST['daten'];
        $lieu= $_POST['lieu'];
        $adr= $_POST['adresse'];
        $ref= $_POST['ref'];
        $cin=$_POST['cin'];
        $tel=$_POST['tel'];
        $statut=$_POST['statut'];
        $session=$_POST['session'];
        $pwd=$_POST['pwd'];
        $idp= $_POST['id'];
		$req=$pdo->exec("UPDATE `apprenant` SET 
        `nom` = '$nom', `prenom` = '$prenom', 
        `cin` = '$cin', `email` = '$email', 
        `datenaiss` = '$daten', `lieu` = '$lieu', `ref` = '$ref', 
        `ses` = '$session',`tel` = '$tel', `statut` = '$statut', `adresse` = '$adr', `pwd` = '$pwd' WHERE `apprenant`.`id_app` = $idp;");
         var_dump($req); die();
         $_SESSION['message'] = "Address deleted!"; 
         header("Location: ../views/listapp.php");
    }
    

?>