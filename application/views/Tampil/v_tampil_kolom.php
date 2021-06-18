<table border="1">
    <thead>
        <tr>
            <td>Tingkat Kerusakan Kolom</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($kolom as $s) {
            //$sekolah mengambil dan harus sama dengan nama variabel yang ada pada controler
        ?>
            <tr>
                <td><?= $s->tingkat_kerusakan_kolom; ?></td>
                <td> <a href="<?= base_url('C_Tampil/tampil_detail_kolom/') . $s->id_kolom ?>">Detail</a></td>
                <!-- $s harus sama dengan yg di atas noooooooo yang di foreach karena di as kan -->
            </tr>
        <?php } ?>
    </tbody>
</table>