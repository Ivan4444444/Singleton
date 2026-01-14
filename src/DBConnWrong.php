<?php

namespace ivan4444444\Singleton;

use Ramsey\uuid\Uuid;
class DBConnWrong
{

    public function __construct(){
        $uuid = Uuid::uuid4();

        echo $uuid->toString();
    }
}