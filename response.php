<script type="text/javascript" src="canvas.js"></script>
<script type="text/javascript" src="canvas2.js"></script>
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
			echo "";
		break;
		case "maps";
		echo "<h1> Minigolfkarten</h1>";
		
			switch($_GET['map']){
				case "map1":
					echo "<h1> Karte 1</h1>";
					echo "<canvas id='mycanvas' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
				break;
		case "map2":
					echo "<h1>Karte 2</h1>";
					echo "<canvas id='canvas2' width='1000' height='500' style='border:1px solid black;'></canvas>";
				break;
		case "map3":
		echo "<h1>Karte Nr 3</h1>";
		echo "<canvas id='mycanvas2' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		break;
		}
 
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
