<?php
    
    $time = date('H:i');
    $date = date('m.d.y');
    $db_time = $time . ' ' . $date;
    
    // Zczytanie ip klienta
    $ip = $_SERVER['REMOTE_ADDR'];
    
    // Zczytanie podstrony przegladanej przez uzytkownika
    $site = $_SERVER['REQUEST_URI'];
    

    $db_klient = 'INSERT INTO klient values (0,"' . $ip . '","' . $site . '","' . $db_time . '","'.$obrazek.'","'.$banerek.'")';
    $db_baner = 'INSERT INTO baner values (0,"' . $banerek . '","' . $baner . '","'.filesize($banerek).'")';
    $db_logo = 'INSERT INTO logo values (0,"' . $obrazek . '","' . $obraz . '","'.filesize($obrazek).'")';
    
    $banery = glob('image/gallery/*');
   
/*
    $i = 1;
    while($i <= banery) 
    {
        if(is_file($dir.'/'. $file)) 
        {
            $db_zdjecia = 'INSERT INTO logo values (0,"' . $zdjecia . '","' . $file . '","'.$file.'")';
            $db_gallery = $db -> query($db_zdjecia);
            $i++;
        }
    }
*/

    $db_client = $db -> query($db_klient);
    $db_baners = $db -> query($db_baner);
    $db_logos = $db -> query($db_logo);
    

    mysqli_close($db);
?>