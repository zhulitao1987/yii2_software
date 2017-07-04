<?php

namespace app\models\Order;

/**
 * Description of OrderModel
 *
 * @author zlt
 */
class OrderModel {

    private static $model = '';

    public static function model() {
        if (!empty(self::$model)) {
            return self::$model;
        }
        self::$model = new self;
        return self::$model;
    }

}
