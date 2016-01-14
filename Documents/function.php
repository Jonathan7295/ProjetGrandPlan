<?php
/**
* Génération de miniature 2.0v (par default en 4/3)
* (Fonctionne sur les JPG/JPEG/PNG uniquement)
*
* @param Chemin de l'image source
* @param Dossier de stockage de la miniature
* @param Type de l'image
* @param Largeur de la miniature (par default : 400)
* @param Hauteur de la miniature (par default : 300)
**/


function genereMiniature($src, $dst,$type, $w = 400, $h=300) {
    
    if ($type === 'jpg' || $type === 'jpeg') {
        //On crée une image à partir de l'orignal
        $imgsrc = imagecreatefromjpeg($src);
        //On récupère l'axe x de l'image source
        $src_w = imagesx($imgsrc);
        //On récupère l'axe y de l'image source
        $src_h = imagesy($imgsrc);
        /*On definit le zoom de la miniature par rapport au minimum 
        obtenu par la division des deux axes de l'image source par les axes demandés */
        $zoom = min($src_w/$w, $src_h/$h);
        /*On définit les variables qui serviront d'écart 
        pour faire la miniature centrée par rapport à l'image source*/
        $src_w2 = $w*$zoom;
        $src_h2 = $h*$zoom;
        //On crée un image vierge par rapport à la taille de miniature voulue
        $img = imagecreatetruecolor($w, $h);
        /*(euh...) On copie l'image source à l'intérieur de l'image vierge 
        et on effectue un décalage par rapport au zoom des deux axes divisés par deux pour la centrer.
        (pour plus d'infos se renseigner sur la fonction imagecopyresampled)*/
        imagecopyresampled($img, $imgsrc, 0, 0, ($src_w - $src_w2)/2, ($src_h - $src_h2)/2, $w, $h, $src_w2, $src_h2);
        //On définit la miniature en tant que JPG/JPEG, avec pour emplacement le dossier de stockage des miniatures
        imagejpeg($img, $dst);
    }
    elseif ($type === 'png'){
        //On crée une image à partir de l'original
        $imgsrc = imagecreatefrompng($src);
        
        //On récupère l'axe x de l'image source
        $src_w = imagesx($imgsrc);
        //On récupère l'axe y de l'image source
        $src_h = imagesy($imgsrc);
        
        /*On definit le zoom de la miniature par rapport au minimum 
        obtenu par la division des deux axes de l'image source par les axes demandés */
        $zoom = min($src_w/$w, $src_h/$h);
        /*On définit les variables qui serviront d'écart 
        pour faire la miniature centrée par rapport à l'image source*/
        $src_w2 = $w*$zoom;
        $src_h2 = $h*$zoom;
        //On crée un image vierge par rapport à la taille de miniature voulue
        $img = imagecreatetruecolor($w, $h);
        imagealphablending($img, false);
        imagesavealpha($img, true);
        /*(euh...) On copie l'image source à l'intérieur de l'image vierge 
        et on effectue un décalage par rapport au zoom des deux axes divisés par deux pour la centrer.
        (pour plus d'infos se renseigner sur la fonction imagecopyresampled)*/
        imagecopyresampled($img, $imgsrc, 0, 0, ($src_w - $src_w2)/2, ($src_h - $src_h2)/2, $w, $h, $src_w2, $src_h2);
        //On définit la miniature en tant que PNG, avec pour emplacement le dossier de stockage des miniatures

        imagepng($img, $dst);
        
    }
}

/**
* Renvoie le dossier de l'image miniature
*
* @param Chemin de l'image source
* @param Nom de l'image source
* @param Type de l'image
* @param Chemin de l'image miniature
* @param Largeur de la miniature (par default : 400)
* @param Hauteur de la miniature (par default : 300)
**/
function getMiniature($img_path, $img_name, $img_type, $mini_path, $w = 400, $h = 300){
    //Nom de l'image en miniature
    $mini_name = "mini_".$img_name;
    //Cible de l'image en miniature
    $target = $mini_path.$mini_name;
    /*Si la miniature n'existe pas on active 
    la fonction de génération de miniature*/
    if (!file_exists($target)) {
        genereMiniature($img_path, $target,$img_type, $w, $h);
    }
    //On renvoie le chemin de la miniature
    return $target;
}