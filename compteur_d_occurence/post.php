<?php

    if(isset($_GET['occurence']) && isset($_GET['text'])) {
        $mot = $_GET['occurence'];
        $text = $_GET['text'];

        if($mot != "" && $text != "") {
            echo 'Le mot <strong>' . $mot . '</strong> apparaît ' . substr_count($text, $mot) . ' fois dans ce texte';
        }

        else {
            echo 'Veuillez entrer un texte et le l\'occurence à verifier';
        }
    }
    
?>