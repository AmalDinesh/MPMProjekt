<?php
/*
Ausgabe von beliebigen Inhalt mit echo
 */
 header('Content-Type: html/text; charset=UTF-8');
	switch($_GET['seite']){
		case "home":
			echo "<p>Hallo und Herzlich Willkommen auf der Startseite</p>";  
		break;
		case "tutorials":
			echo "hier erklären wir euch wie das alles funktioniert";
		break;
		case "maps";
		echo "<h1> Minigolfkarten</h1>";
		
			switch($_GET['maps']){
		case 1:
			echo "<h1> Karte 1</h1>";
			echo "<canvas id='mycanvas' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
			echo "<button id = 'blue'>Blau</button>";
			echo "<button id = 'red'>Rot</button>";
			echo "<button id = 'reset'>Reset</button>";
			echo "<script>canvas1();</script>";
		break;
		case 2:
			echo "<h1>Karte 2</h1>";
			echo "<canvas id='canvas2' width='1000' height='500' style='border:1px solid black'style='background:#15F00A';></canvas>";
			echo "<script>canvas2();</script>";
		break;
		case 3:
		echo "<h1>Karte Nr 3</h1>";
		echo "<canvas id='mycanvas3' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
			echo "<button id = 'blue3'>Blau</button>";
			echo "<button id = 'red3'>Rot</button>";
			echo "<button id = 'reset3'>Reset</button>";
		echo "<script>canvas3();</script>";
		break;
		
		case 4:
		echo "<h1>Karte Nr 4 (Liegende Schleife)</h1>";
		echo "<canvas id='mycanvas4' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas4();</script>";
		break;
		
		case 5:
		echo "<h1>Karte Nr5 (Stumpfe Kegel)</h1>";
		echo "<canvas id='mycanvas5' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas5();</script>";
		break;
		
		case 6:
		echo "<h1>Karte Nr6 (Bahnwinkel)</h1>";
		echo "<canvas id='mycanvas6' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas6();</script>";
		break;
		
		case 7:
		echo "<h1>Karte Nr7 (Mittelhügel)</h1>";
		echo "<canvas id='mycanvas7' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas7();</script>";
		break;
		
		case 8:
		echo "<h1>Karte Nr8 (V-Hinderniss)</h1>";
		echo "<canvas id='mycanvas8' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas8();</script>";
		break;
		case 9:
		echo "<h1>Karte Nr9 (Schräger Kreis ohne Hindernisse)</h1>";
		echo "<canvas id='mycanvas9' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas9();</script>";
		break;
		
		case 10:
		echo "<h1>Karte Nr10 (Steilschräge ohne Hindernisse)</h1>";
		echo "<canvas id='mycanvas10' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas10();</script>";
		break;
		
		case 11:
		echo "<h1>Karte Nr11 (Schräger Kreis mit Niere)</h1>";
		echo "<canvas id='mycanvas11' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas11();</script>";
		break;
		
		case 12:
		echo "<h1> Karte Nr12 (Brücke)";
		echo "<canvas id='mycanvas12' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas12();</script>";
		break;
		
		case 13:
		echo "<h1> Karte Nr13 (Rohr)";
		echo "<canvas id='mycanvas13' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas13();</script>";
		break;
		
		case 14:
		echo "<h1> Karte Nr14 (Blitz)";
		echo "<canvas id='mycanvas14' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas14();</script>";
		break;
		
		case 15:
		echo "<h1> Karte Nr15 (Zielhügel)";
		echo "<canvas id='mycanvas15' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas15();</script>";
		break;
		
		case 16:
		echo "<h1> Karte Nr16 (Vulkan)";
		echo "<canvas id='mycanvas16' width='1000' height='500' style='border:1px solid black' style='background:#15F00A';></canvas>";
		echo "<script>canvas16();</script>";
		break;
		
		
		}
 
  break;
		
		
		default:
			echo "seite nicht gefunden";
		
	}
