<?php include("views/layout/header_admin.php"); ?>
    <form action="?controller=article&action=add_edit&id=<?= $id ?>" method="POST" enctype="multipart/form-data">
        <main class="container" id="content">
        <h3 class="text-center text-uppercase fw-bold mt-4">Sửa thông tin bài viết</h3>
            <?php if ($errors['warning']) { ?>
                <div class="alert alert-danger"><?= $errors['warning'] ?></div>
            <?php } ?>
            <div class="row">
                <section class="image col-sm-6">
                <?php if (!$article->getHinhanh()) { ?>
                    <label for="image" class="fw-bold">Tải ảnh lên:</label>
                    <div class="form-group image-placeholder mb-6">
                        <input type="file" name="image" class="form-control-file" id="image"><br>
                        <img id="display-image" width = "80%" height = "60%">
                        <span class="errors"><?= $errors['hinhanh'] ?></span>
                    </div>
                <?php } else { ?>
                    <label class="fw-bold">Hình ảnh:</label>
                    <img src="assets/images/songs/<?= $article->getHinhanh() ?>"
                        alt="<?= $article->getHinhanh() ?> " width = "100%" height = "80%">
                <?php } ?>
                </section>
                <section class="text col-sm-6">
                    <div class="form-group">
                        <label for="tieude" class="fw-bold">Tiêu đề: </label>
                        <input type="text" name="tieude" id="tieude" value="<?= $article->getTieude() ?>"
                            class="form-control">
                        <span class="errors"><?= $errors['tieude'] ?></span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="ten_bhat" class="fw-bold">Tên bài hát: </label>
                        <input type="text" name="ten_bhat" id="ten_bhat" value="<?= $article->getTen_bhat() ?>"
                            class="form-control">
                        <span class="errors"><?= $errors['ten_bhat'] ?></span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="tomtat" class="fw-bold">Tóm tắt: </label>
                        <textarea name="tomtat" id="tomtat"
                                class="form-control"><?= $article->getTomtat() ?></textarea>
                        <span class="errors"><?= $errors['tomtat'] ?></span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="tomtat" class="fw-bold">Nội dung: </label>
                        <textarea name="noidung" id="noidung"
                                class="form-control"><?= $article->getNoidung() ?></textarea>
                        <span class="errors"><?= $errors['noidung'] ?></span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="ma_tgia" class="fw-bold">Tác giả: </label>
                        <select name="ma_tgia" id="ma_tgia">
                        <?php foreach ($authors as $author) { ?>
                            <option value="<?= $author['ma_tgia'] ?>"
                                <?= ($article->getMa_tgia() == $author['ma_tgia']) ? 'selected' : ''; ?>>
                                <?= html_escape($author['ten_tgia']) ?></option>
                        <?php } ?>
                        </select>
                        <span class="errors"><?= $errors['tacgia'] ?></span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="ma_tloai" class="fw-bold">Thể loại: </label>
                        <select name="ma_tloai" id="ma_tloai">
                        <?php foreach ($categories as $category) { ?>
                            <option value="<?= $category['ma_tloai'] ?>"
                                <?= ($article->getMa_tloai() == $category['ma_tloai']) ? 'selected' : ''; ?>>
                                <?= html_escape($category['ten_tloai']) ?></option>
                        <?php } ?>
                        </select>
                        <span class="errors"><?= $errors['theloai'] ?></span>
                    </div>
                    <div class="mt-2 mb-2 d-flex justify-content-end">
                        <input type="submit" name="update" value="Lưu lại" class="btn btn-success m-1">
                        <a href="?controller=article" class="btn btn-warning m-1">Quay lại</a>
                    </div>
                </section>
            </div>
        </main>
    </form>
    <script>
        const inputFile = document.getElementById('image');
        const imagePreview = document.getElementById('display-image');

        inputFile.addEventListener('change', function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.addEventListener('load', function() {
            imagePreview.src = reader.result;
            });

            reader.readAsDataURL(file);
        });
    </script>

<?php include("views/layout/footer.php"); ?>