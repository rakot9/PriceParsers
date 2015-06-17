<?php
namespace common\models;

use common\interfaces\iParsers;

class Parser implements iParsers{

    public function test()
    {
        echo "implement interface method test";
    }
}