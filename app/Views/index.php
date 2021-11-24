<?= $this->extend('/template-layout/template'); ?>
<?= $this->section('isi-halaman'); ?>
<!-- start of isi website -->
<div class="container">
    <div class="hero-body">
        <p class="title is-2">Daftar Menu</p>
        <a href="/warung-mabar/tambah-data" class="button is-primary">Tambah Data</a>
    </div>
    <div class="content mt-5">
        <p class="title">
            <i class="fas fa-glass-martini-alt"></i>
            Minuman
        </p>
    </div>

    <!-- bagian kolom -->
    <div class="columns is-multiline mt-4">


        <?php foreach ($show_minuman as $minuman) : ?>
            <div class="column is-4">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/img/1280x960.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4"><?= htmlspecialchars($minuman['nama_minuman']) ?></p>
                                <p class="subtitle is-6">Rp. <?= htmlspecialchars($minuman['harga_minuman']) ?></p>
                            </div>
                        </div>

                        <div class="content">
                            <a href="/warung-mabar/edit-data/<?= $minuman["slugs"] ?>" class="button is-info" referrerpolicy="no-referrer">
                                <span class="icon-text">
                                    <i class="fas fa-edit"></i>
                                </span>
                                <span class="ml-2">Edit</span>
                            </a>
                            <a href="#" class="button is-danger ml-2">
                                <span class="icon-text">

                                    <i class="fas fa-trash-alt"></i>
                                </span>
                                <span class="ml-2">

                                    Hapus
                                </span>
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- end of isi website -->
<?= $this->endSection(); ?>