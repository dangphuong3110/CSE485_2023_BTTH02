<?php
    include('/services/CategoryServices.php');
    class CategoryServices {
        public function index()
        {
            //Lấy dữ liệu
            $categoryServices = new categoryServices();
            $category = $categoryServices->getAllCategory();
            //Truyền tới view
            include('views/category/add_category.php');
            include('views/category/delete_category.php');
            include('views/category/edit_category.php');
        }

        public function add()
        {
            
        }
    }
?>