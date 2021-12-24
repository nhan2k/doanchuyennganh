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

    // Trang tin tức
    public function news() {

        $allNews = $this->adminModel->getAllNews(50);

        return $this->view("backend.news.news",[
            "allNews" => $allNews,
            "pageName" => "tin tức",
        ]);

    }

    // Hàm thêm tin tức
    public function addNews() {

        $id = null;
        $title = $_POST["title"];
        $content = $_POST["content"];
        $date_posted = $_POST["date_posted"];
        $date_updated = $_POST["date_updated"];
        $status = $_POST["status"];
        $comment_status = $_POST["comment_status"];
        $hinhanh = $_POST["hinhanh"];
        $category_id = $_POST["category"];
        $author_id = $_POST["author_id"];

        $this->adminModel->insert("news", [
            "id" => $id,
            "category_id" => $category_id,
            "date_posted" => $date_posted,
            "title" => $title,
            "content" => $content,
            "date_updated" => $date_updated,
            "status" => $status,
            "comment_status" => $comment_status,
            "hinhanh" => $hinhanh,
            "author_id" => $author_id,
        ]);
        header("Location: index.php?controller=admin&action=news");
        exit();
    }

    // Hàm xóa tin tức
    public function deleteNews() {

        $newsId = $_GET['id'] ?? null;
        $this->adminModel->destroy("news", $newsId);
        header("Location: index.php?controller=admin&action=news");
        exit();
    }

    // Trang sửa tin tức
    public function pageEditNews() {

        $newsId = $_GET['id'] ?? null;

        $news = $this->adminModel->findNews($newsId);

        $this->view("backend.news.editform", [
            "pageName" => "sửa tin tức",
            "news" => $news,
        ]);
    }

    // Hàm sủa tin tức
    public function editNews() {

        $id = $_GET['id'] ?? null;

        $title = $_POST["title"];
        $content = $_POST["content"];
         $date_posted = $_POST["date_posted"];
         $date_updated = $_POST["date_updated"];
        $status = $_POST["status"];
        $comment_status = $_POST["comment_status"];
        $hinhanh = $_POST["hinhanh"];
        $category_id = $_POST["category"];
        $author_id = $_POST["author_id"];

        $data = [
            "category_id" => $category_id,
             "date_posted" => $date_posted,
            "title" => $title,
            "content" => $content,
             "date_updated" => $date_updated,
            "status" => $status,
            "comment_status" => $comment_status,
            "hinhanh" => $hinhanh,
            "author_id" => $author_id,
        ];

        $this->adminModel->edit("news", $id, $data);
        header("Location: index.php?controller=admin&action=news");
    }

    // Quản lý tác giả
    public function pageAuthor() {

        $author = $this->adminModel->getAllAuthor(50);

        $this->view("backend.author.author", [
            "pageName" => "Quản lý tác giả",
            "author" => $author,
        ]);
    }

    // Trang thêm tác giả
    public function authorForm() {

        $this->view("backend.author.form", [
            "pageName" => "Thêm Tác giả",
        ]);
    }

    // Hàm thêm tác giả
    public function addAuthor() {

        $name = $_POST["name"];
        $display_name = $_POST["display_name"];
        $email = $_POST["email"];
        $account_status = $_POST["account_status"];
        $profile = $_POST["profile"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $this->adminModel->insert("author", [
            "name" =>$name,
            "display_name" => $display_name,
            "email" => $email,
            "account_status" => $account_status,
            "profile" => $profile,
            "username" => $username,
            "password" => password_hash($password, PASSWORD_DEFAULT),
        ]);
        header("Location: index.php?controller=admin&action=pageAuthor");
    }

    // Hàm xóa tác giả
    public function deleteAuthor() {

        $author_id = $_GET['author_id'] ?? null;
        $this->adminModel->deleteauthor($author_id);
        header("Location: index.php?controller=admin&action=pageAuthor");
        exit();
    }

    // Trang sửa tác giả
    public function authorEdit() {

        $author_id = $_GET['author_id'] ?? null;

        $author = $this->adminModel->findAuthor($author_id);

        $this->view("backend.author.editform", [
            "pageName" => "Sửa Tác giả",
            "author" => $author,
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
