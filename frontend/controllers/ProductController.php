<?php
namespace frontend\controllers;

use common\controllers\BaseController;

/**
 * Class ProductController
 * @package frontend\controllers
 */
class ProductController extends BaseController
{

    public function actionIndex()
    {
        return $this->redirect(['/']);
    }

    public function actionView(int $id)
    {
        return $this->render('view');
    }
}
