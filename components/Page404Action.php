<?php

namespace app\components;

use yii\web\ErrorAction;

class Page404Action extends ErrorAction {

    public function run() {
        return '404page';
    }

}
