<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">


                <tr>
                    <td>id kusen</td>
                    <td>Jumlah Unit</td>

                    <td>Tidak Rusak</td>
                    <td>Rusak Sangat Ringan</td>
                    <td>Rusak Ringan</td>
                    <td>Rusak Sedang</td>
                    <td>Rusak Berat</td>
                    <td>Rusak Sangat Berat</td>
                    <td>Komponen Tidak Sesuai</td>
                    <td>Total Kerusakan kusen</td>
                    <td>Tingkat Kerusakan kusen</td>
                    <td>Action</td>


                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $kusen->id_kusen; ?></td>
                        <td><?= $kusen->jumlah_unit; ?></td>
                        <!-- <td><?= $dinding->luas_B; ?></td> -->
                        <td><?= $kusen->tidak_rusak; ?></td>
                        <td><?= $kusen->rusak_sangat_ringan; ?></td>
                        <td><?= $kusen->rusak_ringan; ?></td>
                        <td><?= $kusen->rusak_sedang; ?></td>
                        <td><?= $kusen->rusak_berat; ?></td>
                        <td><?= $kusen->rusak_sangat_berat; ?></td>
                        <td><?= $kusen->komponen_tidak_sesuai; ?></td>
                        <td><?= $kusen->total_kerusakan_kusen; ?></td>
                        <td><?= $kusen->tingkat_kerusakan_kusen; ?></td>

                        <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                        <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->


                        <!-- <td> <a href="<?= base_url('C_Tampil/tampil_dinding/') . $dinding->id_dinding ?>">Kembali</a></td> -->
                        <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $kusen->id_sekolah ?>">Kembali</a></td>


                    </tr>

            </table>
        </div>
    </div>
</div>