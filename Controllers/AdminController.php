<?php

class AdminController extends BaseController {


    private $adminModel;

    public function __construct() {
        $this->loadModel("AdminModel");
        $this->adminModel = new AdminModel;

    }

    // Login admin
    public function login() {


        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "admin" && $password == "admin") {
            header("Location: index.php?controller=admin&action=index");
        }else{
            header("Location: index.php?controller=news&action=loginView");

        }
    }

    // Trang chủ của admin
    public function index() {

        $sumNews = $this->adminModel->count("news");
        $sumCategory = $this->adminModel->count("category");
        $sumAuthor = $this->adminModel->countAuthor();
        $sumBackup = $this->adminModel->count("backup");
        $sumComment = $this->adminModel->count("Comment");
        $sumSubscriber = $this->adminModel->count("subscriber");
        $sumUser = $this->adminModel->count("User");


        $this->view("backend.index", [
            "sumNews" => $sumNews,
            "sumCategory" => $sumCategory,
            "sumAuthor" => $sumAuthor,
            "sumBackup" => $sumBackup,
            "sumComment" => $sumComment,
            "sumSubscriber" => $sumSubscriber,
            "sumUser" => $sumUser,
            "pageName" => "chủ",
        ]);
    }


}
