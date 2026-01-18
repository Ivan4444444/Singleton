<?php

namespace Ivan4444444\Singleton;

use Ramsey\Uuid\Uuid;

class DBConnection
{
 private static DBConnection|null $instance = null;

 private string $con;


 public function getConnection(): string {
     return $this->con;
 }


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