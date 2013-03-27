<?php
    // ouvre un fichier en mode binaire
    $name = './static/resume.pdf';
    $fp = fopen($name, 'rb');

    // envoie les bons en-têtes
    header("Content-Type: application/pdf");
    header("Content-Length: " . filesize($name));

    // envoie le contenu du fichier, puis stoppe le script
    fpassthru($fp);
    exit;
