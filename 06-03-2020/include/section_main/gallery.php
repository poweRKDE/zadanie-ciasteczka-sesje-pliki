<?php
    $dir = 'image/gallery';
    $imagesExtensions = array('jpg', 'jpeg', 'gif', 'png');
    $files = scandir($dir);
    foreach($files AS $file) 
    {
        if(is_file($dir.'/'. $file)) 
        {
            echo('<span class="gallery_photos">');
            echo('<a href="'.$dir.'/'.$file.'">');
            echo('<img width="300" height="300" src="'.$dir.'/'.$file.'" alt="" />');
            echo('</a></span>');
        }
    }

?>