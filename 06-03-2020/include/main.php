<?php
    echo('<nav id="panel_glowny">');
    echo('</nav>');
    echo('<nav id="panel_glowny_tresc">');
    echo('<nav class="panel_glowny_tresc">');

    switch(isset($_GET['id']) ? $_GET['id'] : '')
            {
                case '':
                    
                    include('section_main/main.php');
                    break;

                case 'upload':
                    
                    include('section_main/upload.php');
                    break;
                    
                case 'gallery':
                    
                    include('section_main/gallery.php');
                    break;
       }             
    
    echo('</nav></nav>');
    
?>