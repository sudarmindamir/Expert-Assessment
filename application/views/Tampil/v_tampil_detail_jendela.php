<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">

                <tr>
                    <td>id jendela</td>
                    <td>Jumlah Unit</td>
                    <td>Tidak Rusak</td>
                    <td>Rusak Sangat Ringan</td>
                    <td>Rusak Ringan</td>
                    <td>Rusak Sedang</td>
                    <td>Rusak Berat</td>
                    <td>Rusak Sangat Berat</td>
                    <td>Komponen Tidak Sesuai</td>
                    <td>Total Kerusakan jendela</td>
                    <td>Tingkat Kerusakan jendela</td>
                    <td>Action</td>


                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $jendela->id_jendela; ?></td>
                        <td><?= $jendela->jumlah_unit; ?></td>
                        <td><?= $jendela->tidak_rusak; ?></td>
                        <td><?= $jendela->rusak_sangat_ringan; ?></td>
                        <td><?= $jendela->rusak_ringan; ?></td>
                        <td><?= $jendela->rusak_sedang; ?></td>
                        <td><?= $jendela->rusak_berat; ?></td>
                        <td><?= $jendela->rusak_sangat_berat; ?></td>
                        <td><?= $jendela->komponen_tidak_sesuai; ?></td>
                        <td><?= $jendela->total_kerusakan_jendela; ?></td>
                        <td><?= $jendela->tingkat_kerusakan_jendela; ?></td>

                        <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                        <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->


                        <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $jendela->id_sekolah ?>">Kembali</a></td>


                    </tr>


            </table>
        </div>
    </div>
</div>