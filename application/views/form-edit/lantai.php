   <!-- 7.Lantai ------------------------------------------------------------------------------------------------------------------------------->
   <div role="tabpanel" class="tab-pane" id="lantai">
       <div class="container mt-5 ml-3">
           <!-- <img width="500" src="<?= base_url('assets/img/dinding1.jpg') ?>"> -->
           <form action="<?= base_url('C_Sekolah/terimaDataLantai') ?>" method="POST">
               <input type="hidden" value="<?= $id_sekolah ?>" name="id_sekolah">
               <div class="mt-4 Luas_Total_lantai">
                   <div class="mb-3">
                       <label for="formGroupExampleInput" class="form-label">Luas Total Lantai</label>
                       <input type="text" class="form-control" name="luas_total">
                   </div>
               </div>

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
                       <li>Penutup lantai gores</li>


                   </ul>
                   <div class="mb-3">
                       <label for="formGroupExampleInput" class="form-label">Luas lantai yang rusak</label>
                       <input type="text" class="form-control" name="rusak_sangat_ringan">
                   </div>
               </div>
               <!-- <hr class="sidebar-divider my-0"> -->

               <div class="mt-4 rusak_ringan">
                   <ul>
                       <li>Penutup lantai retak/remuk sebagian </li>



                   </ul>
                   <div class="mb-3">
                       <label for="formGroupExampleInput" class="form-label">Luas lantai yang rusak</label>
                       <input type="text" class="form-control" name="rusak_ringan">
                   </div>
               </div>
               <!-- <hr class="sidebar-divider my-0"> -->

               <div class=" mt-4 rusak_sedang">
                   <ul>
                       <li>Penutup lantai sebagian terlepas</li>

                   </ul>
                   <div class="mb-3">
                       <label for="formGroupExampleInput" class="form-label">Luas lantai yang rusak</label>
                       <input type="text" class="form-control" name="rusak_sedang">
                   </div>
               </div>

               <div class="rusak_berat">
                   <ul>
                       <li>Pentup lantai sebagian besar terlepas</li>

                   </ul>
                   <div class="mb-3">
                       <label for="formGroupExampleInput" class="form-label">Luas lantai yang rusak</label>
                       <input type="text" class="form-control" name="rusak_berat">
                   </div>
               </div>

               <div class="rusak_sangat_berat">
                   <ul>
                       <li>Lantai meledak, terlepas</li>


                   </ul>
                   <div class="mb-3">
                       <label for="formGroupExampleInput" class="form-label">Luas lantai yang rusak</label>
                       <input type="text" class="form-control" name="rusak_sangat_berat">
                   </div>
               </div>

               <div class="komponen_tidak_sesuai">
                   <ul>
                       <li>Material Dimensi dan kontruksi pondasi diindikasikan tidak sesuai dengan persyaratan teknis merujuk pada rencana teknis apabila ada petunjuk teknis dan/atau SNI</li>

                   </ul>
                   <div class="mb-3">
                       <label for="formGroupExampleInput" class="form-label">Luas lantai yang rusak</label>
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