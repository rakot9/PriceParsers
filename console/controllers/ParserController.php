<?php
namespace console\controllers;

use yii\console\Controller;
use common\models\Parser;

class ParserController extends Controller{

    public function actionGetParsers()
    {
        $p = new Parser();
        $p->test();
        echo "Ok get parsers " . date('Y-m-d h:i:s') . "\r\n";
    }
}
