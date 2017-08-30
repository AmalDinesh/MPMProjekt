<script type="text/javascript" src="canvas.js"></script>
<script type="text/javascript" src="canvas3.js"></script>
<script type="text/javascript" src="canvas2.js"></script>
<script type="text/javascript" src="canvas4.js"></script>
<script type="text/javascript" src="canvas5.js"></script>
<script type="text/javascript" src="canvas9.js"></script>
<script type="text/javascript" src="canvas10.js"></script>
<script type="text/javascript" src="canvas11.js"></script>
<script type="text/javascript" src="canvas12.js"></script>
<script type="text/javascript" src="canvas13.js"></script>
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
					echo "<button id = 'blue1' onclick ='animateBlue()'></button>";
					echo "<button id = 'red1' onclick ='animateRed()'></button>";
				break;
		case "map2":
					echo "<h1>Karte 2</h1>";
					echo "<canvas id='canvas2' width='1000' height='500' style='border:1px solid black'style='background:#15F00A';></canvas>";
				break;
		case "map3":
		echo "<h1>Karte Nr 3</h1>";
		echo "<canvas id='mycanvas3' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		break;
		
		case "map4":
		echo "<h1>Karte Nr 4 (Liegende Schleife)</h1>";
		echo "<canvas id='mycanvas4' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		break;
		
		case "map5":
		echo "<h1>Karte Nr5 (Stumpfe Kegel)</h1>";
		echo "<canvas id='mycanvas5' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		break;
		case "map9":
		echo "<h1>Karte Nr9 (Schräger Kreis ohne Hindernisse)</h1>";
		echo "<canvas id='mycanvas9' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		break;
		
		case "map10":
		echo "<h1>Karte Nr10 (Steilschräge ohne Hindernisse)</h1>";
		echo "<canvas id='mycanvas10' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		break;
		
		case "map11":
		echo "<h1>Karte Nr11 (Schräger Kreis mit Niere)</h1>";
		echo "<canvas id='mycanvas11' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		break;
		
		case "map12":
		echo "<h1> Karte Nr12 (Brücke)";
		echo "<canvas id='mycanvas12' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		break;
		
		case "map13":
		echo "<h1> Karte Nr13 (Rohr)";
		echo "<canvas id='mycanvas13' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		break;
		
		
		}
		case "Stäbe":
		echo "<h1> 14. Stäbe";
		echo "<canvas id='staebe' width='1000' height='700' style='border:1px solid black' style='background:#15F00A';></canvas>";
		break;
		
		case "Zielkreisfenster":
		echo "<h1> 15. Zielkreisfenster";
		echo "<canvas id='Zielkreisfenster' width='1000' height='700' style='border:1px solid black' style='background:#15F00A';></canvas>";
		break;
		
		case "Mittelhügel":
		echo "<h1> 16. Mittelhügel";
	    echo "<canvas id='Mittelhuegel' width='1000' height='700' style='border:1px solid black' style='background:#15F00A';></canvas>";
		break;
		
		case "Vulkan":
		echo "<h1> 17. Vulkan";
	    echo "<canvas id='Vulkan' width='1000' height='700' style='border:1px solid black' style='background:#15F00A';></canvas>";		break;
		break;
		
		case "Blitz":
		echo "<h1> 18. Blitz";
        echo "<canvas id='Blitz' width='1000' height='700' style='border:1px solid black' style='background:#15F00A';></canvas>";				break;
		break;
		
		case "Plateau":
		echo "<h1> 19. Plateau";
	    echo "<canvas id='Plateau' width='1000' height='700' style='border:1px solid black' style='background:#15F00A';></canvas>";			
		break;
		
		case "VHinderniss":
		echo "<h1> 20. VHinderniss";
	    echo "<canvas id='VHinderniss' width='1000' height='700' style='border:1px solid black' style='background:#15F00A';></canvas>";					break;
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
