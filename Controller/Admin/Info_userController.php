<?php
require_once './Model/Info_userModel.php';

class Infor_userController {
    private $Infor_userController;

    public function __construct() {
        $this->infor_userModel = new Infor_userController();
    }

    public function invoke() {
        if(!isset($_GET['page'])) die();

        switch($_GET['page']){
            case 'index':
                $this->indexPage();
                break;
            case 'create':
                $this->createPage();
                break;
            case 'edit':
                $this->editPage();
                break;
            case 'delete':
                $this->deletePage();
                break;
            case 'info_user':
                $this->storePage();
                break;
        }

        if(!isset($_POST['page'])) die();
        
        switch($_POST['page']){
            case 'store':
                $this->storePage();
                break;
            case 'update':
                $this->updatePage();
                break;
        }
    }

    private function indexPage(){
        $info_userList = $this->infor_userModel->all();
        require_once './View/Admin/info_users/index.php';
    }

    private function createPage(){
        require_once './View/Admin/info_users/create.php';
    }

    private function storePage(){
        $this->infor_userModel->create(
            array(
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'note' => $_POST['note']
            )
        );

        redirect(admin_url_pattern('info_userController', 'index'));
    }

    private function editPage(){
        $info_user = $this->infor_userModel->find($_GET['id']);
        require_once './View/Admin/info_users/edit.php';
    }

    private function updatePage(){
        $this->infor_userModel->update(
            array(
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'note' => $_POST['note']
            )
        );

        redirect(admin_url_pattern('info_userController', 'index'));
    }

    private function deletePage(){
        if(!isset($_GET['id'])) die();
        $this->infor_userModel->delete($_GET['id']);

        redirect(admin_url_pattern('info_userController', 'index'));
    }
    
}