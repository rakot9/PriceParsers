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

    /**
     * @param $message
     * @param $call_method
     * @param int $storage
     */
    public function save( $message, $call_method, $storage = self::DB)
    {
        switch($storage)
        {
            case self::DB: {
                $log = new frLog();
                $log->saveLog($message, $call_method);
                break;
            }

            case self::LogFile: {

                $log_file_name = "common.log";

                $callerClass = explode("/", $call_method);

                if(is_array($callerClass) && count($callerClass) >= 2)
                {
                    $log_file_name = $callerClass[0] . '_' . $callerClass[1] . '.log';
                }

                $fLog = fopen(\Yii::$app->params['Log']['save_path'] . '/' . $log_file_name , 'a');

                fwrite($fLog, "[".date('Y-m-d h:i:s')."] " . $message . "\r\n");

                fclose($fLog);

                break;
            }

            default: {
                break;
            }
        }
    }
}