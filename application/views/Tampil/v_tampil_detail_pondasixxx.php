<table border="1">
    <thead>
        <tr>
            <td>id dinding</td>
            <td>Klasifikasi Kerusakan</td>
            <td>Tingkat Kerusakan Pondasi</td>
            <td>Action</td>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $pondasiini->id_pondasi; ?></td>
            <td><?= $pondasiini->klasifikasi_kerusakan; ?></td>
            <td><?= $pondasiini->tingkat_kerusakan_pondasi; ?></td>
            <!-- $pondasiini didapat dari nama variabel array yang ada di controllernya liat yg di bawah -->
            <!-- $data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where); -->
            <td> <a href="<?= base_url('C_Sekolah/detailSekolah/') . $pondasiini->id_sekolah ?>">Kembali</a></td>

        </tr>
    </tbody>
</table>