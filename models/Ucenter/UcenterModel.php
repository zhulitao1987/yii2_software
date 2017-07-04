<?php

namespace app\models\Ucenter;

/**
 * Description of UcenterModel
 *
 * @author yhx
 */
class UcenterModel {

    private static $model = '';

    public static function model() {
        if (!empty(self::$model)) {
            return self::$model;
        }
        self::$model = new self;
        return self::$model;
    }

}
