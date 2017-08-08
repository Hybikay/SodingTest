<?php
// create database 
$database = new SQLite3('sode.db');

// Create the Table 
$database->exec('CREATE TABLE IF NOT EXISTS companyx (User_name varchar(15), Age int(2), Occupation varchar(25))');

?>


<form method="POst" align="center">
<h3>fill up the form</h3>

<p><b>Name: <input type="text" name="User_name"></p>
<p><b>Age: <input type="int" name="Age"></p></b>
<p><b>Occupation: <input type="text" name="Occupation"></p>
<br>
<input type="submit" value="save" />
<button><a href="view.php">View</a></button>
</form>


<?php

if(isset($_POST['User_name']) && isset($_POST['Age']) && isset($_POST['Occupation'])){
$User_name = $_POST['User_name'];
$Age = $_POST['Age'];
$Occupation = $_POST['Occupation'];

$database->exec("INSERT INTO companyx (User_name , Age , Occupation) VALUES ('$User_name' , '$Age' , '$Occupation')");
}




?>