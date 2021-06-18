      <!-- 10. Jendela ---------------------------------------------------------------------------------------------------------------------------------->
      <div role="tabpanel" class="tab-pane" id="jendela">
          <div class="container mt-5 ml-3">
              <!-- <img width="500" src="<?= base_url('assets/img/balok1.jpg') ?>"> -->
              <form action="<?= base_url('C_Sekolah/terimaDataJendela') ?>" method="POST">

                  <input type="hidden" value="<?= $id_sekolah ?>" name="id_sekolah">

                  <div class="mt-4 jumlah_unit">
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Jumlah Total Jendela</label>
                          <input type="text" class="form-control" name="jumlah_unit">
                      </div>
                      <!-- <hr class="sidebar-divider my-0"> -->
                  </div>
                  <div class="mt-4 tidak_rusak">
                      <ul>
                          <!-- Deskripsi Kerusakan -->
                          <li>Jendela dalam kondisi baik</li>
                      </ul>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                          <input type="text" class="form-control" name="tidak_rusak">
                      </div>
                  </div>
                  <!-- <hr class="sidebar-divider my-0"> -->

                  <div class="mt-4 rusak_sangat_ringan">
                      <ul>
                          <li>Perubahan warna pada sebagian lapisan rangka daun jendela</li>

                      </ul>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                          <input type="text" class="form-control" name="rusak_sangat_ringan">
                      </div>
                  </div>
                  <!-- <hr class="sidebar-divider my-0"> -->

                  <div class="mt-4 rusak_ringan">
                      <ul>
                          <li> Terlihat Lapuk atau keropos atau retak atau gompal akibat benturan pada bingkai jendela </li>
                          <li>Terlihat terletak pada sebagian kecil kaca</li>

                      </ul>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                          <input type="text" class="form-control" name="rusak_ringan">
                      </div>
                  </div>
                  <!-- <hr class="sidebar-divider my-0"> -->

                  <div class=" mt-4 rusak_sedang">
                      <ul>
                          <li>Terlihat Lapuk atau keropos atau retak atau gompal semakin meluas engsel dan kunci tidak berfungsi baik sehingga jendela tidak dapat menutup sempurna </li>
                          <li>Terlihat retak lebar pada kaca</li>
                      </ul>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                          <input type="text" class="form-control" name="rusak_sedang">
                      </div>
                  </div>

                  <div class="rusak_berat">
                      <ul>
                          <li>Terlihat pada bingkai jendela terjadi deformasi atau melengkung atau lepas sambungan sehingga jendela sulit dibuka </li>
                          <li>Terlihat pecah pada kaca</li>
                      </ul>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                          <input type="text" class="form-control" name="rusak_berat">
                      </div>
                  </div>

                  <div class="rusak_sangat_berat">
                      <ul>
                          <li>Terlihat pada bingkai j jendela semakin parah atau terjadi patah sehingga jendela tidak dapat dibuka sama sekali</li>
                          <li>Terlihat pecahan secara menyeluruh pada kaca</li>

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