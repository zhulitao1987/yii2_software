<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\components\testHelper;
use app\models\Borrow\BorrowModel;

/**
 * Description of IndexController
 *
 * @author zlt
 */
class IndexController extends Controller {
    

    public function actionIndex() {
        $version = Yii::getVersion();
        $test = testHelper::test();
        $render_data = [
            'version' => $version,
            'test' => $test
        ];
        return $this->render('index', $render_data);
    }

    public function actionTest() {
        $borrow_info        = BorrowModel::model()->getBorrowInfo();
        $selectBorrowList   = BorrowModel::model()->selectBorrowList();
        $deleteBorrow       = BorrowModel::model()->deleteBorrow();
        $hostUrl            = Yii::$app->params['hostUrl'];
        $render_data        = [
            'borrow_info'      => $borrow_info,
            'selectBorrowList' => $selectBorrowList,
            'deleteBorrow'     => $deleteBorrow,
            'hostUrl'          => $hostUrl
        ];
        return $this->render("test", $render_data);
    }

}
