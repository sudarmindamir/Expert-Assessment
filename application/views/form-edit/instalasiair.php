      <!-- 15. Instalasi Air ---------------------------------------------------------------------------------------------------------------------------------->
      <div role="tabpanel" class="tab-pane" id="instalasiair">
          <div class="container mt-5 ml-3">
              <!-- <img width="500" src="<?= base_url('assets/img/balok1.jpg') ?>"> -->
              <form action="<?= base_url('C_Sekolah/terimaDataInstalasiAir') ?>" method="POST">

                  <input type="hidden" value="<?= $id_sekolah ?>" name="id_sekolah">


                  <div class="mb-3 form-check">
                      <input type="radio" value="0" class="form-check-input" name="air">
                      <label class="form-check-label" for="exampleCheck1">Sistem penyedian air dalam kondisi baik </label>
                  </div>

                  <div class="mb-3 form-check">
                      <input type="radio" value="0.2" class="form-check-input" name="air">
                      <label class="form-check-label" for="exampleCheck1">• Kebocoran pipa terbatas ditempat yang terlihat atau mudah dicapai, keran keran kecil rusak, sehingga biaya perbaikan kurang dari 1% biaya instalasi baru

                      </label>
                  </div>

                  <div class="mb-3 form-check">
                      <input type="radio" value="0.35" class="form-check-input" name="air">
                      <label class="form-check-label" for="exampleCheck1">• Bagian bagian kecil pemipaan bocor, motor pompa terbakar, keran-keran kecil rusak, sehingga biaya perbaikan antara 1-10% dari biaya instalasi baru. </label>
                  </div>

                  <div class="mb-3 form-check">
                      <input type="radio" value="0.5" class="form-check-input" name="air">
                      <label class="form-check-label" for="exampleCheck1"> • Pompa, motor, pipa, dan keran rusak apabila diganti atau diperbaiki memerlukan biaya antara 10-25% dari biaya instalasi baru.
                      </label>
                  </div>

                  <div class="mb-3 form-check">
                      <input type="radio" value="0.7" class="form-check-input" name="air">
                      <label class="form-check-label" for="exampleCheck1">• Sebagian besar pompa, sebagian besar motor terbakar, pipa utama bocor namun ditempat terbuka, beberapa keran tidak befungsi, sehingga biaya perbaikan 25-50% dari biaya instalasi baru </label>
                  </div>

                  <div class="mb-3 form-check">
                      <input type="radio" value="0.85" class="form-check-input" name="air">
                      <label class="form-check-label" for="exampleCheck1"> • Pompa-pompa rusak total, motor terbakar, dibanyak tempat terbuka dan tutup pipa pipa bocor, keran keran tidak berfungsi, sehingga perbaikan instalasi perlu menyeluruh, dengan perkiraan biaya lebih dari 50% dari
                          biaya instalasi baru. </label>
                  </div>

                  <div class="mb-3 form-check">
                      <input type="radio" value="1" class="form-check-input" name="air">
                      <label class="form-check-label" for="exampleCheck1">Material Dimensi dan kontruksi pondasi diindikasikan tidak sesuai dengan persyaratan teknis merujuk pada rencana teknis apabila ada petunjuk teknis dan/atau SNI</label>
                  </div>


                  <button type="submit" class="btn btn-primary">Submit</button>



              </form>
          </div>
      </div>