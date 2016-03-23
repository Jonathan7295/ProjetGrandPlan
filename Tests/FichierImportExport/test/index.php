<meta charset="utf-8" />
<?php
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

if(isset($_POST['excel'])) {

    $nbrLangue= $_POST['nbrL'];
    
    // création des objets de base et initialisation des informations d'entête
    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Franck Courtois");
    
    // Récupération des valeurs du nombre de champs voulu

    $langue = array(); // Langues traduites
    for ($a=1; $a <= $nbrLangue; $a++) { 
       $langue[$a] = $_POST['langue'.$a.''];
    }

    $name = array(); // Noms des oeuvres
    for ($b=1; $b <= $nbrLangue; $b++) { 
       $name[$b] = $_POST['name'.$b.''];
    }

    $type = array(); // Types des oeuvres
    for ($c=1; $c <= $nbrLangue; $c++) { 
       $type[$c] = $_POST['type'.$c.''];
    }

    $description = array(); // Descriptions des oeuvres
    for ($d=1; $d <= $nbrLangue; $d++) { 
       $description[$d] = $_POST['description'.$d.''];
    }
    
    // Initialisation du nombre d'onglet du fichier
    for ($e=1; $e < $nbrLangue; $e++) { 
       $classeur->createSheet();
    }
    // On sélectionne les différents onglets pour les compléter autant de fois qu'il en faut
    $g= 0; // Initialisation des onglets
    for ($f=1; $f <= $nbrLangue; $f++) { 
        // On sélectionne l'onglet à remplir
        $classeur->setActiveSheetIndex($g);
        // On définit la feuille à remplir
        $feuille=$classeur->getActiveSheet();
        $feuille->setTitle($langue[$f]);
        $feuille->SetCellValue('A1', 'Nom');
        $feuille->SetCellValue('B1', $name[$f]);
        $feuille->SetCellValue('A2', 'Type');
        $feuille->SetCellValue('B2', $type[$f]);
        $feuille->SetCellValue('A3', 'Description');
        $feuille->SetCellValue('B3', $description[$f]);
        $g++;
    }
    // On sélectionne le premier onglet par défaut
    $classeur->setActiveSheetIndex(0);

    // Nom du fichier
    $filename = ucfirst(strtolower(trim($name[1])));
    // envoi du fichier au navigateur
    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"); 
    header("Content-Disposition: attachment;filename='Langues".$filename.".xlsx'"); 
    header("Cache-Control: max-age=0"); 
    $writer = PHPExcel_IOFactory::createWriter($classeur,'Excel2007');
    $writer->save('php://output');
}
else {
    // on affiche le formulaire si rien a été créé
    require 'include/formulaire.inc.php';
}
?>