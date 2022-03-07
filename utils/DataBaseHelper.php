<?php
class DataBaseHelper
{
    const host = "localhost";
    const dbname = "POO_MVC_PHP";
    const username = "root";
    const password = "Fooly@1251";
    public static function getConnexion()
    {
        try {
            $dbc = new PDO("mysql:host=" . self::host . "; dbname=" . self::dbname, self::username, self::password);
            $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "connexion successfull";
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
        return $dbc;
    }
}
// DataBaseHelper::getConnexion();
