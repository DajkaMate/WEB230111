<?php
    function Connect()
    {
        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname =  '14 sz2';

        $conn = mysqli_connect($server, $user, $pass, $dbname);

        if(!$conn)
        {
            die("Nem sikerült csatlakozni");
        }
        return $conn;
    }
?>