<?php
namespace common\models;

use common\interfaces\iLog;
use common\models\LogStorage;

class Log implements iLog {

    static public function log($message, $call_method , $stream_type)
    {
        LogStorage::logStorage()->save($message, $call_method, $stream_type);
    }
}