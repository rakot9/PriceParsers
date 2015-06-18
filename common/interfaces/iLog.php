<?php

namespace common\interfaces;

interface iLog {
    /**
     * @param $message
     * @param $call_method
     * @param $stream_type
     * @return mixed
     */
    static public function log($message, $call_method , $stream_type);
}