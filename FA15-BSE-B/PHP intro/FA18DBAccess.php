<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 10/11/2018
 * Time: 9:29 AM
 */

class FA18DBAccess
{
    /**
     * Will connect and execute query and then will close the connection
     * @param $query
     */
    public function query($query)
    {
        $db = new mysqli('localhost','root','','crashcourse');
        if($db->connect_errno)
            die($db->connect_error);
        if(!$result = $db->query($query))
            die("Some Error Occured while: $query");

        $db->close();
        return $result;



    }
}