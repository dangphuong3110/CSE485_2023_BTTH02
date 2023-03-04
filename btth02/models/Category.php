<?php
class CategoryServices{
    //Thuộc tính 

    private $ma_tloai;
    private $ten_tloai;
    private $so_luong;

    public function __construct($ma_tloai, $ten_tloai, $so_luong)
    {
        $this->ma_tloai = $ma_tloai;
        $this->ten_loai = $ten_tloai;
        $this->so_luong = $so_luong;
    }

    /**
     * Get the value of ma_tloai
     */ 
    public function getMa_tloai()
    {
        return $this->ma_tloai;
    }

    /**
     * Set the value of ma_tloai
     *
     * @return  self
     */ 
    public function setMa_tloai($ma_tloai)
    {
        $this->ma_tloai = $ma_tloai;

        return $this;
    }

    /**
     * Get the value of ten_tloai
     */ 
    public function getTen_tloai()
    {
        return $this->ten_tloai;
    }

    /**
     * Set the value of ten_tloai
     *
     * @return  self
     */ 
    public function setTen_tloai($ten_tloai)
    {
        $this->ten_tloai = $ten_tloai;

        return $this;
    }

    /**
     * Get the value of so_luong
     */ 
    public function getSo_luong()
    {
        return $this->so_luong;
    }

    /**
     * Set the value of so_luong
     *
     * @return  self
     */ 
    public function setSo_luong($so_luong)
    {
        $this->so_luong = $so_luong;

        return $this;
    }

    // public function getCategories() {
    //     // trả về danh sách danh mục sản phẩm
    //   }
    
    //   public function addCategory($categoryName) {
    //     // thêm một danh mục sản phẩm mới
    //   }
    
    //   public function updateCategory($categoryId, $newCategoryName) {
    //     // sửa đổi tên của một danh mục sản phẩm
    //   }
    
    //   public function deleteCategory($categoryId) {
    //     // xoá một danh mục sản phẩm
    //   }
}
