<?php 
include("services/ArticleService.php");
class AdminController{
    public function index(){
        $articleService = new ArticleService();
        $articles = $articleService->getAllArticles();
        $num_of_articles = $articleService->getNumberOfArticles();

        $title = 'Admin';
        include("views/admin/index.php");
    }
    
}