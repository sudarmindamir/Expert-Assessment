<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">

                <tr>
                    <td>id Instalasi Listrik</td>
                    <td>Total Kerusakan</td>
                    <td>Tingkat Kerusakan Instalasi Listrik</td>
                    <td>Action</td>


                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $listrik->id_instalasi_listrik; ?></td>
                        <td><?= $listrik->klasifikasi_kerusakan; ?></td>
                        <td><?= $listrik->tingkat_kerusakan_instalasi_listrik; ?></td>

                        <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                        <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->


                        <!-- <td> <a href="<?= base_url('C_Tampil/tampil_dinding/') . $dinding->id_dinding ?>">Kembali</a></td> -->
                        <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $listrik->id_sekolah ?>">Kembali</a></td>


                    </tr>


            </table>
        </div>
    </div>
</div>