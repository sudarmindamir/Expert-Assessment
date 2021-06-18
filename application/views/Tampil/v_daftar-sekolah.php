<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Sekolah</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($sekolah as $s) { ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $s->nama_sekolah ?></td>
                            <td><?= $s->alamat ?></td>



                            <td class="text-center">
                                <a href="<?= base_url('C_sekolah/detailSekolah/') . $s->id_sekolah ?>" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>