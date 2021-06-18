<!-- 9. Pintu ---------------------------------------------------------------------------------------------------------------------------------->
<div role="tabpanel" class="tab-pane" id="pintu">
    <div class="container mt-5 ml-3">
        <!-- <img width="500" src="<?= base_url('assets/img/balok1.jpg') ?>"> -->
        <form action="<?= base_url('C_Sekolah/terimaDataPintu') ?>" method="POST">
            <input type="hidden" value="<?= $id_sekolah ?>" name="id_sekolah">
            <div class="mt-4 jumlah_unit">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jumlah Total Pintu</label>
                    <input type="text" class="form-control" name="jumlah_unit">
                </div>
                <!-- <hr class="sidebar-divider my-0"> -->
            </div>
            <div class="mt-4 tidak_rusak">
                <ul>
                    <!-- Deskripsi Kerusakan -->
                    <li>Pintu dalam kondisi baik</li>
                </ul>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" name="tidak_rusak">
                </div>
            </div>
            <!-- <hr class="sidebar-divider my-0"> -->

            <div class="mt-4 rusak_sangat_ringan">
                <ul>
                    <li>Perubahan warna atau gores atau retak pada sebagian daun pintu</li>

                </ul>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" name="rusak_sangat_ringan">
                </div>
            </div>
            <!-- <hr class="sidebar-divider my-0"> -->

            <div class="mt-4 rusak_ringan">
                <ul>
                    <li> Kayu terlihat Lapuk atau keropos pada sebagian kecil pintu </li>
                    <li> Aluminium atau upvc sebagai pintu terlihat retak dan gompal atau berlubang akibat benturan</li>

                </ul>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" name="rusak_ringan">
                </div>
            </div>
            <!-- <hr class="sidebar-divider my-0"> -->

            <div class=" mt-4 rusak_sedang">
                <ul>
                    <li>Kayu terlihat Lapuk atau keropos atau berlubang pada semakin meluas dan kunci tidak berfungsi baik</li>
                    <li>Aluminium atau besi terlihat gompal atau berlubang terjadi di banyak bagian handal dan kunci tidak berfungsi baik</li>
                </ul>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" name="rusak_sedang">
                </div>
            </div>

            <div class="rusak_berat">
                <ul>
                    <li>Kayu terlihat rangka pintu patah atau sambungan terlepas multiplek penutup pintu terlepas atau berlubang hendel dan kunci tidak ada </li>
                    <li>Auminium atau divisi terlihat rangka atau lapisan daun pintu patah atau lepas sambungan handle dan kunci tidak ada</li>
                </ul>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" name="rusak_berat">
                </div>
            </div>

            <div class="rusak_sangat_berat">
                <ul>
                    <li>Daun pintu dalam kondisi tidak berfungsi atau berlubang besar atau tidak dapat menutup atau dilepaskan akibat akumulasi kerusakan pada sebagian besar bagian-bagiannya</li>

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