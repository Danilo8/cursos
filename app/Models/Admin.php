<?php

namespace app\Models;

use database\DB\DB_connection;

class Admin {

    private $DB;
    
    public function __construct()
    {
        $connection = new DB_connection();
        $this->DB = $connection->getConnection();
    }

    public function Insert()
    {
        
    }

    public function Select($id)
    {
        $sql = "SELECT * FROM administrators WHERE id = '$id'";
        $result = mysqli_query($this->DB, $sql);
        return $result;  
    }

    public function Update()
    {
        
    }

    public function Delete()
    {
        
    }

    public function Auth($email, $senha)
    {
        $cipSenha = md5($senha);
        $sql = "SELECT * FROM `administrators` WHERE `email` = '$email' AND `password` = '$cipSenha'";
        $result = mysqli_query($this->DB, $sql);
        if (mysqli_num_rows($result) == 1) {
            return $result;
        } else {
            return false;
        }
    }
}