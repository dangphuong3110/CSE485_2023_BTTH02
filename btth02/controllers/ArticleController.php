<?php
include('services/ArticleService.php');
class ArticleController{
    // Hàm xử lý hành động index
    public function index(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        echo "Tương tác với Services/Models from Article";
        // Nhiệm vụ 2: Tương tác với View
        echo "Tương tác với View from Article";
    }

    public function add(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        // echo "Tương tác với Services/Models from Article";
        // Nhiệm vụ 2: Tương tác với View
        include("views/article/add_article.php");
    }

    public function list(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        // echo "Tương tác với Services/Models from Article";
        // Nhiệm vụ 2: Tương tác với View
        include("views/article/list_article.php");
    }

    public function detail(){
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if(!$id){
            die('<h1>Không có bài viết này!</h1>');
        }

        $articleService = new ArticleService();
        $articleDetail = $articleService->getArticleDetail($id);
        if(!$articleDetail){
            die('<h1>Không có bài viết này!</h1>');
        }

        $title = $articleDetail->getTen_bhat(). ' - ' . $articleDetail->getTen_tgia();
        include('views/article/article_detail.php');
    }
}