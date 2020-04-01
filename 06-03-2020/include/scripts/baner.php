<?php

    $folder = 'image/baner';
    $lista_baner = scandir($folder);
    $baner = $lista_baner[rand(2,count($lista_baner)-1)];
    $banerek = $folder.'/'.$baner;
    setcookie('baner',$banerek, time() + (86400));

?>