<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">


                <tr>
                    <td>id lantai</td>
                    <td>Luas Total</td>

                    <td>Tidak Rusak</td>
                    <td>Rusak Sangat Ringan</td>
                    <td>Rusak Ringan</td>
                    <td>Rusak Sedang</td>
                    <td>Rusak Berat</td>
                    <td>Rusak Sangat Berat</td>
                    <td>Komponen Tidak Sesuai</td>
                    <td>Total Kerusakan lantai</td>
                    <td>Tingkat Kerusakan lantai</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $lantai->id_lantai; ?></td>
                        <td><?= $lantai->luas_total; ?></td>
                        <!-- <td><?= $dinding->luas_B; ?></td> -->
                        <td><?= $lantai->tidak_rusak; ?></td>
                        <td><?= $lantai->rusak_sangat_ringan; ?></td>
                        <td><?= $lantai->rusak_ringan; ?></td>
                        <td><?= $lantai->rusak_sedang; ?></td>
                        <td><?= $lantai->rusak_berat; ?></td>
                        <td><?= $lantai->rusak_sangat_berat; ?></td>
                        <td><?= $lantai->komponen_tidak_sesuai; ?></td>
                        <td><?= $lantai->total_kerusakan_lantai; ?></td>
                        <td><?= $lantai->tingkat_kerusakan_lantai; ?></td>

                        <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                        <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->


                        <!-- <td> <a href="<?= base_url('C_Tampil/tampil_dinding/') . $dinding->id_dinding ?>">Kembali</a></td> -->
                        <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $lantai->id_sekolah ?>">Kembali</a></td>


                    </tr>
            </table>
        </div>
    </div>
</div>