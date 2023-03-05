<?php
    include('services/CategoryServices.php');
    class CategoryController {
        public function index()
        {
            //Lấy dữ liệu
            $categoryService = new categoryServices();
            $category = $categoryService->getAllCategory();
            //Truyền tới view
            include('views/category/category.php');
        }

        public function edit($id)
        {
            $categoryService = new CategoryService();
            $category = $categoryService->editCategory($id);
            include("view/category/edit_category.php");
        }

        public function update()
        {
            $categoryService = new CategoryService();
            $categories = $categoryService->updateCategory($_POST['txtCatId'],$POST['txtCatName']);
            include("view/category/category.php");
        }

        public function create()
        {
            include("view/category/add_category.php");
        }

        public function store()
        {
            $categoryService = new CategoryService();
            $categories = $categoryService->storeCategory($_POST['txtCatName']);
            include("view/category/category.php");
        }

        public function delete()
        {
            $categoryService = new CategoryService();
            $categories = $categoryService->deleteCategory($_GET['id']);
            include("view/category/categpry.php");
        }
    }
?>