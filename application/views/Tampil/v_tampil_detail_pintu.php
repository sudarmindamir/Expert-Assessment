<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">

                <tr>
                    <td>id pintu</td>
                    <td>Jumlah Unit</td>
                    <td>Tidak Rusak</td>
                    <td>Rusak Sangat Ringan</td>
                    <td>Rusak Ringan</td>
                    <td>Rusak Sedang</td>
                    <td>Rusak Berat</td>
                    <td>Rusak Sangat Berat</td>
                    <td>Komponen Tidak Sesuai</td>
                    <td>Total Kerusakan pintu</td>
                    <td>Tingkat Kerusakan pintu</td>
                    <td>Action</td>


                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $pintu->id_pintu; ?></td>
                        <td><?= $pintu->jumlah_unit; ?></td>
                        <td><?= $pintu->tidak_rusak; ?></td>
                        <td><?= $pintu->rusak_sangat_ringan; ?></td>
                        <td><?= $pintu->rusak_ringan; ?></td>
                        <td><?= $pintu->rusak_sedang; ?></td>
                        <td><?= $pintu->rusak_berat; ?></td>
                        <td><?= $pintu->rusak_sangat_berat; ?></td>
                        <td><?= $pintu->komponen_tidak_sesuai; ?></td>
                        <td><?= $pintu->total_kerusakan_pintu; ?></td>
                        <td><?= $pintu->tingkat_kerusakan_pintu; ?></td>

                        <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                        <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->


                        <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $pintu->id_sekolah ?>">Kembali</a></td>


                    </tr>

            </table>
        </div>
    </div>
</div>