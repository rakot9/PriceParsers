<?php
namespace console\controllers;

use yii\console\Controller;
use common\models\Log;
use frontend\models\Proxies;

class ProxyController extends Controller{

    public function actionGetProxies()
    {
        Log::log("Start getting proxies", "ProxyController/actionGetProxies", 1);
    }

    public function actionCleanTable()
    {
        Proxies::cleanTable();
    }
}
