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

    public function editAuthor() {

        $table = "author";
        $author_id = $_GET['author_id'] ?? null;

        $name = $_POST["name"];
        $display_name = $_POST["display_name"];
        $email = $_POST["email"];
        $account_status = $_POST["account_status"];
        $profile = $_POST["profile"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $data = [
            "name" => $name,
            "display_name" => $display_name,
            "email" => $email,
            "account_status" => $account_status,
            "profile" => $profile,
            "username" => $username,
            "password" => password_hash($password, PASSWORD_DEFAULT),
        ];

        $this->adminModel->authorEdit($table,$author_id ,$data);
        header("Location: index.php?controller=admin&action=pageAuthor");
    }
}
