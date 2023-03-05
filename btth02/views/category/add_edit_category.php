<?php
    include('views/layout/header_admin.php');  
?>
    <form action="?controller=category&action=add_edit&id=<?= $id ?>" method="POST" enctype="multipart/form-data">
        <main class="container" id="content" style="min-height: 70vh;">
        <h3 class="text-center text-uppercase fw-bold mt-4">Sửa thông tin thể loại</h3>
            <?php if ($errors['warning']) { ?>
                <div class="alert alert-danger"><?= $errors['warning'] ?></div>
            <?php } ?>
            <div class="row">
                <section class="text col-sm">
                    <div class="form-group">
                        <label for="ten_tloai" class="fw-bold">Tên thể loại: </label>
                        <input type="text" name="ten_tloai" id="ten_tloai" value="<?= $category->getTen_tloai(); ?>"
                            class="form-control">
                        <span class="errors"><?= $errors['ten_tloai'] ?></span>
                    </div>
                    <div class="mt-2 mb-2 d-flex justify-content-end">
                        <input type="submit" name="update" value="Lưu lại" class="btn btn-success m-1">
                        <a href="?controller=category" class="btn btn-warning m-1">Quay lại</a>
                    </div>
                </section>
            </div>
        </main>
    </form>
<?php
    include('views/layout/footer.php');  
?>
<!-- <script>
        const form = document.querySelector('form');
        form.addEventListener('submit',(event)=>{
            event.preventDefault();
            var tenTheLoai = document.querySelector('input[name="txtCatName"]');
            if (tenTheLoai.value.trim() === '') {
                    alert('Bạn chưa nhập Tên thể loại');
                    tenTheLoai.style.border = '1px solid red';
                }
                else{
                    form.submit();
                }
        });
</script> -->