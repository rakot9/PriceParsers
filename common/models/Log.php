<?php
namespace common\models;

use common\interfaces\iLog;
use common\models\LogStorage;

class Log implements iLog {

    /**
     * @param string $message
     * @param string $call_method
     * @param int $stream_type
     * @return mixed|void
     */
    static public function log($message = "Empty message", $call_method = "Unknown model/method" , $stream_type = 1)
    {
        LogStorage::logStorage()->save($message, $call_method, $stream_type);
    }
}