<?= $this->extend('template-layout/template'); ?>
<?= $this->section('isi-website'); ?>
<form action="" method="post">
    <?= csrf_field(); ?>
    <?php foreach ($minuman as $pilihMinum) : ?>
        <?= dd($minuman) ?>

        <div class="field">
            <label class="label">Nama Minuman</label>
            <div class="control">
                <input class="input" type="text" placeholder="Isi nama minuman" name="nama-minumannya" value="<?= $pilihMinum["nama_minuman"] ?>">
            </div>
        </div>

        <div class="field">
            <label class="label">Harga Minuman</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input " type="text" placeholder="Text input" name="harga-minumannya" value="<?= $pilihMinum["harga_minuman"] ?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>

            </div>
        </div>
    <?php endforeach; ?>
    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary" type="submit">Submit</button>
        </div>
        <div class="control">
            <button class="button is-primary is-light" type="reset">Reset</button>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>