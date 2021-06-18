<table border="2">
    <thead>
        <tr>
            <td>ID Sekolah</td>
            <td>ID Atap</td>
            <td>ID Balok</td>
            <td>ID Dinding</td>
            <td>Total Kerusakan Dinding</td>
            <td>Total Kerusakan Lantai</td>
            <td>Tingkat Kerusakan Lantai</td>
            <td>Luas Bangunan</td>
            <td>Luas Total</td>
            <td>ID Pintu</td>
            <!-- <td>ID Pintu</td> -->



            <!-- <td></td> -->
            <!-- <td>ID Sekolah</td>
            <td>Action</td> -->
        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($relasi as $s) {
            //$relasi mengambil dan harus sama dengan nama variabel yang ada pada controler
        ?>
            <tr>
                <td><?= $s->id_sekolah; ?></td>
                <td><?= $s->id_atap; ?></td>
                <td><?= $s->id_balok; ?></td>
                <td><?= $s->id_dinding; ?></td>
                <td><?= $s->total_kerusakan_dinding; ?></td>
                <td><?= $s->total_kerusakan_lantai; ?></td>
                <td><?= $s->tingkat_kerusakan_lantai; ?></td>
                <td><?= $s->id_pintu; ?></td>
                <td><?= $s->luas_bangunan; ?></td>
                <td><?= $s->luas_total; ?></td>



                <!-- <td> <a href="<?= base_url('C_Tampil/tampil_detail_atap/') . $s->id_atap ?>">Detail</a></td> -->
                <!-- $s harus sama dengan yg di atas noooooooo yang di foreach karena di as kan -->
            </tr>
        <?php } ?>
    </tbody>
</table>