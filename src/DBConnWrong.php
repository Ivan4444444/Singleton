<?php

namespace Ivan4444444\Singleton;

use Ramsey\Uuid\Uuid;

class DBConnWrong
{

    public function __construct(){
        $uuid = Uuid::uuid4();

        echo $uuid->toString();
    }
}