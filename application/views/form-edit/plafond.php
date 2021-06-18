      <!-- 6.Plafond ------------------------------------------------------------------------------------------------------------------------------->
      <div role="tabpanel" class="tab-pane" id="plafond">
          <div class="container mt-5 ml-3">
              <img width="500" src="<?= base_url('assets/img/3.jpg') ?>">
              <form action="<?= base_url('C_Sekolah/terimaDataPlafond') ?>" method="POST">
                  <input type="hidden" value="<?= $id_sekolah ?>" name="id_sekolah">
                  <div class="mt-4 panjang_a">
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">panjang "a"</label>
                          <input type="text" class="form-control" name="panjang_a">
                      </div>
                  </div>

                  <div class="mt-4 panjang_b">
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">panjang "b"</label>
                          <input type="text" class="form-control" name="panjang_b">
                      </div>
                  </div>

                  <div class="mt-4 panjang_c">
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">panjang "c"</label>
                          <input type="text" class="form-control" name="panjang_c">
                      </div>
                  </div>

                  <!-- <div class="mt-4 Luas_A">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Luas Total Rangka Plafond Ruangan</label>
                            <input type="text" class="form-control" name="luas_total">
                        </div>
                    </div> -->



                  <!-- <div class="mt-4 tidak_rusak">
                        <ul>
                        
                            <li>Rangka Atap dalam kondisi baik
                            </li>
                        </ul>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Luas bidang yang rusak</label>
                            <input type="text" class="form-control" name="tidak_rusak">
                        </div>
                    </div> -->

                  <!-- <hr class="sidebar-divider my-0"> -->

                  <div class="mt-4 rusak_sangat_ringan">
                      <ul>
                          <li>Indikasi kelembabanatau kebocoran kecila atap dengan adanya bercak pada sebagian lapisan warna langit-langit atauu plafon</li>


                      </ul>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Luas total rangka plafond yang rusak (Contoh: A + B)</label>
                          <input type="text" class="form-control" name="rusak_sangat_ringan">
                      </div>
                  </div>
                  <!-- <hr class="sidebar-divider my-0"> -->

                  <div class="mt-4 rusak_ringan">
                      <ul>
                          <li>Terjadi indikasi kelembaban atau genangan air pada plafon meluas dengan bercak pada lapisan warna langit-langit meluas</li>



                      </ul>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Luas total rangka plafond yang rusak (Contoh: A + B)</label>
                          <input type="text" class="form-control" name="rusak_ringan">
                      </div>
                  </div>
                  <!-- <hr class="sidebar-divider my-0"> -->

                  <div class=" mt-4 rusak_sedang">
                      <ul>
                          <li>penutup bukan langit-langit terlepas</li>
                      </ul>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Luas total rangka plafond yang rusak (Contoh: A + B)</label>
                          <input type="text" class="form-control" name="rusak_sedang">
                      </div>
                  </div>

                  <div class="rusak_berat">
                      <ul>
                          <li> penutup langit-langit melendut sangat besar dengan kemungkinan keruntuhan besar
                          </li>


                      </ul>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Luas total rangka plafond yang rusak (Contoh: A + B)</label>
                          <input type="text" class="form-control" name="rusak_berat">
                      </div>
                  </div>

                  <div class="rusak_sangat_berat">
                      <ul>
                          <li> Rangka langit-langit runtuh</li>


                      </ul>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Luas total rangka plafond yang rusak (Contoh: A + B)</label>
                          <input type="text" class="form-control" name="rusak_sangat_berat">
                      </div>
                  </div>

                  <div class="komponen_tidak_sesuai">
                      <ul>
                          <li>Material Dimensi dan kontruksi pondasi diindikasikan tidak sesuai dengan persyaratan teknis merujuk pada rencana teknis apabila ada petunjuk teknis dan/atau SNI</li>

                      </ul>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Luas total rangka plafond yang rusak (Contoh: A + B)</label>
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