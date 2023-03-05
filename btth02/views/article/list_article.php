<?php include("views/layout/header_admin.php"); ?>
    <main class="container mt-4 mb-5">
        <div class="row">
            <div class="col-sm table-responsive-sm" style="overflow: auto;">
                <?php if ($success) { ?><div class="alert alert-success text-center"><?= $success ?></div><?php } ?>
                <?php if ($failure) { ?><div class="alert alert-danger"><?= $failure ?></div><?php } ?>
                <a href="?controller=article&action=add_edit" class="btn btn-success mb-2">Thêm mới</a>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Mã bài viết</th>
                            <th>Tiêu đề</th>
                            <th>Tóm tắt</th>
                            <th>Nội dung</th>
                            <th>Ngày viết</th>
                            <th>Hình ảnh</th>
                            <th>Tác giả</th>
                            <th>Thể loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($articles as $article){ 
                                $nameAC = $articleService->getNameAuthorAndCategory($article->getMa_bviet());?>
                            <tr>
                                <th scope="row"><?= $article->getMa_bviet(); ?></th>
                                <td><?= $article->getTieude(); ?></td>
                                <td><?= $article->getTomtat(); ?></td>
                                <td><?= $article->getNoidung(); ?></td>
                                <td><?= $article->getNgayviet(); ?></td>
                                <td><img src ="assets/images/songs/<?= $article->getHinhanh(); ?>" alt="" width = 100px height = 70px></td>
                                <td><?= $nameAC['tacgia']; ?></td>
                                <td><?= $nameAC['theloai']; ?></td>
                                <td>
                                    <a href="?controller=article&action=add_edit&id=<?= $article->getMa_bviet(); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a href="?controller=article&action=delete&id=<?= $article->getMa_bviet(); ?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php include("views/layout/footer.php"); ?>