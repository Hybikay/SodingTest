<table border="1" border="1" align="center">
	<tr>
		<th>
			Username
		</th>
		<th>
			Age
		</th>
		<th>
			Occupation
		</th>
	</tr>
	<?php
// connect to database
	$database = new SQLite3('sode.db');
// call all data from database
	$database->exec('CREATE TABLE IF NOT EXISTS companyx (User_name varchar(15), Age int(2), Occupation varchar(25))');
// Get result from database
	$results = $database->query('SELECT * FROM companyx');
	while ($row = $results->fetcharray()) {
	?>		
		<tr>
			<?php
			// display data in table

			$row = (object) $row;
			?>
			<td>
			<?php
			echo $row->User_name;
			?>
			</td>
			<td>
			<?php
			echo $row->Age;
			?>
			</td>
			<td>
			<?php
			echo $row->Occupation;
			?>
			</td>
			<td>			
				<?php
					echo "<a href='edit.php?id=" . $row->ID . "'> Edit </a>";
					echo "<a href='delete.php?id=" . $row->ID . "'> Delete </a>";
				?>
			</td>
		</tr>
	<?php
	}

	?>
</table>