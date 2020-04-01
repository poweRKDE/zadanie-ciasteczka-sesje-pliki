<html lang='pl'>
    <!--
        ____      
       |  _ \ _____      _ ___  ____
       | |_) / _ \ \ /\ / / _ \|  __|
       |  __/ (_) \ V  V /  __/| |
       |_|   \___/ \_/\_/ \___|| |
    Wszelkie prawa zastrzeżone. Kopiowanie i rozpowszechnianie treści strony zabronione.
    Kontakt: power.wojciech[et]gmail.com 
    -->
    <head>
        
        <meta charset="UTF-8" />
        <title>Zadanie z dnia 06-03-2020 roku.</title>
        <link rel='StyleSheet' href='../../style/style.css' />
        
        
    </head>
    
    
    <body>
        <?php
        
            echo('<header>');
            echo("<nav id='header'>");
            echo('<nav class="header_logo"><img src="../../image/logo/logo1.png" id="logo" alt="losowy plik"></img></nav>');
            echo('<nav class="header_menu"><a href="../../index.php">Powrót do Strony Głównej</a>');
            echo("</nav></nav>");

            echo('</header>');
        
            echo('<aside>');
            include('../aside.php');
            echo('</aside>');
        
            echo('<main>');
            echo('<nav id="panel_glowny">');
            echo('</nav>');
            echo('<nav id="panel_glowny_tresc">');
            echo('<nav class="panel_glowny_tresc">');
            echo('<nav id="complete_upload">');

            $max_rozmiar = 10240*1024;
            if (is_uploaded_file($_FILES['plik']['tmp_name'])) 
            {
                if ($_FILES['plik']['size'] > $max_rozmiar) 
                {
                    echo ('Błąd! <br/>Plik jest za duży!');
                } 
                else 
                {
                    echo ('Plik został prawidłowo przesłany. <br/>Nazwa pliku: '.$_FILES['plik']['name']);
                    echo ('<br/>');
                    if (isset($_FILES['plik']['type'])) 
                    {
                        echo ('Typ: '.$_FILES['plik']['type'].'<br/>');
                    }
                    move_uploaded_file($_FILES['plik']['tmp_name'],
                                       $_SERVER['DOCUMENT_ROOT'].'/06-03-2020/image/gallery/'.$_FILES['plik']['name']);
                }
            } 
            else
            {
                echo ('Błąd przy przesyłaniu danych!<br/>Spróbuj ponownie przesłać plik bądź skontaktuj się z administratorem strony');
            }
        
            echo('</nav></nav></nav>');
            echo('</main>');
            
            echo('<dside>');
            echo('<nav id="advert">');    
            echo ('<img src="../../image/baner/baner.png" alt="Baner reklamowy poweR - Programowanie to nasza pasja"/>');
            echo('</nav>');
            echo('</dside>');
                
            echo('<footer>');
            include('../footer.php');
            echo('</footer>');
        ?>
    </body>
    
</html>