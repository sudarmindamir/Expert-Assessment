<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">


                <tr>
                    <td>id finishing dinding</td>
                    <td>Luas Total</td>
                    <td>Tidak Rusak</td>
                    <td>Rusak Sangat Ringan</td>
                    <td>Rusak Ringan</td>
                    <td>Rusak Sedang</td>
                    <td>Rusak Berat</td>
                    <td>Rusak Sangat Berat</td>
                    <td>Komponen Tidak Sesuai</td>
                    <td>Total Kerusakan finishing dinding</td>
                    <td>Tingkat Kerusakan finishing dinding</td>
                    <td>Action</td>


                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $fdinding->id_finishing_dinding; ?></td>
                        <td><?= $fdinding->luas_total; ?></td>
                        <td><?= $fdinding->tidak_rusak; ?></td>
                        <td><?= $fdinding->rusak_sangat_ringan; ?></td>
                        <td><?= $fdinding->rusak_ringan; ?></td>
                        <td><?= $fdinding->rusak_sedang; ?></td>
                        <td><?= $fdinding->rusak_berat; ?></td>
                        <td><?= $fdinding->rusak_sangat_berat; ?></td>
                        <td><?= $fdinding->komponen_tidak_sesuai; ?></td>
                        <td><?= $fdinding->total_kerusakan_finishing_dinding; ?></td>
                        <td><?= $fdinding->tingkat_kerusakan_finishing_dinding; ?></td>

                        <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                        <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->


                        <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $fdinding->id_sekolah ?>">Kembali</a></td>


                    </tr>

            </table>
        </div>
    </div>
</div>