<?php
include("configs/DBConnection.php");
include("models/Article.php");
class ArticleService{
    public function getAllArticles(){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, bv.hinhanh, bv.tomtat, bv.noidung, bv.ngayviet,
                        tg.ten_tgia     AS tacgia,
                        tl.ten_tloai    AS theloai
                    FROM baiviet        AS bv
                    INNER JOIN tacgia   AS tg ON bv.ma_tgia = tg.ma_tgia
                    INNER JOIN theloai  AS tl ON bv.ma_tloai = tl.ma_tloai
                    ORDER BY bv.ma_bviet
                    LIMIT 8;";
        $stmt = $conn->query($sql);

        $articles = [];
        while($row = $stmt->fetch()){
            $article = new Article($row['ma_bviet'], $row['tieude'], $row['ten_bhat'], $row['tomtat'], $row['noidung'], $row['ngayviet'], $row['theloai'], $row['tacgia'], $row['hinhanh']);
            array_push($articles, $article);
        }
        return $articles;
    }

    public function getArticleDetail($id){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, bv.tomtat, bv.noidung, bv.hinhanh, bv.ngayviet,
                        tg.ten_tgia     AS tacgia,
                        tl.ten_tloai    AS theloai
                    FROM baiviet        AS bv
                    INNER JOIN tacgia   AS tg ON bv.ma_tgia = tg.ma_tgia
                    INNER JOIN theloai  AS tl ON bv.ma_tloai = tl.ma_tloai
                    WHERE bv.ma_bviet = :id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $article = $stmt->fetch();
        
        $articleDetail = new Article($article['ma_bviet'], $article['tieude'], $article['ten_bhat'], $article['tomtat'], $article['noidung'], $article['ngayviet'], $article['theloai'], $article['tacgia'], $article['hinhanh']);
        return $articleDetail;
    }

    public function getNumberOfArticles(){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT COUNT(*) AS so_luong FROM baiviet";
        $stmt = $conn->query($sql);
        $num_of_articles = $stmt->fetch();
        return $num_of_articles;
    }
}