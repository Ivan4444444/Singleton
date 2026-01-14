<?php

namespace ivan4444444\Singleton;

use Ramsey\uuid\Uuid;

class DBConnection
{
 private static DBConncection|null $instance = null;

 private string $con;



 private function __construct(){
     echo "DBConnection erstellt...";

     $uuid = Uuid::uuid4();
     $this->con = $uuid->toString() . '...';
 }

 public static function getInstance(): DBConnection
 {
     if(self::$instance == null)
     {
         self::$instance = new DBConnection();
     }
     return self::$instance;
 }

}