<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">


                <tr>
                    <td>id dinding</td>
                    <td>Klasifikasi Kerusakan</td>
                    <td>Tingkat Kerusakan Pondasi</td>
                    <td>Action</td>

                </tr>


                <tr>
                    <td><?= $pondasiini->id_pondasi; ?></td>
                    <td><?= $pondasiini->klasifikasi_kerusakan; ?></td>
                    <td><?= $pondasiini->tingkat_kerusakan_pondasi; ?></td>
                    <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
                    <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->
                    <td> <a class="btn btn-primary" href="<?= base_url('C_Sekolah/detailSekolah/') . $pondasiini->id_sekolah ?>">Kembali</a></td>
                </tr>



            </table>
        </div>
    </div>
</div>