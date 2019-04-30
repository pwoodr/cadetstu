<?php

function connectDB()
{
    $host = 'localhost';    //
    $db = 'cadetstu';       //
    $user = 'root';         //phpParker for awardspace
    $pwd = '';              //Pwrrekrap29 for awardspace

    $connect = new mysqli($host,$user, $pwd, $db);
    if($connect -> connect_error) die("Fatal Error: Dead Now");
    else
        return $connect;
}



?>