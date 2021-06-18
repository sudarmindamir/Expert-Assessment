<table border="1">
    <thead>
        <tr>
            <td>Nama Sekolah</td>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($sekolah as $s) {
            //$sekolah mengambil dan harus sama dengan nama variabel yang ada pada controler
        ?>
            <tr>
                <td><?= $s->nama_sekolah; ?></td>
                <td> <a href="<?= base_url('C_Tampil/tampil_satu_sekolah/') . $s->id_sekolah ?>">Detail</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>