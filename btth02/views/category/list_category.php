<?php
    require 'views/layout/header_admin.php';
?>

<main class="container mt-4 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm table-responsive-sm">
                <?php if ($success) { ?><div class="alert alert-success text-center"><?= $success ?></div><?php } ?>
                <?php if ($failure) { ?><div class="alert alert-danger text-center"><?= $failure ?></div><?php } ?>
                <a href="?controller=category&action=add_edit" class="btn btn-success mb-2">Thêm mới</a>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Mã thể loại</th>
                            <th>Tên thể loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            foreach($categories as $category){
                        ?> 
                            <tr>
                                <th scope="row"><?= $category->getMa_tloai(); ?></th>
                                <td><?= $category->getTen_tloai(); ?></td>
                                <td>
                                    <a href="?controller=category&action=add_edit&id=<?= $category->getMa_tloai(); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a href="?controller=category&action=delete&id=<?= $category->getMa_tloai(); ?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php        
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script>
        function showConfirmationDialog(id){
            if(confirm("Các bài viết thuộc thể loại sẽ bị xóa. Bạn có muốn xóa không?")){
                window.location.href = "index.php?controller=category&action=delete&id=" + id;
            }
        }
    </script>
    <?php
        require 'views/layout/footer.php';  
    ?>

