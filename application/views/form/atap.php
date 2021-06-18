       <!-- 4.Atap ------------------------------------------------------------------------------------------------------------------------------->
       <div role="tabpanel" class="tab-pane" id="atap">
           <div class="container mt-5 ml-3">
               <img width="500" src="<?= base_url('assets/img/2.jpg') ?>">
               <form action="<?= base_url('C_Sekolah/terimaDataAtap') ?>" method="POST">

                   <input type="hidden" value="<?= $id_sekolah ?>" name="id_sekolah">

                   <div class="mt-4 Luas_A">
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Luas A</label>
                           <input type="text" class="form-control" name="luas_A">
                       </div>
                   </div>
                   <div class="mt-4 Luas_B">
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Luas B</label>
                           <input type="text" class="form-control" name="luas_B">
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
                           <li>Karat rangka mulai terlihat, gording melendut </li>
                           <li>Perubahan warna pada sebagian lapisan warna penutup atap </li>
                           <li>Genteng terlepas dari dudukannya </li>

                       </ul>
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Luas bidang yang rusak</label>
                           <input type="text" class="form-control" name="rusak_sangat_ringan">
                       </div>
                   </div>
                   <!-- <hr class="sidebar-divider my-0"> -->

                   <div class="mt-4 rusak_ringan">
                       <ul>
                           <li>Karat rangka meluas, konstruksi bergetar akibat angin </li>
                           <li>Reng rusak, kaso-kaso rusak Genteng retak dan terdapat
                               bocoran terbatas </li>
                           <li>Perubahan warna pada lapisan cat meluas </li>

                       </ul>
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Luas bidang yang rusak</label>
                           <input type="text" class="form-control" name="rusak_ringan">
                       </div>
                   </div>
                   <!-- <hr class="sidebar-divider my-0"> -->

                   <div class=" mt-4 rusak_sedang">
                       <ul>
                           <li>Struktur atap melendut, flens profil sobek, retak pada
                               sambungan las</li>
                           <li>Gording/rangka plafond melendut Bocoran meluas</li>
                       </ul>
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Luas bidang yang rusak</label>
                           <input type="text" class="form-control" name="rusak_sedang">
                       </div>
                   </div>

                   <div class="rusak_berat">
                       <ul>
                           <li>Baut penyambung dan plat sambungan bengkok, profil
                               tertekuk, korasi meluas di banyak tempat</li>
                           <li>Penutup atap melendut sangat besar dengan
                               kemungkinan keruntuhan besar</li>

                       </ul>
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Luas bidang yang rusak</label>
                           <input type="text" class="form-control" name="rusak_berat">
                       </div>
                   </div>

                   <div class="rusak_sangat_berat">
                       <ul>
                           <li>Rangka atap runtuh</li>
                           <li>omponen struktur tertekuk</li>
                           <li>Sambungan putus, profil tertekukl, konstruksi runtuh</li>


                       </ul>
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Luas bidang yang rusak</label>
                           <input type="text" class="form-control" name="rusak_sangat_berat">
                       </div>
                   </div>

                   <div class="komponen_tidak_sesuai">
                       <ul>
                           <li>Material Dimensi dan kontruksi pondasi diindikasikan tidak sesuai dengan persyaratan teknis merujuk pada rencana teknis apabila ada petunjuk teknis dan/atau SNI</li>

                       </ul>
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Luas bidang yang rusak</label>
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