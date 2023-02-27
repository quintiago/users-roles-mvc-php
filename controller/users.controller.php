<?php

class ctrUsers
{
    static public function ctrShowUsers()
    {
        $table = "users";
        $response = mdlUsers::mdlShowUsers($table);
        return $response;
    }
}
