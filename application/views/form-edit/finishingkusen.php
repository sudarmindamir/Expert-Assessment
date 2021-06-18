    <!-- 13. Finishing Kusen ---------------------------------------------------------------------------------------------------------------------------------->
    <div role="tabpanel" class="tab-pane" id="fkusen">
        <div class="container mt-5 ml-3">
            <!-- <img width="500" src="<?= base_url('assets/img/balok1.jpg') ?>"> -->
            <form action="<?= base_url('C_Sekolah/terimaDataFinishingKusen') ?>" method="POST">

                <input type="hidden" value="<?= $id_sekolah ?>" name="id_sekolah">

                <div class="mt-4 jumlah_unit">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Luas Total Finishing Kusen</label>
                        <input type="text" class="form-control" name="luas_total">
                    </div>
                    <!-- <hr class="sidebar-divider my-0"> -->
                </div>

                <!-- <div class="mt-4 tidak_rusak">
                        <ul>
                            <li>Jendela dalam kondisi baik</li>
                        </ul>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="tidak_rusak">
                        </div>
                    </div> -->
                <!-- <hr class="sidebar-divider my-0"> -->

                <div class="mt-4 rusak_sangat_ringan">
                    <ul>
                        <li>Perubahan warna pada sebagian lapisan warna finishing kusen</li>

                    </ul>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Luas lapisan finishing</label>
                        <input type="text" class="form-control" name="rusak_sangat_ringan">
                    </div>
                </div>
                <!-- <hr class="sidebar-divider my-0"> -->

                <div class="mt-4 rusak_ringan">
                    <ul>
                        <li> Perubahan warna pada lapisan cat kusen semakin meluas </li>


                    </ul>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Luas lapisan finishing</label>
                        <input type="text" class="form-control" name="rusak_ringan">
                    </div>
                </div>
                <!-- <hr class="sidebar-divider my-0"> -->

                <div class=" mt-4 rusak_sedang">
                    <ul>
                        <li>Lapisan cat kusen dan pintu terkelupas sebagian </li>

                    </ul>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Luas lapisan finishing</label>
                        <input type="text" class="form-control" name="rusak_sedang">
                    </div>
                </div>

                <div class="rusak_berat">
                    <ul>
                        <li>Lapisan cat kusen dan pintu terlihat terkelupas meluas

                        </li>
                    </ul>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Luas lapisan finishing</label>
                        <input type="text" class="form-control" name="rusak_berat">
                    </div>
                </div>

                <div class="rusak_sangat_berat">
                    <ul>
                        <li>Lapisan cat kusen dan pintu ntar kalau pas hampir di seluruh bagian</li>

                    </ul>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Luas lapisan finishing</label>
                        <input type="text" class="form-control" name="rusak_sangat_berat">
                    </div>
                </div>

                <div class="komponen_tidak_sesuai">
                    <ul>
                        <li>Material Dimensi dan kontruksi pondasi diindikasikan tidak sesuai dengan persyaratan teknis merujuk pada rencana teknis apabila ada petunjuk teknis dan/atau SNI</li>

                    </ul>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Luas lapisan finishing</label>
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