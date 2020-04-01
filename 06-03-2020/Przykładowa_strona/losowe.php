<link rel='StyleSheet' href='style.css'>
<?php
    $folder = 'foto';
    $lista_foto = scandir($folder);
    $obraz = $lista_foto[rand(2,count($lista_foto))];
    $obrazek = $folder.'/'.$obraz;
    echo('<img src="'.$obrazek.'" alt="losowy plik"></img>');
    echo('<a href="index.php">Wyświetl</a><hr>');
?>