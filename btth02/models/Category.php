<?php
class Category{
    //Thuộc tính 
    private $ma_tloai;
    private $ten_tloai;
    private $so_luong;

    public function __construct($ma_tloai, $ten_tloai, $so_luong){
        $this->ma_tloai = $ma_tloai;
        $this->ten_loai = $ten_tloai;
        $this->so_luong = $so_luong;
    }

    public function getMa_tloai() {
        return $this->ma_tloai;
    }
 
    public function setMa_tloai($ma_tloai) {
        $this->ma_tloai = $ma_tloai;
        return $this;
    }
 
    public function getTen_tloai() {
        return $this->ten_tloai;
    }
 
    public function setTen_tloai($ten_tloai) {
        $this->ten_tloai = $ten_tloai;
        return $this;
    }

    public function getSo_luong() {
        return $this->so_luong;
    }

    public function setSo_luong($so_luong) {
        $this->so_luong = $so_luong;
        return $this;
    }
}