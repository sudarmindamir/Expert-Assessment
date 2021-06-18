       <!-- 14. Instalasi Listrik ---------------------------------------------------------------------------------------------------------------------------------->
       <div role="tabpanel" class="tab-pane" id="instalasilistrik">
           <div class="container mt-5 ml-3">
               <!-- <img width="500" src="<?= base_url('assets/img/balok1.jpg') ?>"> -->
               <form action="<?= base_url('C_Sekolah/terimaDataInstalasiListrik') ?>" method="POST">
                   <form>
                       <input type="hidden" value="<?= $id_sekolah ?>" name="id_sekolah">
                       <div class="mb-3 form-check">
                           <input type="radio" value="0" class="form-check-input" name="listrik">
                           <label class="form-check-label" for="exampleCheck1"> jaringan listrik dalam kondisi baik
                           </label>
                       </div>

                       <div class="mb-3 form-check">
                           <input type="radio" value="0.2" class="form-check-input" name="listrik">
                           <label class="form-check-label" for="exampleCheck1">
                               • Sebagian kecil komponen dari panel-panel LP rusak, ada
                               • Sedikit jalur kabel instalasi shortage, sebagian kecil
                               • Armatur rusak ringan, sehingga biaya perbaikan kurang
                               dari 5% dari biaya instalasi baru

                           </label>
                       </div>

                       <div class="mb-3 form-check">
                           <input type="radio" value="0.35" class="form-check-input" name="listrik">
                           <label class="form-check-label" for="exampleCheck1"> • Beberapa komponen dari panel-panel LP rusak, sebagian kecil jalur kabel instalasi shortage, sehingga armatur rusak ringan, sehingga biaya perbaikan 5-20% dari biaya instalasi baru penurunan tidak melebihi 1/250 L
                           </label>
                       </div>

                       <div class="mb-3 form-check">
                           <input type="radio" value="0.5" class="form-check-input" name="listrik">
                           <label class="form-check-label" for="exampleCheck1"> • Beberapa komponen dari panel-panel LP rusak, sebagian kecil jalur kabel instalasi shortage, sehingga armatur rusak berat dan ringan, sehingga biaya perbaikan 20-50% dari biaya instalasi baru

                           </label>
                       </div>

                       <div class="mb-3 form-check">
                           <input type="radio" value="0.7" class="form-check-input" name="listrik">
                           <label class="form-check-label" for="exampleCheck1"> • Sebagian besar komponen panel-panel LP rusak, sebagian besar kabel instalasi shortage, sebagian besar armatur rusak, sehingga biaya perbaikan lebih dari 50-65% dari instalasi baru
                           </label>
                       </div>

                       <div class="mb-3 form-check">
                           <input type="radio" value="0.85" class="form-check-input" name="listrik">
                           <label class="form-check-label" for="exampleCheck1"> • Sebagian besar komponen panel-panel LP rusak, sebagian besar kabel instalasi shortage, seluruh armatur rusak, sehingga biaya perbaikan lebih dari 65% dari instalasi baru
                           </label>
                       </div>

                       <div class="mb-3 form-check">
                           <input type="radio" value="1" class="form-check-input" name="listrik">
                           <label class="form-check-label" for="exampleCheck1">Material Dimensi dan kontruksi pondasi diindikasikan tidak sesuai dengan persyaratan teknis merujuk pada rencana teknis apabila ada petunjuk teknis dan/atau SNI</label>
                       </div>


                       <button type="submit" class="btn btn-primary">Submit</button>


                   </form>
               </form>
           </div>
       </div>