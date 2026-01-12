<?php

namespace ivan4444444\Singleton;
class DBConnection
{
 private static DBConncection|null $instance = null;


 private function __construct(){
     echo "DBConnection erstellt...";
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