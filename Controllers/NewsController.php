<?php
    class NewsController extends BaseController{

        private $newsModel;
        private $newsCategory;
        private $commentModel;


        function __construct() {
            $this->loadModel("NewsModel");
            $this->newsModel = new NewsModel;

            $this->loadModel("CategoryModel");
            $this->newsCategory = new CategoryModel;

            $this->loadModel("CommentModel");
            $this->commentModel = new CommentModel;
        }

        public function index() {


            $youthNews = $this->newsModel->getAllByCategoryId(1,1);
            $sportNews = $this->newsModel->getAllByCategoryId(2, 8);
            $techNews = $this->newsModel->getAllByCategoryId(3, 8);
            $businessNews = $this->newsModel->getAllByCategoryId(4,8);
            $entertainNews = $this->newsModel->getAllByCategoryId(5,1);
            $adsNews = $this->newsModel->getAllByCategoryId(6,1);

            $allNews = $this->newsModel->getRandomNews();
            $allNews2 = $this->newsModel->getRandomNews();

            $lastedNews = $this->newsModel->getLastedNews(5);

            $onelastedNews = array_shift($lastedNews);

            $categoryName = $this->newsCategory->getAll();

            return $this->view("frontend.news.index", [

                "allNews" => $allNews,
                "allNews2" => $allNews2,

                "youthNews" => $youthNews,
                "sportNews" => $sportNews,
                "techNews" => $techNews,
                "businessNews" => $businessNews,
                "entertainNews" => $entertainNews,
                "adsNews" => $adsNews,

                "onelastedNews" => $onelastedNews,
                "lastedNews" => $lastedNews,

                "categoryName" => $categoryName,
            ]);
        }

        public function show() {

            $categoryId = $_GET['id'] ?? null;
            $news = $this->newsModel->findById($categoryId);

            $categoryName = $this->newsCategory->getAll();
            $allNews = $this->newsModel->getRandomNews();
            $lastedNews = $this->newsModel->getLastedNews(5);

            $comment = $this->commentModel->getCommentByNewsID($categoryId);

            $this->view('frontend.news._detail', [
                "news" => $news,
                "categoryName" => $categoryName,
                "allNews" => $allNews,
                "lastedNews" => $lastedNews,
                "comment" => $comment
            ]);
        }

        public function loginView() {

        $this->view("frontend.news.login.login");

        }

    }
