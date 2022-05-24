<?php
class HomeController {
    public function __construct() {

    }

    public function invoke() {
        if(isset($_GET['page'])){
            switch($_GET['page']){
                case 'home':
                    $this->homePage();
                    break;
                case 'single':
                    $this->singlePage();
                    break;
            }
        }
    }

    private function homePage() {
        require_once './Model/ProductModel.php';
        $productModel = new ProductModel();
        $productList = $productModel->all();

        require_once './View/home.php';
    }

    private function singlePage() {
        require_once './View/single.php';
    }
}