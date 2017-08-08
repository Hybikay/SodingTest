
	<?php
		$id = $_GET['id'];
		$database = new SQLite3('sode.db');

		$results = $database->query('SELECT * FROM companyx WHERE ID='. $id);

		while ($row = $results->fetcharray()) {
		$row = (object) $row;
		?>
		<form method="POST" action="edit.php?id='<?php echo $id ?>'" align="center">
			Username: <input type="text" name="Username" value="<?php echo $row->User_name; ?>"><br>
			Age: <input type="text" name="Age" value="<?php echo $row->Age; ?>"><br>
			Occupation: <input type="text" name="Occupation" value="<?php echo $row->Occupation; ?>"><br>
		<input type="submit" name="submit" value="Submit">
		</form>
		<?php
		}

		if(isset($_POST['submit']))
		{
			$username = $_POST['Username'];
			$age = $_POST['Age'];
			$occupation = $_POST['Occupation'];

			$database->exec("UPDATE companyx SET User_name = '$username', Age = '$age', Occupation = '$occupation' WHERE ID = $id");
			header ("location:view.php");
		}
	?>