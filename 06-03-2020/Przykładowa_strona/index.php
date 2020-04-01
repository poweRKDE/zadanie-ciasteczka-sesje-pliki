<?php
    $folder = 'foto';
    $lista_foto = scandir($folder);
    foreach($lista_foto as $lista)
    {
        echo('<h4>' . $lista . '</h4>');
    }
    echo('<hr><a href="losowe.php">Losowe</a><hr>');
    echo('<a href="index.php">Dodaj</a>');
?>