 <?php
 	if(isset($_POST['import'])&&(!empty($_POST['file']))) {
 		// On vérifie si le fichier est bien excel
 		$pos = strpos($_POST['file'], '.');
 		$extension = substr($_POST['file'], $pos);
 		if ($extension==".xlsx" || $extension==".xls") {
 			// chemin du fichier à partir de l'index
	 		$path = "feuilles/".$_POST['file'];
	 		// On charge le fichier
	 		$objPHPExcel = PHPExcel_IOFactory::load($path);
	 		// On récupère le nombre de feuille
	 		$nbreFeuille = $objPHPExcel->getSheetCount();

	 		for ($i=0; $i < $nbreFeuille; $i++) { 
	 			// Récupération de la première feuille du fichier excel
		 		$sheet = $objPHPExcel->getSheet($i);
				echo "<table border='1'>";
		 		// On boucle sur les lignes
		 		foreach ($sheet->getRowIterator() as $row) {
		 			echo "<tr>";
					// On boucle sur les cellules de la ligne
		 			foreach ($row->getCellIterator() as $cell) {
		 				echo "<td>";
		 				print_r($cell->getValue());
		 				echo "</td>";
		 			}
					echo "</tr>";	
		 		}
				echo "</table><br>";
			}
 		}else{
 			?>
 			<script>
 				document.getElementsByName('file').reset();
 			</script>	
 			<?php
 		}
		echo "<a href='index.php'>Retour</a>";
	}else{
 		// Si le choix de l'export a été validé
	 	if(isset($_POST['choix2'])&&$_POST['choix2']="Exporter") {
		 	if(isset($_POST['valider'])) {

		 		if($_POST['nbrLangue'] <= 5 && $_POST['nbrLangue'] > 0) {

		 			echo '<form method="post" action="' . $_SERVER['SCRIPT_NAME'] . '">';

		 				$nbrLangue=$_POST['nbrLangue'];

		 				for ($i=1; $i <= $nbrLangue; $i++) { 

		 					echo '<h2>Traduction '.$i.'</h2>';
		 					echo '<input type="hidden" name="nbrL" value="'.$nbrLangue.'" />';
						  	echo 'Langue: <select name="langue'.$i.'">
											<option value="Français">Français</option>
											<option value="Anglais">Anglais</option>
											<option value="Allemand">Allemand</option>
											<option value="Russe">Russe</option>
											<option value="Chinois">Chinois</option>
										</select><br>';
							echo 'Nom de l\'oeuvre: <input type="text" value="" name="name'.$i.'" /><br>';
							echo 'Type d\'oeuvre: <input type="text" value="" name="type'.$i.'" /><br>';
							echo 'Description de l\'oeuvre: <br><textarea name="description'.$i.'" id="" cols="30" rows="10"></textarea><br><br>';
		 				}

						echo '<input type="submit" value="Exporter vers Excel" name="excel" />';
					echo '</form>';
					echo "<a href='index.php'>Retour</a>";
		 		}else{
		 			?>
		 			<script>
		 				alert("Vous devez entrer un nombre valide ! L'application est une version d'évaluation et elle ne permet de générer que 5 traductions. Pour augmenter le nombre de traductions possibles, veuillez contacter le développeur pour connaitre les tarifs en vigueur");
		 				window.history.back();
		 			</script>
		 			<?php
		 		}
			}else{
				// Choix du nombre de traduction afin de générer le nombre de formulaire
			 	echo '<form method="post" action="' . $_SERVER['SCRIPT_NAME'] . '">';
			 	echo 'Combien de traduction voulez-vous exporter ?&nbsp;&nbsp;&nbsp;';
			 	echo '<input type="text" name="nbrLangue" value="" />';
			 	echo '<input type="hidden" name="choix2" value="Exporter" />';
			 	echo '<input type="submit" value="Valider" name="valider" />';
				echo '</form>';
				echo "<a href='index.php'>Retour</a>";
			}
		// Si le choix de l'importation a été validé
		}elseif(isset($_POST['choix1'])&&$_POST['choix1']="Importer") {
				// Choix de l'importation et redirection sur le formulaire
				echo '<h2>Choisissez le fichier à importer: </h2><br><span class="alert">Fichier excel uniquement</span><br>';
				echo '<form id="formFile" method="post" action="' . $_SERVER['SCRIPT_NAME'] . '">';
				echo '<input type="file" name="file" accept="file_extension, .xlsx" /><br><br>';
				echo '<input type="submit" name="import" value="Envoyer l\'importation" />';
				echo '</form>';

		}else{
			// Choix de l'import ou de l'export excel
		 	echo '<form method="post" action="' . $_SERVER['SCRIPT_NAME'] . '">';
		 	echo 'Que voulez vous faire ?&nbsp;&nbsp;&nbsp;<br>';
		 	echo '<input type="submit" name="choix1" value="Importer" />';
		 	echo '<input type="submit" name="choix2" value="Exporter" />';
			echo '</form>';
		}	
 	}
?>