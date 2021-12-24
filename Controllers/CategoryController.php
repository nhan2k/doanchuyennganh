<?php
    class CategoryController extends BaseController{

        private $categoryModel;
        private $newsModel;

        function __construct() {
            $this->loadModel("CategoryModel");
            $this->loadModel("NewsModel");
            $this->categoryModel = new CategoryModel;
            $this->newsModel = new NewsModel;
        }

        public function index() {

            $pageTitle = "Danh sách tiêu đề bài viết";

            $column = ['id', 'name', "description"];
            $select = ['column' => 'id', 'order' => 'desc'];
            $limit = 5;

            $news = $this->categoryModel->getAll();

            return $this->view("frontend.news.index", [
                "news" => $news,
                "pageTitle" => $pageTitle,
            ]);
        }

        public function store() {

            $data = [
                    'name' => "name 1",
                    'description' => 'des 1'
            ];

            $this->categoryModel->store($data);
        }

        public function update() {

            $id = $_GET['id'];

            $data = [
                'name' => "name 2",
                'description' => 'des 2'
            ];
            $this->categoryModel->updateData($id, $data);
        }

        public function delete() {

            $id = $_GET['id'];
            $this->categoryModel->deleteData($id);
        }

        public function show() {

            $categoryId = $_GET['id'] ?? null;
            $category = $this->categoryModel->findById($categoryId);


            $this->view('frontend.categories.index', [
                "category" => $category,
            ]);
        }

        public function searchPage() {
            $category = $_POST["category"] ?? null;

            $categoryName = $this->categoryModel->getByCategoryName($category);
            $this->view("frontend.categories._detail",[
                "categoryName" => $categoryName,
            ]);
        }
    }
?>
