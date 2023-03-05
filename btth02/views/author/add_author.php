<?php
declare(strict_types=1);
require("views/layout/header_home_page.php");
?>

<main class="container mt-5 mb-5">
    <?php if ($warning) { ?>
        <div class="alert alert-danger"><?= $warning ?></div>
    <?php } ?>
    <form action="?controller=member&action=add" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới tác giả</h3>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="ten_tgia">Tên tác giả</span>
                    <input type="text" class="form-control" name="ten_tgia">
                    <span class="text-danger errors"><?= $name_author_error ?></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="hinh_tgia">Hình ảnh</span>
                    <input type="file" class="form-control" name="hinh_tgia">
                    <span class="text-denger errors"><?= $image_author_error ?></span>
                </div>
                <div class="form-group float-end">
                    <input type="submit" value="Thêm" class="btn btn-success">
                    <a href="?controller=member" class="btn btn-warning ">Quay lại</a>
                </div>

            </div>
        </div>
    </form>
</main>

<?php
include("views/layout/footer.php");
?>