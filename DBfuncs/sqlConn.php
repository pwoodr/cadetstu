<?php

function connectDB()
{
    $host = 'localhost';    //fdb26.awardspace.net      ||  localhost
    $db = 'cadetstu';       //2942345_pizzadb           ||  cadetstu
    $user = 'root';         //2942345_pizzadb           ||  root
    $pwd = '';              //Pwrrekrap29               ||  

    $connect = new mysqli($host,$user, $pwd, $db);
    if($connect -> connect_error) die("Fatal Error: Dead Now");
    else
        return $connect;
}



?>