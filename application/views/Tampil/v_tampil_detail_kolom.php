<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">

                <tr>
                    <td>id Kolom</td>
                    <td>Jumlah Unit</td>
                    <td>Tidak Rusak</td>
                    <td>Rusak Sangat Ringan</td>
                    <td>Rusak Ringan</td>
                    <td>Rusak Sedang</td>
                    <td>Rusak Berat</td>
                    <td>Rusak Sangat Berat</td>
                    <td>Komponen Tidak Sesuai</td>
                    <td>Total Kerusakan Kolom</td>
                    <td>Tingkat Kerusakan Kolom</td>
                    <td>Action</td>


                </tr>

                <tr>
                    <td><?= $kolom->id_kolom; ?></td>
                    <td><?= $kolom->jumlah_unit; ?></td>
                    <td><?= $kolom->tidak_rusak; ?></td>
                    <td><?= $kolom->rusak_sangat_ringan; ?></td>
                    <td><?= $kolom->rusak_ringan; ?></td>
                    <td><?= $kolom->rusak_sedang; ?></td>
                    <td><?= $kolom->rusak_berat; ?></td>
                    <td><?= $kolom->rusak_sangat_berat; ?></td>
                    <td><?= $kolom->komponen_tidak_sesuai; ?></td>
                    <td><?= $kolom->total_kerusakan_kolom; ?></td>
                    <td><?= $kolom->tingkat_kerusakan_kolom; ?></td>

                    <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                    <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->


                    <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $kolom->id_sekolah ?>">Kembali</a></td>


                </tr>


            </table>
        </div>
    </div>
</div>