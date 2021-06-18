<!-- <div role="tabpanel" class="tab-pane active" id="datasekolah">
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
               
            </div>
        </form>
    </div>
</div> -->


<div class="mx-auto mt-5 col-xl-9 col-md-9 mb-9">
    <div class="card border-left-primary shadow h-80 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    </div>

                    <div role="tabpanel" class="tab-pane active" id="datasekolah">
                        <div class="container mt-2 ml-3">
                            <h3 class="mb-4"> <strong> Form Sekolah </strong> </h3>
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
                                    <label for="formGroupExampleInput2" class="form-label">Luas Bangunan (m<sup>2</sup>) </label>
                                    <input type="text" class="form-control" name="luas_bangunan">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary mt-4 mb-4">Simpan</button>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div> -->
            </div>
        </div>
    </div>
</div>