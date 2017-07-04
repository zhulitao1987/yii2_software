<?php

namespace app\models\Borrow;

/**
 * Description of BorrowModel
 *
 * @author zlt
 */
class BorrowModel {

    private static $model = '';

    public static function model() {
        if (!empty(self::$model)) {
            return self::$model;
        }
        self::$model = new self;
        return self::$model;
    }

    public function getBorrowInfo() {
        return "BorrowInfo";
    }

    public function selectBorrowList() {
        return "BorrowList";
    }

    public function deleteBorrow() {
        return "DeleteBorrow";
    }

}
