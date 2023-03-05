<?php include("views/layout/header_admin.php"); ?>
    <main class="container admin d-flex justify-content-center" id="content" style="min-height: 50vh; margin-top: 200px">
        <form action="?controller=article&action=delete&id=<?= $id; ?>" method="POST" class="narrow">
            <h1 class="m-3">Xóa bài viết</h1>
            <p>Bạn có chắc chắn muốn xóa bài viết: <em><?= $article->getTieude() ?></em>?</p>
            <div class="row">
                <div class="col-6">
                    <input type="submit" name="delete" value="Xóa" class="btn btn-danger">
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="?controller=article" class="btn btn-warning">Quay lại</a>
                </div>
            </div>
        </form>
    </main>
<?php include("views/layout/footer.php"); ?>