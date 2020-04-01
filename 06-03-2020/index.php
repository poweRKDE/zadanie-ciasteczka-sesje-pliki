<!DOCTYPE HTML>
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
        <link rel='StyleSheet' href='style/style.css' />
        
        
    </head>
    
    <body>
        <?php
            include('include/config.php');
            include('include/scripts/baner.php');
            include('include/scripts/logo.php');
        
        
        //Header loading - górny panel strony
            echo('<header>');
            include('include/header.php');
            echo('</header>');
       
        // Aside loading - panel boczny
            echo('<aside>');
            include('include/aside.php');
            echo('</aside>');
        
        // Main loading - treść główna
            echo('<main>');
            include('include/main.php');
            echo('</main>');
        
        // Dside loading - panel reklamowy
            echo('<dside>');
            include('include/dside.php');
            echo('</dside>');
        
        // Footer loading - stopka strony
            echo('<footer>');
            include('include/footer.php');
            echo('</footer>');
        
            include('include/db/db.php');
        ?>
    </body>
    
</html>