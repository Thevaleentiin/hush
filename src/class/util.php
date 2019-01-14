<?php

class Util
{
    public static function verifEmail($email)
    {
        //verification syntaxe email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public static function Autolib()
    {
        $data = array();
        $jsonData = file_get_contents('https://opendata.paris.fr/api/records/1.0/search/?dataset=stations_et_espaces_autolib_de_la_metropole_parisienne&facet=ville&facet=cp&facet=type&rows=10000');
        $jsonData = json_decode($jsonData);
        foreach ($jsonData->records as $record) {
            if (isset($record->geometry)) {
                $lat = $record->geometry->coordinates[0];
                $lon = $record->geometry->coordinates[1];
                $coordinates = $lat.','.$lon;
                array_push($data, $coordinates);
            }
        }

        return $data;
    }
}
