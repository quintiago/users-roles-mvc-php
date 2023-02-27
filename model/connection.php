<?php

class Connection{
    static public function connect(){
        $link = new PDO("mysql:host=localhost;dbname=users_roles_mvc","root","");
        $link -> exec("set name utf8mb4");
    }
}