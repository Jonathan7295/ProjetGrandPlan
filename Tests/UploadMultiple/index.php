<form method="post" action=""  enctype="multipart/form-data">
	Sélectionner un ou plusieurs fichiers<input type="file" name="images[]" multiple />
	<input type="submit" name="ok" value="valider" />
</form>
<!-- Pour modifier la taille autorisée de l'upload dans le php.ini il faut modifier "post_max_size" et "upload_max_filesize" -->

<?php
	$nameArray = array();
	$i = 0;
	$typeArray = array();
	$j = 0;
	$tmp_nameArray = array();
	$k = 0;

	if (isset($_POST['ok'])&&(isset($_FILES['images']))){
		foreach ($_FILES['images'] as $key => $value) {
			foreach ($value as $ke => $val) {
				if($key == "name"){
					$nameArray[$i] = $val; // Nom de l'image
					$i++;
				}
				if($key == "type"){
					$typeArray[$j] = $val; // Type de l'image
					$j++;
				}
				if($key == "tmp_name"){
					$tmp_nameArray[$k] = $val; // Chemin tmp
					$k++;
				}
			}
			
		}
		for($a = 0; $a < count($_FILES['images']['name']); $a++){
			move_uploaded_file($tmp_nameArray[$a], 'images/'.$nameArray[$a]);
		}
		
		echo "Téléchargement effectué avec succès !";
	}
?>
