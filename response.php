<?php
include "config.php";
/*
Ausgabe von beliebigen Inhalt mit echo
 */
 header('Content-Type: html/text; charset=UTF-8');
	switch($_GET['seite']){
		case "home":
			echo "<p>Hallo und Herzlich Willkommen auf der Startseite</p>";  
		break;
		case "tutorials":
			echo "<h1>Tutorial</h1>";
			echo "<p>1.Wählen Sie eine Karte aus</p>";
			echo "<p><img src='bild1.jpg' /></p>";
			echo "<p>Jetzt haben Sie die Möglichkeit auf der von Ihnen ausgewählten Map
			       die Animation zu betrachten bzw. die Karte zu bearbeiten</p>";
		break;
		case "maps";
		echo "<h1> Minigolfkarten</h1>";
		
			switch($_GET['maps']){
		case 1:
			echo "<h1> Karte 1</h1><br><button id='edit'>Bearbeiten</button><button id='draw'>Linie ziehen</button>";
			
			echo "<canvas id='mycanvas' width='1000' height='500' style='z-index:1;border:1px solid black;'></canvas>";
			echo "<button id = 'blue'>Blau</button>";
			echo "<button id = 'red'>Rot</button>";
			echo "<button id = 'reset'>Zurücksetzen</button>";
			echo '<script>
			var vW = $(document).width();
			var vH = $(document).height();
			console.log(vW);
			console.log(vH);
			</script>';
			echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."
				</script>";
			echo $editor;
			echo "<br>";
			echo "<form>";
			echo "<textarea rows='5' cols='100%' id='textarea'></textarea>";
			echo "<button id='save' onclick='editText(1,lol)'>Speichern</button>";
			echo "<button id='show' onclick='getGolfText()'>Tipp</button>";
			echo "</form>";
			
		break;
		case 2:
			echo "<h1>Karte 2</h1>";
			echo "<canvas id='mycanvas2' width='1000' height='500' style='border:1px solid black;';></canvas>";
			echo "<button id = 'red'>Rot</button>";
			echo "<button id = 'reset'>Zurücksetzen</button>";
			echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		case 3:
		echo "<h1>Karte Nr 3</h1>";
		echo "<canvas id='mycanvas3' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red'>Rot</button>";
		echo "<button id = 'blue'>Blau</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		case 4:
		echo "<h1>Karte Nr 4 (Stäbe)</h1>";
		echo "<canvas id='mycanvas4' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red'>Rot</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		case 5:
		echo "<h1>Karte Nr5 (Stumpfe Kegel)</h1>";
		echo "<canvas id='mycanvas5' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red'>Rot</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		case 6:
		echo "<h1>Karte Nr6 (Bahnwinkel)</h1>";
		echo "<canvas id='mycanvas6' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red'>Rot</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		case 7:
		echo "<h1>Karte Nr7 (Mittelhügel)</h1>";
		echo "<canvas id='mycanvas7' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'blue'>Blau</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		case 8:
		echo "<h1>Karte Nr8 (V-Hindernis)</h1>";
		echo "<canvas id='mycanvas8' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red'>Rot</button>";
		echo "<button id = 'blue'>Blau</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		
		case 9:
		echo "<h1>Karte Nr9 (Schräger Kreis ohne Hindernisse)</h1>";
		
		echo "<canvas id='mycanvas9' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red'>Rot</button>";
		echo "<button id = 'blue'>Blau</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		case 10:
		echo "<h1>Karte Nr10 (Steilschräge ohne Hindernisse)</h1>";
		echo "<canvas id='mycanvas10' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red'>Rot</button>";
		echo "<button id = 'blue'>Blau</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		case 11:
		echo "<h1>Karte Nr11 (Schräger Kreis mit Niere)</h1>";
		echo "<canvas id='mycanvas11' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red'>Rot</button>";
		echo "<button id = 'blue'>Blau</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		case 12:
		echo "<h1> Karte Nr12 (Brücke)";
		echo "<canvas id='mycanvas12' width='1000' height='500' style='border:1px solid black'></canvas>";
		echo "<button id = 'blue'>Blau</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		case 13:
		echo "<h1> Karte Nr13 (Rohr)";
		echo "<canvas id='mycanvas13' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red'>Rot</button>";
		echo "<button id = 'blue'>Blau</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		case 14:
		echo "<h1> Karte Nr14 (Blitz)";
		echo "<canvas id='mycanvas14' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'blue'>Blau</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		case 15:
		echo "<h1> Karte Nr15(Zielhügel)";
		echo "<canvas id='mycanvas15' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'blue'>Blau</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		
		case 16:
		echo "<h1> Karte Nr16 (Vulkan)";
		echo "<canvas id='mycanvas16' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'blue'>Blau</button>";
		echo "<button id = 'reset'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		break;
		}
  break;
		
		
		default:
			echo "seite nicht gefunden";
		
	}
	if(isset($_GET['deleter'])){
		removeLine($_GET['deleter']);
	}
