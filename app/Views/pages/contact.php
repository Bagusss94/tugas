<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact US</h1>
            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li><?php $a['tipe']; ?> </li>
                    <li><?php $a['alamat']; ?> </li>
                    <li><?php $a['kota']; ?> </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>