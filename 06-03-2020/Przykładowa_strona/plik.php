<?php
    $max_rozmiar = 1024 * 1024 * 8;
    if(is_uploaded_file($_FILES['plik']['tmp_name']))
    {
        if($_FILES['plik']['size'] > $max_rozmiar)
        {
            echo('Błąd! Plik jest za duży!');
        }
        else
        {
            echo('Odebrano plik. Początkowa nazwa: ' . $_FILES['plik']['name']);
            echo('<br/>');
            if(isset($_FILES['plik']['type']))
            {
                echo('Typ: ' . $_FILES['plik']['type'] . '<br/>');
            }
            movie_uploaded_file($_FILES['plik']['tmp_name'],. '/foto/' . $_FILES['plik']['name']);
        }
        else
        {
            echo('Błąd przy przesyłaniu danych!');
        }
    }