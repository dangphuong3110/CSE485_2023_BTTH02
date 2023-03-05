<?php include('views/layout/header_home_page.php');  ?>
    <main class="container article mt-5" id="content">
       <div class="row mb-5">
            <section class="image col-sm-4">
                <img src="assets/images/songs/<?= $articleDetail->getHinhanh(); ?>" 
                     alt="<?= $articleDetail->getTieude(); ?>">
            </section>
            <section class="text col-sm-8">
                <h5 class="card-title mb-2">
                    <a href="#" class="text-decoration-none fw-bold text-black"><?= $articleDetail->getTieude() ?></a>
                </h5>
                <p class="card-text"><span class="fw-bold">Bài hát: </span> <?= $articleDetail->getTen_bhat() ?></p>
                <p class="card-text"><span class="fw-bold">Thể loại: </span> <?= $articleDetail->getTen_tloai() ?></p>
                <p class="card-text"><span class="fw-bold">Tóm tắt: </span> <?= $articleDetail->getTomtat() ?></p>
                <p class="card-text"><span class="fw-bold">Nội dung: </span> <?= $articleDetail->getNoidung() ?></p>
                <p class="card-text"><span class="fw-bold">Tác giả: </span> <?= $articleDetail->getTen_tgia() ?></p>
            </section>
       </div>
    </main>
<?php include('views/layout/footer.php');  ?>