<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">

                <tr>
                    <td>id Instalasi Air</td>
                    <td>Total Kerusakan</td>
                    <td>Tingkat Kerusakan Instalasi Air</td>
                    <td>Action</td>


                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $air->id_instalasi_air; ?></td>
                        <td><?= $air->klasifikasi_kerusakan; ?></td>
                        <td><?= $air->tingkat_kerusakan_instalasi_air; ?></td>

                        <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                        <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->


                        <!-- <td> <a href="<?= base_url('C_Tampil/tampil_dinding/') . $dinding->id_dinding ?>">Kembali</a></td> -->
                        <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $air->id_sekolah ?>">Kembali</a></td>


                    </tr>

            </table>
        </div>
    </div>
</div>