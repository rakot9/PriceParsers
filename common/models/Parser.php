<?php
namespace common\models;

use common\interfaces\iParsers;

class Parser implements iParsers{

    public function parse()
    {
        echo "implement interface method test \r\n";
    }
}