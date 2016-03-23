<?php 
	include "phpqrcode/qrlib.php";
	$bgcolor = 0x33CCCC;
	$fgcolor = 0x3333CC;
	// Qrcode::png("http://www.crazyws.fr/"); // QrCode affiché à l'écran
	// Qrcode::png("http://www.crazyws.fr/", "crazyws.png", "L", 4, 4); // QrCode enregistrer sous le nom de crazyws.png à la racine
	Qrcode::svg("http://www.crazyws.fr/", "crazyws.svg", "L", 4, 4, false, $bgcolor, $fgcolor); // QrCode enregistrer sous le nom de crazyws.svg à la racine
?>