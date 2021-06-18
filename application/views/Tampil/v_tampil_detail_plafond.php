<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">

                <tr>
                    <td>id plafond</td>
                    <td>Luas Total</td>

                    <td>Tidak Rusak</td>
                    <td>Rusak Sangat Ringan</td>
                    <td>Rusak Ringan</td>
                    <td>Rusak Sedang</td>
                    <td>Rusak Berat</td>
                    <td>Rusak Sangat Berat</td>
                    <td>Komponen Tidak Sesuai</td>
                    <td>Total Kerusakan plafond</td>
                    <td>Tingkat Kerusakan plafond</td>
                    <td>Action</td>


                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $plafond->id_plafond; ?></td>
                        <td><?= $plafond->luas_total; ?></td>
                        <!-- <td><?= $dinding->luas_B; ?></td> -->
                        <td><?= $plafond->tidak_rusak; ?></td>
                        <td><?= $plafond->rusak_sangat_ringan; ?></td>
                        <td><?= $plafond->rusak_ringan; ?></td>
                        <td><?= $plafond->rusak_sedang; ?></td>
                        <td><?= $plafond->rusak_berat; ?></td>
                        <td><?= $plafond->rusak_sangat_berat; ?></td>
                        <td><?= $plafond->komponen_tidak_sesuai; ?></td>
                        <td><?= $plafond->total_kerusakan_plafond; ?></td>
                        <td><?= $plafond->tingkat_kerusakan_plafond; ?></td>

                        <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                        <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->


                        <!-- <td> <a href="<?= base_url('C_Tampil/tampil_dinding/') . $dinding->id_dinding ?>">Kembali</a></td> -->
                        <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $plafond->id_sekolah ?>">Kembali</a></td>


                    </tr>

            </table>
        </div>
    </div>
</div>