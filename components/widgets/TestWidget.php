<?php

namespace app\components\widgets;

use yii\base\Widget;

/**
 * Description of testWidget
 *
 * @author zlt
 */
class TestWidget extends Widget {

    public function run() {
        $widget = 'widgets';
        return $this->render("test/index", ['widgets' => $widget]);
    }

}
