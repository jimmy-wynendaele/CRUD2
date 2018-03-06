
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>crud 2</title>
</head>
<body>

	<?php 

		try {
		$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'root');
		//foreach($bdd->query('SELECT * from clients') as $row) {
		//print_r($row);
		//}

	}
	 catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br>";
		die();
	}


	$trying = $bdd->query('SELECT ')

	 ?>
	
	Exercice 1
	<form action="index_post.php" method="POST">
		<input type="text" name="name" placeholder="name">
		<input type="text" name="firstname" placeholder="firstname">
		<input type="text" name="birthdate" placeholder="birthdate(year-month-date)">
		<input type="text" name="card" placeholder="card">
		<input type="text" name="cardnumber" placeholder="cardnumber">
		<input type="submit" name="submit">
	</form>

	<br>
	<br>

	Exercice 2

	<form action="index_post.php" method="POST" >
		<input type="text" name="name2" placeholder="name">
		<input type="text" name="firstname2" placeholder="firstname">
		<input type="text" name="birthdate2" placeholder="birthdate(year-month-date)">
		<input type="text" name="card2" placeholder="card">
		<input type="text" name="cardnumber2" placeholder="cardnumber">
		<input type="text" name="cardtype2" placeholder="cardtype">
		<input type="submit" name="submit2">
	</form>
	
	<br>
	<br>

	Exercice 3

	<form action="index_post.php" method="POST" >
		<input type="text" name="title" placeholder="title">
		<input type="text" name="artist" placeholder="artist">
		<input type="text" name="date" placeholder="date">
		<input type="text" name="type" placeholder="type">
		<input type="text" name="genre1" placeholder="first genre">
		<input type="text" name="genre2" placeholder="second genre">
		<input type="time" name="duration" placeholder="duration">
		<input type="time" name="startingTime" placeholder="starting time">
		<input type="submit" name="submit3">
	</form>

	<br>
	<br>

	Exercice 4

	<form action="index_post.php" method="POST">
		<input type="text" name="nameInput" placeholder="search name">
		<input type="text" name="firstNameInput" placeholder="search by firstname">
		<input type="submit" name="submit40">
	</form>

	<?php 

		echo $birthdate4;


	?>

	<form action="index_post.php" method="POST" >
		<input type="text" name="name" placeholder="title">
		<input type="text" name="firstname" placeholder="artist">
		<input type="text" name="birthdate" placeholder="date">
		<input type="checkbox" name="fidelitycard" placeholder="fidilty card">
		<input type="text" name="fidelCardNumber" placeholder="first genre">
		<input type="submit" name="submit41">
	</form>

</body>
</html>