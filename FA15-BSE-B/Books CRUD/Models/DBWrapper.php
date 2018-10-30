<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 10/18/2018
 * Time: 9:06 AM
 */

class DBWrapper
{
    /**
     * Executes a query and return results
     * @param $query string
     */
    public function query($query)
    {
        $db = new mysqli('localhost','root','','crashcourse');
        if($db->connect_errno > 0)
        {
            die('Unable to connect to database [' . $db->connect_error . ']');
        }

        //echo " Connection Established";

        if(!$result = $db->query($query))
        { die('Error @ MySQL [' . $db->error . ']'); }

        $db->close();
        return $result;
    }


}