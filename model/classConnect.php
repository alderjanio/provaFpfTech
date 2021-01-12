<?php

abstract class ClassConnection {
    public function connectDB()
    {
        # code...
        try{
            $conn = new PDO ('mysql:host=localhost;dbname=provafpf','root','');
            return $conn;
        }catch(PDOException $err){
            return $err->getMessage();
        }


    }
}




?>