<?php
namespace console\controllers;

use yii\console\Controller;
use common\models\Parser;
use common\models\Log;

class ParserController extends Controller{

    public function actionGetParsers()
    {
        $p = new Parser();

        Log::log("testing ParserController", "ParserController/actionGetParsers", 2);
    }
}
