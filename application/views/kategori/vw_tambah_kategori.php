</div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
          <h1><?php echo $judul; ?></h1>
          </div>

          <div class="row justify-content">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="kategori">Nama Kategori</label>
                            <input type="text" name="kategori" value="<?= set_value('kategori'); ?>" class="form-control" id="kategori" placeholder="Nama Kategori">
                            <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Kategori</label>
                            <input type="text" name="deskripsi" value="<?= set_value('deskripsi'); ?>" class="form-control" id="deskripsi" placeholder="Deskripsi Kategori">
                            <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <a href="<?= base_url('Kategori') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            Kategori</button>
                    </form>
                </div>
            </div>
        </div>
        </section>
      </div>