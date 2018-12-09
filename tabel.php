<?php
include 'connect2.php';
	$sql = "CREATE TABLE Rezultate 
	(
		Nume CHAR(40) NOT NULL,
		Prenume CHAR(40) NOT NULL,
		Clasa char(5),
		Punctaj INT
	);";
	if ($conn->query($sql) === FALSE) 
	{
		if ($conn->error!="Table 'rezultate' already exists")
			echo "Tabelul nu a putut fi creat " . $conn->error;
	}
	
?>