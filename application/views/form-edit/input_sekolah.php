<div role="tabpanel" class="tab-pane active" id="datasekolah">
    <div class="container mt-5 ml-3 mb-3">
        <form action="<?= base_url('C_Sekolah/terimaData') ?>" method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama Sekolah</label>
                <input type="text" class="form-control" name="nama_sekolah">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Alamat Sekolah</label>
                <input type="text" class="form-control" name="alamat_sekolah">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Kabupaten/Kota</label>
                <input type="text" class="form-control" name="kabupaten">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Luas Bangunan</label>
                <input type="text" class="form-control" name="luas_bangunan">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <!-- <a href="#pondasi" class="nav-link" role="tab" data-toggle="tab"></a> -->
            </div>
        </form>
    </div>
</div>