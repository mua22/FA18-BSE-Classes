<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 10/9/2018
 * Time: 10:43 AM
 */

class DBConnectivity
{

    private $db_name = 'crashcourse';
    private $host_name = 'localhost';
    private $user = 'root';
    private $password = '';

    /**
     * connects db and executes query
     * @param $query
     * @return bool|mysqli_result
     */
    public function query($query)
    {
        $db = new mysqli($this->host_name,$this->user,
            $this->password,$this->db_name);
        if($db->connect_errno > 0)
        {
            die('Unable to connect to database [' . $db->connect_error . ']');
        }

        if(!$result = $db->query($query))
        {
            die('There was an error running the query [' . $db->error . ']'."<hr>$query");
        }

        $db->close();

        return $result;
    }

}