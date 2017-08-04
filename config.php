<?php

/*
DATENBANK ANBINDUNG
*/
function OpenDB(){ //öffne datenbank verbindung
	$link = "";
	 try {
	   $link = new PDO('mysql:host=localhost;dbname=golfbahnen;charset=UTF8', 'root', 'passwort');
       $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
       $link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	 }
	catch (PDOException $e) {
        p($e);
    }
	catch (Exception $e){
		p($e);
	}
    
    return $link;
}
function p($val) { // fehlerausgabe
        echo '<pre>' . print_r($val, true) . '</pre>';
    }
function CloseDB(&$link){ //datenbank verbindung schliessen
    $link = null;
}
/*
Kontakt
*/
$Pflichtfelder = array('Name', 'Email', 'Betreff', 'Nachricht');
$fehler = array();
$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= 'From: Kontaktformular at meineWebseite <meinEmail@ab>' . "\r\n";
$header .= 'Reply-To: meinName <meineEmail@ab>' . "\r\n";
$header .= ' X-Mailer: PHP/' . phpversion();
function EmailBody($message){ //formatierte Email
	$htmlEmailbody = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Kontaktformular</title><style type="text/css">body{background-color:rgba(0,255,182,0.1);margin:0;padding:0;min-width:100%!important}.content{width:100%;max-width:600px}#message{line-height:90%;font-weight:bold;font-size:100%;border:5px solid black;border-radius:2px;border-width:20px 20x 20px 20px;margin:100px;padding:50px;background-color:rgba(71,97,119,0.2)}</style></head>
	<body bgcolor="#f6f8f1"><table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0"><tr><td>
	<table class="content" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td>
	<div id="message"><h1>Nachricht:</h1><br><p> '.$message.' </p></div>
	</td></tr></table></td></tr></table>
	</body></html>';
	
	return $htmlEmailbody;
}
function SpammerCheck(){ // prüfe ob der spammer im spamhaus registriert ist
	global $fehler;
	$ip = $_SERVER['REMOTE_ADDR'];
    $blacklist = "zen.spamhaus.org";
    $url = implode(".", array_reverse(explode(".", $ip))) . ".". $blacklist;
    $record = dns_get_record($url);
	if(strpos($record[0]['ip'], '127.0.0') !== false){
		$fehler[] = "ihre IP ist geblacklistet bei zen.spamhaus.org, bitte lassen Sie ihre IP aus dem Register entfernen unter dem folgenden Link https://www.spamhaus.org/lookup/";
	}
}

function Eingabe($feld, $empt = ''){ // wenn die seite neulädt bleibt der eingegebene Inhalt bestehen
	if(isset($_POST[$feld]) && $_POST[$feld] != ''){
		echo htmlspecialchars($_POST[$feld], ENT_COMPAT, 'utf-8');
	}
	else{
		echo $empt;
	}
}
 function validateData(){ // validierung der felder
      global $fehler;
	  global $Pflichtfelder;
	  foreach($Pflichtfelder as $key){
		$val = $_POST[$key];
		switch($key){
			case 'Betreff':
				$val = filter_var($val, FILTER_SANITIZE_STRING);
				if(!filter_var($val, FILTER_VALIDATE_REGEXP, array("options" => array("regexp"=>"/[A-Za-z0-9]/")))){
					$fehler[] = "ungültige Zeichen im Betreff Bereich (beachten Sie dass nur Buchstaben und Zahlen erlaubt sind)<br>";
				}
				if(strlen($val) >= 100 || strlen($val) <= 2) $fehler[] = "zu viele oder zu wenige Zeichen im Betreff Bereich<br>";
				$Pflichtfelder[$key] = $val;
			break;
			case 'Name':
				$val = filter_var($val, FILTER_SANITIZE_STRING);
				if(!filter_var($val, FILTER_VALIDATE_REGEXP, array("options" => array("regexp"=>"/[A-Za-z]/")))){
					$fehler[] = "ungьltige Zeichen im Name Bereich (beachten Sie dass nur GroЯ- und Kleinbuchstaben erlaubt sind)<br>";
				}
				if(strlen($val) >= 50 || strlen($val) <= 2) $fehler[] = "zu viele oder zu wenige Zeichen im Name Bereich<br>";
				$Pflichtfelder[$key] = $val;
			break;

			case 'Email':
				$val = filter_var($val, FILTER_SANITIZE_STRING);
				if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
					$fehler[] ="E-Mail ungültig<br>";
				}
				$Pflichtfelder[$key] = $val;
			break;
			case 'Nachricht':
				$val = strip_tags(wordwrap($val), 80);
				if(filter_var($val, FILTER_VALIDATE_REGEXP, array("options" => array("regexp"=>"/[\/{}]/")))){
					$fehler[] = "unerlaubte Zeichen im Nachricht Bereich<br>";
				}
				if(strlen($val) >= 5000 || strlen($val) <= 2) $fehler[] = "zu viele oder zu wenige Zeichen im Nachricht Bereich<br>";
				$Pflichtfelder[$key] = $val;
			break;
			}
	    }  
	}
 function Pflichtfelder(){
      global $Pflichtfelder;
      global $fehler;
	  $i=0;
      foreach($Pflichtfelder as $fields){  // prüfe ob alle Pflichtfelder gesetzt sind
          if(empty($_POST[$fields])){
              $fehler[] = 'Pflichtfeld <i>'.$fields.'</i> nicht ausgefüllt<br>';
			  $i++;
			}
		}
		if($i == 0) return TRUE;
	}


	if(isset($_POST['finish'])){ // wenn finish gesetzt bei dem form submit gesetzt ist, alle funktionen nacheinander ausführen
	if(Pflichtfelder() == TRUE){
		validateData();
		SpammerCheck();
		if(!count($fehler)){	 // wenn keine fehler
			mail('meineEmail@ab', $Pflichtfelder['Betreff'], EmailBody($Pflichtfelder['Nachricht']), $header);  
			if(isset($_POST['copy'])) mail($Pflichtfelder['Email'],'Kopie der Nachricht', EmailBody($Pflichtfelder['Nachricht']), $header);
		}	
	}
}	