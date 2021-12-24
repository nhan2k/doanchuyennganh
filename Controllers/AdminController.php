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

    // Trang danh mục
    public function category() {

        $category = $this->adminModel->getAll("category");

        $this->view("backend.category.category", [
            "category" => $category,
            "pageName" => "Quản lý danh mục",
        ]);
    }

    // Trang thêm danh mục
    public function form() {

        $this->view("backend.category.form", [
            "pageName" => "thêm danh mục",
        ]);
    }

    // Trang thêm tin tức
    public function newsform() {

        $id = $_GET["id"] ?? null;

        $nameCategory = $this->adminModel->getCategoryId();
        $nameAuthor = $this->adminModel->getAuthorId();

        $this->view("backend.news.form", [
            "nameCategory" => $nameCategory,
            "nameAuthor" => $nameAuthor,
            "pageName" => "thêm tin tức",
        ]);
    }

    // Trang Sửa danh mục
    public function editform() {

        $id = $_GET["id"] ?? null;
        $category = $this->adminModel->findCategoryById($id);

        $this->view("backend.category.editform", [
            "pageName" => "sửa danh mục",
            "category" => $category,
        ]);

    }

    // Hàm thêm danh mục
    public function addCategory() {

            $name = $_POST["name"];
            $description = $_POST["description"];

            $this->adminModel->insert("category", ["id" => "null", "name" => $name, "description" => $description]);

            header("Location: index.php?controller=admin&action=category");
    }

    // Hàm sửa danh mục
    public function updateCategory() {

        $categoryId = $_GET['id'] ?? null;

        $name = $_POST["name"];
        $description = $_POST["description"];
        $data= ["name" => $name, "description" => $description];

        $this->adminModel->edit("category", $categoryId, $data);

        header("Location: index.php?controller=admin&action=category");
        exit();
    }

    // Hàm xóa danh mục
    public function deleteCategory() {

        $categoryId = $_GET['id'] ?? null;
        $this->adminModel->destroy("category", $categoryId);
        header("Location: index.php?controller=admin&action=category");
        exit();
    }


}
