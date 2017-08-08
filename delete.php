<?php
	$id = $_GET['id'];
		$database = new SQLite3('sode.db');

		$database->exec("DELETE FROM companyx WHERE ID = $id");

		header("location: view.php");


?>