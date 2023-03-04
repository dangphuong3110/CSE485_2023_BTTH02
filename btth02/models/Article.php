<?php
class Article{
    private $ma_bviet;
    private $tieude;
    private $ten_bhat;
    private $tomtat;
    private $noidung;
    private $ngayviet;
    private $ten_tloai;
    private $ten_tgia;
    private $hinhanh;

    public function __construct($ma_bviet, $tieude, $ten_bhat, $tomtat, $noidung, $ngayviet, $ten_tloai, $ten_tgia, $hinhanh){
        $this->ma_bviet = $ma_bviet;
        $this->tieude = $tieude;
        $this->ten_bhat = $ten_bhat;
        $this->tomtat = $tomtat;
        $this->noidung = $noidung;
        $this->ngayviet = $ngayviet;
        $this->ten_tloai = $ten_tloai;
        $this->ten_tgia = $ten_tgia;
        $this->hinhanh = $hinhanh;
    }

    public function getMa_bviet()
    {
        return $this->ma_bviet;
    }

    public function setMa_bviet($ma_bviet)
    {
        $this->ma_bviet = $ma_bviet;

        return $this;
    }

    public function getTieude()
    {
        return $this->tieude;
    }

    public function setTieude($tieude)
    {
        $this->tieude = $tieude;

        return $this;
    }

    public function getTen_bhat()
    {
        return $this->ten_bhat;
    }

    public function setTen_bhat($ten_bhat)
    {
        $this->ten_bhat = $ten_bhat;

        return $this;
    }

    public function getTomtat()
    {
        return $this->tomtat;
    }

    public function setTomtat($tomtat)
    {
        $this->tomtat = $tomtat;

        return $this;
    }

    public function getNoidung()
    {
        return $this->noidung;
    }

    public function setNoidung($noidung)
    {
        $this->noidung = $noidung;

        return $this;
    }

    public function getNgayviet()
    {
        return $this->ngayviet;
    }

    public function setNgayviet($ngayviet)
    {
        $this->ngayviet = $ngayviet;

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
 
    public function getTen_tgia()
    {
        return $this->ten_tgia;
    }
 
    public function setTen_tgia($ten_tgia)
    {
        $this->ten_tgia = $ten_tgia;

        return $this;
    }
 
    public function getHinhanh()
    {
        return $this->hinhanh;
    }

    public function setHinhanh($hinhanh)
    {
        $this->hinhanh = $hinhanh;

        return $this;
    }
}