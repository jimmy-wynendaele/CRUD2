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
	
	
	header("location:index.php");

	//EXERCICE 1

	function card($cardPost){
		if($cardPost== 'yes' || $cardPost =='Yes' || $cardPost =='YES'){
			return 1;
		}else{
			return 0;
		}
	}

	function cardNumber($cardPost,$number){
		if($cardPost == 'yes' || $cardPost =='Yes' || $cardPost =='YES'){
			return $number;
		}else{
			return NULL;
		}
	}

	$name = $_POST['name'];
	$firstname = $_POST['firstname'];
	$birthdate = $_POST['birthdate'];
	$card = card($_POST['card']);
	$cardnumber = cardNumber($_POST['card'],$_POST['cardnumber']);

	$req = $bdd->prepare('INSERT INTO clients(lastName,firstName,birthDate,card,cardNumber) VALUES (:name,:firstname,:birthdate,:card,:cardnumber)');

	$req->execute(array(

		'name' => $name,
		'firstname' => $firstname,
		'birthdate' => $birthdate,
		'card' => $card,
		'cardnumber' => $cardnumber

	));

	//EXERCICE2

	function cardtype($type){
		if($type == 'Fidélité'){
			return 1;
		}else if($type == 'Famille Nombreuse'){
			return 2;
		}else if($type == 'Etudiant'){
			return 3;
		}else if($type == 'Employé'){
			return 4;
		}
	}

	$name2 = $_POST['name2'];
	$firstname2 = $_POST['firstname2'];
	$birthdate2 = $_POST['birthdate2'];
	$card2 = card($_POST['card2']);
	$cardnumber2 = cardNumber($_POST['card2'],$_POST['cardnumber2']);
	$cardType = cardtype($_POST['cardtype2']);

	$req2 = $bdd->prepare('INSERT INTO clients(lastName,firstName,birthDate,card,cardNumber) VALUES (:name,:firstname,:birthdate,:card,:cardnumber)');

	$req2->execute(array(

		'name' => $name2,
		'firstname' => $firstname2,
		'birthdate' => $birthdate2,
		'card' => $card2,
		'cardnumber' => $cardnumber2

	));
	
	$req20 = $bdd->prepare('INSERT INTO cards(cardNumber,cardTypesId) VALUES (:cardnumber,:cardtype)');

	$req20->execute(array(

		'cardnumber' => $cardnumber2,
		'cardtype' => $cardType
	));

	echo cardtype($_POST['cardtype2']);


	//EXERCICE3

	$title = $_POST['title'];
	$artist = $_POST['artist'];
	$date = $_POST['date'];
	$duration = $_POST['duration'];
	$startingTime = $_POST['startingTime'];
	$type = $_POST['type'];
	$genre1 = $_POST['genre1'];
	$genre2 = $_POST['genre2'];

	$req3 = $bdd->prepare('INSERT INTO shows(title, performer, date,showTypesId, firstGenresId,secondGenreId,duration,startTime) VALUES (:title,:artist,:date,:type,:firstGenre,:secondGenre,:duration,:startingTime)');

	$req3->execute(array(
		'title' => $title,
		'artist'=>$artist,
		'date' => $date,
		'duration' => $duration,
		'firstGenre' => $genre1,
		'secondGenre' => $genre2,
		'startingTime' => $startingTime,
		'type' => $type
	));

	//EXERCICE4

	$nameInput = $_POST['nameInput'];
	$firstNameInput = $_POST['firstNameInput'];
	$birthdate4 = $_POST['birthdate'];
	$card4 = $_POST['card4'];
	$cardnumber4 = $_POST['cardNumber4'];

	//function fidelCard($fidelityCard){
	//	if(isset($fidelityCard)){
	//		return 1;
	//	}else{
	//		return 0;
	//	}
	//}

	$req4 = $bdd->prepare('UPDATE clients SET birthDate = :birthdate,cardNumber= :cardnumber, card= :card WHERE lastName = :nameInput AND firstName = :firstNameInput');
	 
	 $req4->execute(array(

	 	'birthdate' => $birthdate4,
	 	'card' => $card4,
	 	'cardnumber' => $cardnumber4,
	 	'nameInput' => $nameInput,
	 	'firstNameInput'=>$firstNameInput
	 	

	 ));

	 // EXERCICE 5

	 $name5 = $_POST['title'];
	 $firstname5 = $_POST['firstname5'];
	 $date5 = $_POST['date5'];


	 $req5 = $bdd->prepare('UPDATE shows SET date= :showDate WHERE title= :title');
	 $req5 -> execute(array(

	 	'title' => $name5,
	 	'showDate' => $date5

	 ));

	 // EXERCICE 6

	 $id6 = $_POST['id6'];
	 $name6 = $_POST['name6'];
	 $firstname6 = $_POST['firstname6'];

	 $req6 = $bdd->prepare('UPDATE clients SET lastName = :lastname6, firstName= :firstname6 WHERE id= :id6');
	 $req6 -> execute(array(

	 	'lastname6'=>$name6,
	 	'firstname6'=>$firstname6,
	 	'id6'=>$id6

	 ));

	 // EXERCICE 7

	 $name70=$_POST['name70'];
	 $name71=$_POST['name71'];
	 $firstname70=$_POST['firstname70'];
	 $firstname71=$_POST['firstname71'];

	 $req7 = $bdd->prepare('DELETE FROM clients WHERE lastName= :lastname7');

	 $req7->execute(array(

	 	'lastname7'=>$name70
	 ));

	 $req71 = $bdd->prepare('DELETE FROM clients WHERE lastName= :lastname71');
	 $req71->execute(array(
	 	'lastname71'=>$name71
	 ));


 ?>



