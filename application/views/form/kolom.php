        <!-- 2.1 Kolom ---------------------------------------------------------------------------------------------------------------------------------->
        <div role="tabpanel" class="tab-pane" id="kolom">
            <div class="container mt-5 ml-3">
                <img width="500" src="<?= base_url('assets/img/balok1.jpg') ?>">
                <form action="<?= base_url('C_Sekolah/terimaDataKolom') ?>" method="POST">

                    <input type="hidden" value="<?= $id_sekolah ?>" name="id_sekolah">
                    <div class="mt-4 jumlah_unit">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Jumlah Unit</label>
                            <input type="text" class="form-control" name="jumlah_unit">
                        </div>
                        <!-- <hr class="sidebar-divider my-0"> -->
                    </div>
                    <div class="mt-4 tidak_rusak">
                        <ul>
                            <!-- Deskripsi Kerusakan -->
                            <li>Kolom dalam kondisi baik</li>
                        </ul>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="tidak_rusak">
                        </div>
                    </div>
                    <!-- <hr class="sidebar-divider my-0"> -->

                    <div class="mt-4 rusak_sangat_ringan">
                        <ul>
                            <li>Sudut kolom pecah</li>
                            <li>Plesteran kolom retak rambut</li>
                        </ul>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="rusak_sangat_ringan">
                        </div>
                    </div>
                    <!-- <hr class="sidebar-divider my-0"> -->

                    <div class="mt-4 rusak_ringan">
                        <ul>
                            <li>Retak pada permukaan kolom, lebar retak
                                0.2mm-1.0mm</li>

                        </ul>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="rusak_ringan">
                        </div>
                    </div>
                    <!-- <hr class="sidebar-divider my-0"> -->

                    <div class=" mt-4 rusak_sedang">
                        <ul>
                            <li>Retak pada permukaan kolom, lebar retak > 1.0
                                mm</li>
                            <li>Selimut beton gembur, beberapa tulangan
                                terlihat</li>
                        </ul>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="rusak_sedang">
                        </div>
                    </div>

                    <div class="rusak_berat">
                        <ul>
                            <li>Tulangan kolom terlihat 4 sisi pada 1 titik</li>
                            <li>Selimut beton hancur pada beberapa titik</li>
                        </ul>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="rusak_berat">
                        </div>
                    </div>

                    <div class="rusak_sangat_berat">
                        <ul>
                            <li>Beton inti kolom hancur, baja tulangan tertekuk</li>
                            <li>kolom patah</li>
                        </ul>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="rusak_sangat_berat">
                        </div>
                    </div>

                    <div class="komponen_tidak_sesuai">
                        <ul>
                            <li>Material Dimensi dan kontruksi pondasi diindikasikan tidak sesuai dengan persyaratan teknis merujuk pada rencana teknis apabila ada petunjuk teknis dan/atau SNI</li>

                        </ul>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="komponen_tidak-sesuai">
                        </div>
                    </div>

                    <div class="mb-5">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <!-- <a href="#penutupatap" class="nav-link" role="tab" data-toggle="tab"></a> -->
                    </div>
                </form>
            </div>
        </div>