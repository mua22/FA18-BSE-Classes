<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 10/30/2018
 * Time: 12:22 PM
 */

class DBConnection
{
    public function query($query)
    {
        $db = new mysqli('localhost:3306','root','','crashcourse');
        if($db->connect_errno)
            die($db->connect_error);

        $result = $db->query($query);
        if(!$result){
            die($db->error);
        }

        $db->close();

        return $result;
    }
}