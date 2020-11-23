<html>
<head>
	<title>Initialisation de la base de données</title>
	<meta charset="utf-8" />
  	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="templatemo_header">
		<div id="templatemo_site_title">I Love <span>Cocktail</span></div>
		<div id="templatemo_site_slogan">Your site for the best Cocktail recipes in the world</div>
</div>

<div class="templatemo_menu">
    <ul>
		<li><a href="index.php">Home</a></li>
        <li><a href="#"class="current">Cocktail</a></li>
    </ul>    	
</div>

<div id="templatemo_container">
<?php
	include("Parametres.php");
	include("Fonctions.inc.php");
    // Connexion au serveur MySQL
	$mysqli=mysqli_connect($host,$user,$pass) or die("Problème de création de la base :".mysqli_error());
mysqli_select_db($mysqli,$base) or die("Impossible de sélectionner la base : ".$base);
	//recuperation du Cocktail selectionné passé par l'URL
	if(isset($_GET["Cocktail"])){
		$Cocktail = mysqli_real_escape_string($mysqli, $_GET["Cocktail"]); 	
		$Cocktail = str_replace("_", " ", $Cocktail);
		$Cocktail = str_to_noaccent($Cocktail);
	}
	//recuperation du cocktail avec le titre correspondant dans la base de données
	$result = query($mysqli, "SELECT `titre`, `index`, `ingredients`, `preparation` 
		FROM Recette 
		WHERE (`titre` = '$Cocktail')
		;");
	//affichage du cocktail avec toutes ses caracteristiques
	foreach ($result as $Cocktail){
		echo "<h3><u>".$Cocktail["titre"].":</u></h3>";
		rechercheImage($Cocktail);//si il y a une image, l'afficher
		affichageCaracteristiques($Cocktail);//afficher les autres caractéristiques		
	}
	
	//Cette fonction enlève les accents et les caractères spéciaux d'un string donné
	function str_to_noaccent($str)
	{
	    $url = $str;
	    $url = preg_replace('#Ç#', 'C', $url);
	    $url = preg_replace('#ç#', 'c', $url);
	    $url = preg_replace('#è|é|ê|ë#', 'e', $url);
	    $url = preg_replace('#È|É|Ê|Ë#', 'E', $url);
	    $url = preg_replace('#à|á|â|ã|ä|å#', 'a', $url);
	    $url = preg_replace('#@|À|Á|Â|Ã|Ä|Å#', 'A', $url);
	    $url = preg_replace('#ì|í|î|ï#', 'i', $url);
	    $url = preg_replace('#Ì|Í|Î|Ï#', 'I', $url);
	    $url = preg_replace('#ð|ò|ó|ô|õ|ö#', 'o', $url);
	    $url = preg_replace('#Ò|Ó|Ô|Õ|Ö#', 'O', $url);
	    $url = preg_replace('#ù|ú|û|ü#', 'u', $url);
	    $url = preg_replace('#Ù|Ú|Û|Ü#', 'U', $url);
	    $url = preg_replace('#ý|ÿ#', 'y', $url);
	    $url = preg_replace('#Ý#', 'Y', $url);
	    $url = preg_replace('#ñ#', 'n', $url);
	    $url = preg_replace('/[^a-z(:).\d ]/i', '', $url);
	    return ($url);//le string donné en parametre est retourné sans accents ni caractères spéciaux
	}
	
	//Cette fonction sert à trouver l' image d' un cocktail donné et l' affiche si elle existe
	function rechercheImage($Cocktail)
	{
		$name = $Cocktail["titre"];
		$name = preg_replace('/[^a-z\d ]/i', '', $name);//enlever les caracteres speciaux comme ' dans les noms
		$name = explode(" ", $name);
		$name = implode("_", $name);//mettre le nom du cokctail au format dans lequel les images sont nommés
		if(file_exists("Photos/".$name.".jpg"))
		{
			//si une image existe, l'afficher
			echo "<img src='Photos/".$name.".jpg' alt='$name' height=300 width=300>";
		}
		else
		{
			//sinon afficher l'image de backup indiquant l' absence d'images
			echo "<img src='Photos/No_image_available.jpg' alt='no image' height=300 width=300>";
		}
	}

	//Affichage de toutes les caracteristiques du Cocktail
	function affichageCaracteristiques($Cocktail)
	{
		echo "<ul>";
		//Parcours du Cocktail par caracteristiques
		foreach ($Cocktail as $key => $Caracteristique)
		{
			if ($key == "index"){
				//si on est dans l'index, un array
				$Caracteristique = explode(",", $Caracteristique);
				array_pop($Caracteristique);//isoler chaque element de l'index
				echo "Index: </br>";
				foreach ($Caracteristique as $element) {
					//parcourir ces elements et les afficher un par un dans une liste
					echo $element."</br>";
				}
				echo "</br>";
			}
			else if($key != "titre")
			{
				//si on est pas dans l'index ni le titre(qui est déjà affiché), afficher la caracteristique où on se situe
				echo $key." : ".$Caracteristique."</br></br>";
			}
		}
		echo "</ul>";
	}
?>

</div>
</body>
</html>