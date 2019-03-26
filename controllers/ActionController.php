<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

/**
 * Description of ActionController
 *
 * @author yhx
 */
class ActionController extends Controller {

    public function actions() {
        return array(
            'greeting' => 'app\components\GreetingAction',
            'page404' => 'app\components\Page404Action'
        );
    }

    public function actionIndex() {
        $a = 1.00;
        $b = 1.00;
        echo $a - $b;
        echo 111111;
        echo bcdiv($a, $b, 2);
    }

    public function actionParams($first, $second) {
        return "$first & $second";
    }

}
