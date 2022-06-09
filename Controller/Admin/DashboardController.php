<?php
require_once './Model/OrderModel.php';

class DashboardController {
    private $orderModel;

    public function __construct() {
        $this->orderModel = new OrderModel();
    }

    public function invoke() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            switch($_GET['page']){
                case 'index':
                    $this->indexPage();
                    break;
            }
        }
    }

    private function indexPage(){
        $pendingOrders = $this->orderModel->findByOrderStatus('pending');
        $finishedOrders = $this->orderModel->findByOrderStatus('finished');

        require_once './View/Admin/dashboard.php';
    }
}