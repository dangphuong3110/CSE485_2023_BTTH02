<?php
class Category{
    //Thuộc tính 
    private $ma_tloai;
    private $ten_tloai;
    private $SLBaiViet;

    public function __construct($ma_tloai, $ten_tloai, $SLBaiViet){
        $this->ma_tloai = $ma_tloai;
        $this->ten_loai = $ten_tloai;
        $this->SLBaiViet= $SLBaiViet;
    }

    public function getMa_tloai() {
        return $this->ma_tloai;
    }

    public function setMa_tloai($ma_tloai)
    {
        $this->ma_tloai = $ma_tloai;
        return $this;
    }
 
    public function getTen_tloai()
    {
        return $this->ten_tloai;
    }
 
    public function setTen_tloai($ten_tloai)
    {
        $this->ten_tloai = $ten_tloai;
        return $this;
    }

    public function getSLBaiViet()
    {
        return $this->SLBaiViet;
    }

    public function setSLBaiViet($SLBaiViet)
    {
        $this->SLBaiViet = $SLBaiViet;
        return $this;
    }
}