<?php
namespace common\models;

use frontend\models\Log as frLog;

class LogStorage {

    const DB = 1;
    const LogFile = 2;

    private static $instance;

    static public function logStorage()
    {
        if(empty(self::$instance))
        {
            self::$instance = new LogStorage();
        }
        return self::$instance;
    }

    private function __construct(){}

    public function save( $message, $call_method, $storage)
    {
        switch($storage)
        {
            case self::DB: {
                $log = new frLog();
                $log->saveLog($message, $call_method);
                break;
            }
            case self::LogFile: {
                break;
            }
            default: {
            break;
            }
        }
    }
}