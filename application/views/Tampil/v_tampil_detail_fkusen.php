<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">


                <tr>
                    <td>id finishing kusen</td>
                    <td>Luas Total</td>
                    <td>Tidak Rusak</td>
                    <td>Rusak Sangat Ringan</td>
                    <td>Rusak Ringan</td>
                    <td>Rusak Sedang</td>
                    <td>Rusak Berat</td>
                    <td>Rusak Sangat Berat</td>
                    <td>Komponen Tidak Sesuai</td>
                    <td>Total Kerusakan finishing kusen</td>
                    <td>Tingkat Kerusakan finishing kusen</td>
                    <td>Action</td>


                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $fkusen->id_finishing_kusen; ?></td>
                        <td><?= $fkusen->luas_total; ?></td>
                        <td><?= $fkusen->tidak_rusak; ?></td>
                        <td><?= $fkusen->rusak_sangat_ringan; ?></td>
                        <td><?= $fkusen->rusak_ringan; ?></td>
                        <td><?= $fkusen->rusak_sedang; ?></td>
                        <td><?= $fkusen->rusak_berat; ?></td>
                        <td><?= $fkusen->rusak_sangat_berat; ?></td>
                        <td><?= $fkusen->komponen_tidak_sesuai; ?></td>
                        <td><?= $fkusen->total_kerusakan_finishing_kusen ?></td>
                        <td><?= $fkusen->tingkat_kerusakan_finishing_kusen; ?></td>

                        <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                        <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->


                        <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $fkusen->id_sekolah ?>">Kembali</a></td>


                    </tr>
            </table>
        </div>
    </div>
</div>