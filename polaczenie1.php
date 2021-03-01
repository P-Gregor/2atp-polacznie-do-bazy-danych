<?php

/**
 * Połączenie do bazy danych Mysql za pomocą klasy Mysqli
 * Tworzę nowy obiekt $polaczenie za pomoca konstruktora new Mysqli
 * 
 */
 
$host = "localhost";
$username = "root"; // nazwa uzytkownika z uprawnieniami
$password = "";
$dbname = "pawelgregor";
$port = 3306; //opcjonalny

//tworze nowe polaczenie w Mysqli, znak @ ukrywa komunikaty czyli errory 
$polaczenie = @new Mysqli($host,$username,$password,$dbname,$port);

if(mysqli_connect_errno()!=0)
{
    echo("Błąd połączenia do bazy danych".mysqli_connect_error());
}
else
{
    echo("Połączono do bazy danych");
}

?>