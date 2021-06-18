       <!-- 3. Balok ------------------------------------------------------------------------------------------------------------------------------->
       <div role="tabpanel" class="tab-pane" id="balok">
           <div class="container mt-5 ml-3">
               <img width="500" src="<?= base_url('assets/img/kolom1.jpg') ?>">
               <form action="<?= base_url('C_Sekolah/terimaDataBalok') ?>" method="POST">

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
                           <li>Balok dalam kondisi baik</li>
                       </ul>
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                           <input type="text" class="form-control" name="tidak_rusak">
                       </div>
                   </div>
                   <!-- <hr class="sidebar-divider my-0"> -->

                   <div class="mt-4 rusak_sangat_ringan">
                       <ul>
                           <li>Retak 0.2 – 1.0 mm, retakan pada tengah bentang plat </li>

                       </ul>
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                           <input type="text" class="form-control" name="rusak_sangat_ringan">
                       </div>
                   </div>
                   <!-- <hr class="sidebar-divider my-0"> -->

                   <div class="mt-4 rusak_ringan">
                       <ul>
                           <li>Retak 0.2 – 1.0 mm, retakan pada tengah bentang plat </li>

                       </ul>
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                           <input type="text" class="form-control" name="rusak_ringan">
                       </div>
                   </div>
                   <!-- <hr class="sidebar-divider my-0"> -->

                   <div class=" mt-4 rusak_sedang">
                       <ul>
                           <li>Balok melendut, lebar retak > 1.0 mm</li>
                           <li>SRetak meluas pada beberapa tempat</li>
                       </ul>
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                           <input type="text" class="form-control" name="rusak_sedang">
                       </div>
                   </div>

                   <div class="rusak_berat">
                       <ul>
                           <li>Balok melendut, selimut beton hancur, tulangan terlihat</li>

                       </ul>
                       <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Jumlah</label>
                           <input type="text" class="form-control" name="rusak_berat">
                       </div>
                   </div>

                   <div class="rusak_sangat_berat">
                       <ul>
                           <li>Balok patah/runtuh</li>
                           <li>Plat dan balok lain yang menumpu pada balok
                               tersebut ikut rusa</li>
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
       <!-- akhir balok -->