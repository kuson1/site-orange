<?php
	require_once("controleur/controleur.class.php"); 
	//instancier la classe controleur : 
	$unControleur = new Controleur();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Site Orange</title>
</head>
<body>
<center>
<h1> Site Orange pour la gestion des interventions </h1> 
<br>
<a href="index.php?page=1"> 
	<img src="images/logo.png" height="100" width="100">
</a>

<a href="index.php?page=2"> 
	<img src="images/client.jpeg" height="100" width="100">
</a>

<a href="index.php?page=3"> 
	<img src="images/technicien.jpeg" height="100" width="100">
</a>

<a href="index.php?page=4"> 
	<img src="images/telephone.jpeg" height="100" width="100">
</a>

<a href="index.php?page=5"> 
	<img src="images/intervention.png" height="100" width="100">
</a>

<?php
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else {
		$page = 1 ;
	}
	switch ($page) {
		case 1 : require_once ("controleur/home.php"); break;
		case 2 : require_once ("controleur/gestion_clients.php"); break;
		case 3 : require_once ("controleur/gestion_techniciens.php"); break;
		case 4 : require_once ("controleur/gestion_telephones.php"); break;
		case 5 : require_once ("controleur/gestion_interventions.php"); break;
	}
?>

</center>
</body>
</html>