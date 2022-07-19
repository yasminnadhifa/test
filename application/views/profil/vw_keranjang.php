<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Contact</h2>
            <p>Contact Us</p>
</header>
<div class="row no-gutters align-items-center">

<img src="<?= base_url('template/assets/img/buku/') . $buku['gambar']; ?>" style="width:200px" class="img-thumbnail">

<div class="col-lg-7">
        <div class="row gy-4">
            <form action="" method="POST" class="php-email-form">

                <div style="display: flex;">
                    <input type="hidden" name="id" value="<?= $buku['id']; ?>">
                    <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                    <input type="hidden" name="stok" value="<?= $buku['stok'] ?>">
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <label for="judul">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" placeholder="Judul Buku" value="<?= $buku['judul']; ?>" id="judul" readonly>
                        </div>
                        <div class="col-md-12">
                            <label for="stok">Kondisi Buku</label>
                            <input type="text" name="kondisi" class="form-control" placeholder="Kondisi Buku" value="<?= $buku['kondisi']; ?>" id="kondisi" readonly>
                        </div>
                        <div class="col-md-12">
                            <label for="stok">Berat Buku</label>
                            <input type="text" name="berat" class="form-control" placeholder="Berat Buku" value="<?= $buku['berat']; ?>" id="berat" readonly>
                        </div>
                        <div class="col-md-6 ">
                            <label for="stok">Stok Buku</label>
                            <input type="text" value="<?= $buku['stok']; ?>" class="form-control" name="stok" placeholder="Stok Buku" readonly id="stok">
                        </div>
                        <div class="col-md-6">
                            <label for="stok">Harga Buku</label>
                            <input name="harga" value="<?= $buku['harga']; ?>" type="text" readonly class="form-control" id="harga">
                        </div>
                        <div class="col-md-6 ">
                            <label for="stok">Jumlah buku yang dibeli</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
                            <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-md-6">
                            <label for="stok">Total harga yang harus dibayarkan</label>
                            <input type="text" onblur="findTotal()" name="total" id="total" readonly class="form-control">
                        </div>
                        <button type="submit">Tambah Ke Keranjang</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

</section>
