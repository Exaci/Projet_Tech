<?php
try
{
$config = parse_ini_file("private/config.ini", TRUE);
$mysql = $config['mysql'];
$dbname = $mysql['dbname'];
$db = new PDO('mysql:host=' . $mysql['host'] . ';dbname=' . $mysql['dbname'], $mysql['user'], $mysql['passwd'], array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

