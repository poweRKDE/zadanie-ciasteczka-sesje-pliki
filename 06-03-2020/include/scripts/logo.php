<?php

    $folder = 'image/logo';
    $lista_foto = scandir($folder);
    $obraz = $lista_foto[rand(2,count($lista_foto)-1)];
    $obrazek = $folder.'/'.$obraz;
    setcookie('logo',$obrazek, time() + (86400));

?>