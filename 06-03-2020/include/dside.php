<nav id="advert">
<?php
    
    if(isset($_COOKIE['baner'])) 
    {
        echo ('<img src="' . $_COOKIE['baner'] . '" alt="Baner reklamowy z cookie poweR - Programowanie to nasza pasja"/>');
    } 
    else 
    {
        echo ('<img src="image/baner/baner.png" alt="Baner reklamowy poweR - Programowanie to nasza pasja"/>');
    }
?>
</nav>