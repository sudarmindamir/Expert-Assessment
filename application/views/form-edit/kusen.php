    <!-- 8. Kusen ---------------------------------------------------------------------------------------------------------------------------------->
    <div role="tabpanel" class="tab-pane" id="kusen">
        <div class="container mt-5 ml-3">
            <!-- <img width="500" src="<?= base_url('assets/img/balok1.jpg') ?>"> -->
            <form action="<?= base_url('C_Sekolah/terimaDataKusen') ?>" method="POST">
                <input type="hidden" value="<?= $id_sekolah ?>" name="id_sekolah">
                <div class="mt-4 jumlah_unit">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Jumlah Total Kusen</label>
                        <input type="text" class="form-control" name="jumlah_unit">
                    </div>
                    <!-- <hr class="sidebar-divider my-0"> -->
                </div>
                <div class="mt-4 tidak_rusak">
                    <ul>
                        <!-- Deskripsi Kerusakan -->
                        <li>Kusen dalam kondisi baik</li>
                    </ul>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" name="tidak_rusak">
                    </div>
                </div>
                <!-- <hr class="sidebar-divider my-0"> -->

                <div class="mt-4 rusak_sangat_ringan">
                    <ul>
                        <li>Perubahan warna atau gores atau retak pada sebagian kusen</li>

                    </ul>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" name="rusak_sangat_ringan">
                    </div>
                </div>
                <!-- <hr class="sidebar-divider my-0"> -->

                <div class="mt-4 rusak_ringan">
                    <ul>
                        <li> Kayu terlihat lampu keropos pada sebagian kecil kusen </li>
                        <li> Aluminium atau iki visi sebagian kecil khusus yang terletak terletak dan gompal berlubang akibat benturan </li>

                    </ul>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" name="rusak_ringan">
                    </div>
                </div>
                <!-- <hr class="sidebar-divider my-0"> -->

                <div class=" mt-4 rusak_sedang">
                    <ul>
                        <li>Kayu terlihat Lapuk atau keropos dan berlubang semakin meluas adanya sambungan lepas</li>
                        <li>Aluminium atau upvc terlihat gombal atau berlubang terjadi di banyak bagian sambungan antara batang aluminium mulai terlihat lepas terjadi deformasi atau melengkung</li>
                    </ul>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" name="rusak_sedang">
                    </div>
                </div>

                <div class="rusak_berat">
                    <ul>
                        <li>Kayu terlihat Lapuk keropos dan berlubang pada sebagian besar kusen patah Pada sambungan kusen deformasi melengkung sehingga daun pintu atau jendela tidak dapat menutup </li>
                        <li>Aluminium yang terlihat Sambungan antar belakang batang aluminium terlepas deformasi melengkung semakin parah sehingga daun pintu atau jendela tidak dapat menutup terjadi pada atau sobek pada plat aluminium di bagian engsel</li>
                    </ul>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" name="rusak_berat">
                    </div>
                </div>

                <div class="rusak_sangat_berat">
                    <ul>
                        <li>Kusen tidak tidak berfungsi menahan daun pintu atau jendela akibat akumulasi kerusakan pada sebagian besar kusen</li>

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