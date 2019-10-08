<?php 
	if (isset($_POST['del'])) {
        $nom = $_POST['del'];
        include_once('./db.php');
        $req =$pdo-> exec("DELETE FROM 'referentiel' WHERE nomreferentiel=$nom");
      
        $_SESSION['message'] = "Address deleted!"; 
        header('location: ../views/listref.php');
    }


   /* if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address']; */

?>