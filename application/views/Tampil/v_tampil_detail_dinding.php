<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">


                <tr>
                    <td>id dinding</td>
                    <td>Luas Total</td>

                    <td>Tidak Rusak</td>
                    <td>Rusak Sangat Ringan</td>
                    <td>Rusak Ringan</td>
                    <td>Rusak Sedang</td>
                    <td>Rusak Berat</td>
                    <td>Rusak Sangat Berat</td>
                    <td>Komponen Tidak Sesuai</td>
                    <td>Total Kerusakan dinding</td>
                    <td>Tingkat Kerusakan dinding</td>
                    <td>Action</td>


                </tr>

                <tr>
                    <td><?= $dinding->id_dinding; ?></td>
                    <td><?= $dinding->luas_total; ?></td>
                    <!-- <td><?= $dinding->luas_B; ?></td> -->
                    <td><?= $dinding->tidak_rusak; ?></td>
                    <td><?= $dinding->rusak_sangat_ringan; ?></td>
                    <td><?= $dinding->rusak_ringan; ?></td>
                    <td><?= $dinding->rusak_sedang; ?></td>
                    <td><?= $dinding->rusak_berat; ?></td>
                    <td><?= $dinding->rusak_sangat_berat; ?></td>
                    <td><?= $dinding->komponen_tidak_sesuai; ?></td>
                    <td><?= $dinding->total_kerusakan_dinding; ?></td>
                    <td><?= $dinding->tingkat_kerusakan_dinding; ?></td>

                    <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                    <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->


                    <!-- <td> <a href="<?= base_url('C_Tampil/tampil_dinding/') . $dinding->id_dinding ?>">Kembali</a></td> -->
                    <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $dinding->id_sekolah ?>">Kembali</a></td>


                </tr>
            </table>
        </div>
    </div>
</div>