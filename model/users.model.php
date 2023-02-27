<?php

require_once "connection.php";

class mdlUsers
{
    static public function mdlShowUsers($table)
    {
        $stmt = Connection::connect()->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
}
