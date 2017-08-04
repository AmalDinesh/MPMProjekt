<?php
/*
Ausgabe von beliebigen Inhalt bei echo
 */
 header('Content-Type: html/text; charset=UTF-8');
	switch($_GET['seite']){
		case "home":
			echo "<p>Hallo und Herzlich Willkommen auf der Startseite</p>";  
		break;
		case "tutorials":
			echo "wir erklären euch wie das geht";
		break;
		case "about":
			echo "Über uns und über die Seite";
		break;
		case "newsletter":
			echo "hier könnt ihr euch für den Newsletter anmelden";
		break;
		case "contact":
			echo "hier könnt ihr uns kontaktieren";
		break;
		
		default:
			echo "seite nicht gefunden";
		
	}
