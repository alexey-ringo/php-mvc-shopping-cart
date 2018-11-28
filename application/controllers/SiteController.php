<?php

namespace application\controllers;

use application\core\Controller;

class SiteController extends Controller {
    public function indexAction() {
        
        $this->view->render('Каталог товаров');
    }
}