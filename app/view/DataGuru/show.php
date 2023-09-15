<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['guru']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Jenis Kelamin :
                <?= $data['guru']['jenis_kelamin']; ?>
            </h6>
            <p class="card-text">Alamat : <?= $data['guru']['alamat']; ?></p>
            <a href="<?= BASE_URL; ?>/dataguru" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</div>