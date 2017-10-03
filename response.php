<?php
include "config.php";
/*
Ausgabe von beliebigen Inhalt mit echo
 */
 
 header('Content-Type: html/text; charset=UTF-8');
 if(isset($_GET['seite'])){
	switch($_GET['seite']){
		case "home":
			echo "<p>Hallo und Herzlich Willkommen auf der Startseite</p>";  
		break;
		case "impressum":
			echo "<h1>Impressum</h1>";
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
			echo "<button id = 'blue' style='font-size:20px'>Blau</button>";
			echo "<button id = 'red' style='font-size:20px'>Rot</button>";
			echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
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
			
			echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\' >Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 1;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 1;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		case 2:
			echo "<h1>Karte 2</h1>";
			echo "<canvas id='mycanvas2' width='1000' height='500' style='border:1px solid black;';></canvas>";
			echo "<button id = 'red' style='font-size:20px'>Rot</button>";
			echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
			echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
			
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size: 20px' >Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit"  id=\'show\' style="font-size:20px">Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 2;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 2;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		case 3:
		echo "<h1>Karte Nr 3</h1>";
		echo "<canvas id='mycanvas3' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red' style='font-size:20px'>Rot</button>";
		echo "<button id = 'blue' style='font-size:20px'>Blau</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
		$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 3;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 3;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		case 4:
		echo "<h1>Karte Nr 4 (Stäbe)</h1>";
		echo "<canvas id='mycanvas4' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red' style='font-size:20px'>Rot</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 4;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 4;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		case 5:
		echo "<h1>Karte Nr5 (Stumpfe Kegel)</h1>";
		echo "<canvas id='mycanvas5' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red' style='font-size:20px'>Rot</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 5;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 5;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		case 6:
		echo "<h1>Karte Nr6 (Bahnwinkel)</h1>";
		echo "<canvas id='mycanvas6' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red' style='font-size:20px'>Rot</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 6;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 6;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		case 7:
		echo "<h1>Karte Nr7 (Mittelhügel)</h1>";
		echo "<canvas id='mycanvas7' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'blue' style='font-size:20px'>Blau</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 7;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 7;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		case 8:
		echo "<h1>Karte Nr8 (V-Hindernis)</h1>";
		echo "<canvas id='mycanvas8' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red' style='font-size:20px'>Rot</button>";
		echo "<button id = 'blue' style='font-size:20px'>Blau</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 8;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 8;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		
		case 9:
		echo "<h1>Karte Nr9 (Schräger Kreis ohne Hindernisse)</h1>";
		
		echo "<canvas id='mycanvas9' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red' style='font-size:20px'>Rot</button>";
		echo "<button id = 'blue' style='font-size:20px'>Blau</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 9;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 9;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		case 10:
		echo "<h1>Karte Nr10 (Steilschräge ohne Hindernisse)</h1>";
		echo "<canvas id='mycanvas10' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red' style='font-size:20px'>Rot</button>";
		echo "<button id = 'blue' style='font-size:20px'>Blau</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 10;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 10;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		case 11:
		echo "<h1>Karte Nr11 (Schräger Kreis mit Niere)</h1>";
		echo "<canvas id='mycanvas11' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red' style='font-size:20px'>Rot</button>";
		echo "<button id = 'blue' style='font-size:20px'>Blau</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 11;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 11;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		case 12:
		echo "<h1> Karte Nr12 (Brücke)";
		echo "<canvas id='mycanvas12' width='1000' height='500' style='border:1px solid black'></canvas>";
		echo "<button id = 'blue' style='font-size:20px'>Blau</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px"id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 12;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 12;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		case 13:
		echo "<h1> Karte Nr13 (Rohr)";
		echo "<canvas id='mycanvas13' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'red' style='font-size:20px'>Rot</button>";
		echo "<button id = 'blue' style='font-size:20px'>Blau</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 13;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 13;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		case 14:
		echo "<h1> Karte Nr14 (Blitz)";
		echo "<canvas id='mycanvas14' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'blue' style='font-size:20px'>Blau</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 14;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 14;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		case 15:
		echo "<h1> Karte Nr15(Zielhügel)";
		echo "<canvas id='mycanvas15' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'blue' style='font-size:20px'>Blau</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 15;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 15;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		
		case 16:
		echo "<h1> Karte Nr16 (Vulkan)";
		echo "<canvas id='mycanvas16' width='1000' height='500' style='border:1px solid black;'></canvas>";
		echo "<button id = 'blue' style='font-size:20px'>Blau</button>";
		echo "<button id = 'reset' style='font-size:20px'>Zurücksetzen</button>";
		echo "<script>".javaContent(createPos($_GET['maps']), $_GET['maps'])."</script>";
		
		
				echo "<form id='beschreibung'>";
			echo "<textarea rows='20' cols='100%' name='textarea' id='textarea'></textarea>";
			echo "<button id='save' style='font-size:20px'>Speichern</button>";
			echo "</form>";
			echo "<form id='tipp'>";
			echo '<button type="submit" style="font-size:20px" id=\'show\'>Tipp</button>';
			echo "<div id='result'></div>";
			echo '<script>
			$( "form[id=\'beschreibung\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 16;
	var textarea = $(this).find("textarea[name=\'textarea\']").val();
var posting = $.post( "response.php", { golfid: golfid, textarea: textarea } );
  posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			$( "form[id=\'tipp\']" ).submit(function( e) {
	e.preventDefault();
	var golfid = 16;
	var posting = $.post( "response.php", { golfid: golfid, tipp: "tipp" } );
    posting.done(function( data ) {
	 $( "#result" ).empty().append( data );
  });
			});
			</script>';
		break;
		}
  break;
		
		
		default:
			echo "seite nicht gefunden";
		
	}
 }
	if(isset($_GET['deleter'])){
		removeLine($_GET['deleter']);
	}
	if(isset($_POST['textarea'])){
		editText($_POST['golfid'] , $_POST['textarea']);
		echo "<span style='color:green'>Erfolg!</span>";
	}
	if(isset($_POST['tipp'])){
		$text = getGolfText($_POST['golfid']);
		echo '<script>alert("'.$text.'");</script>';
	}
