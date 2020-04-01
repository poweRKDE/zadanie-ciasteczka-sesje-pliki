<?php
    
    // Adres Serwera Bazy dancyh
    $server = 'localhost';

    // Nazwa użytkownika bazy danych (np. root)
    $login = 'root';

    // Hasło użytkownika (domyślnie root nie posiada hasła)
    $password = '';

    // Nazwa bazy danych
    $db_name = 'marzec';

    // Port serwera bazy danych (domyślny: 3306)
    $port = '3306';

    $db = mysqli_connect($server, $login, $password, $db_name, $port);
    $connect = $db ? mysqli_error($db) : header("Location: include/error/404.php")
?>