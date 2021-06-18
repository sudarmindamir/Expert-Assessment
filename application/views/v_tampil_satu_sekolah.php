<table border="1">
    <thead>
        <tr>
            <td>id sekolah</td>
            <td>nama Sekolah</td>
            <td>Alamat Sekolah</td>
            <td>Kabupaten</td>
            <td>Luas</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $sekolah->id_sekolah; ?></td>
            <!-- <td><?= $sekolah->id_sekolah; ?></td> -->
            <td><?= $sekolah->nama_sekolah; ?></td>
            <td><?= $sekolah->alamat; ?></td>
            <td><?= $sekolah->kabupaten; ?></td>
            <td><?= $sekolah->luas_bangunan; ?></td>


            <td> <a href="<?= base_url('C_Tampil/index/') . $sekolah->id_sekolah ?>">Kembali</a></td>
        </tr>
    </tbody>
</table>