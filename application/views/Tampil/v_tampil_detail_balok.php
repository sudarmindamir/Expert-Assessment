<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">


                <tr>
                    <td>id balok</td>
                    <td>Jumlah Unit</td>
                    <td>Tidak Rusak</td>
                    <td>Rusak Sangat Ringan</td>
                    <td>Rusak Ringan</td>
                    <td>Rusak Sedang</td>
                    <td>Rusak Berat</td>
                    <td>Rusak Sangat Berat</td>
                    <td>Komponen Tidak Sesuai</td>
                    <td>Total Kerusakan Balok</td>
                    <td>Tingkat Kerusakan Balok</td>
                    <td>Action</td>


                </tr>

                <tr>
                    <td><?= $balok->id_balok; ?></td>
                    <td><?= $balok->jumlah_unit; ?></td>
                    <td><?= $balok->tidak_rusak; ?></td>
                    <td><?= $balok->rusak_sangat_ringan; ?></td>
                    <td><?= $balok->rusak_ringan; ?></td>
                    <td><?= $balok->rusak_sedang; ?></td>
                    <td><?= $balok->rusak_berat; ?></td>
                    <td><?= $balok->rusak_sangat_berat; ?></td>
                    <td><?= $balok->komponen_tidak_sesuai; ?></td>
                    <td><?= $balok->total_kerusakan_balok; ?></td>
                    <td><?= $balok->tingkat_kerusakan_balok; ?></td>

                    <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                    <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->


                    <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $balok->id_sekolah ?>">Kembali</a></td>
                </tr>


            </table>
        </div>
    </div>
</div>