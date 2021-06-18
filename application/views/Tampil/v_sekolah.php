<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">

                <!-- Pondasi -->
                <tr>
                    <th scope="row">1</th>
                    <td>Pondasi dan Sloof</td>
                    <td><?php if (!empty($pondasi->tingkat_kerusakan_pondasi)) {
                            if ($pondasi->tingkat_kerusakan_pondasi <= 0.3) {
                                echo "Rusak Ringan";
                            } elseif ($pondasi->tingkat_kerusakan_pondasi <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($pondasi->tingkat_kerusakan_pondasi > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $pondasi->tingkat_kerusakan_pondasi .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?>
                    </td>
                    <td class="text-center">
                        <?php if (!empty($pondasi)) { ?>
                            <a href="  <?= base_url('C_tampil/tampil_detail_pondasi/') . $pondasi->id_sekolah ?>" target='_blank' class="btn btn-primary">Detail</a>
                            <!-- <a href="<?= base_url('C_Edit/editPondasi/') . $pondasi->id_pondasi ?>" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>Pondasi belum diinput</p>
                            <a href=" <?= base_url('C_Form/pondasi/') . $sekolah->id_sekolah ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>

                <!-- Kolom -->
                <tr>
                    <th scope="row">2</th>
                    <td>Kolom</td>
                    <td><?php if (!empty($kolom->tingkat_kerusakan_kolom)) {
                            if ($kolom->tingkat_kerusakan_kolom <= 0.3) {
                                echo "Rusak Ringan";
                            } elseif ($kolom->tingkat_kerusakan_kolom <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($kolom->tingkat_kerusakan_kolom > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $kolom->tingkat_kerusakan_kolom .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?></td>
                    <td class="text-center">
                        <?php if (!empty($kolom)) { ?>
                            <a href=" <?= base_url('C_tampil/tampil_detail_kolom/') . $kolom->id_sekolah ?> " target='_blank' class="btn btn-primary">Detail</a>
                            <!-- <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>Kolom belum diinput</p>
                            <a href=" <?= base_url('C_Form/kolom/') . $sekolah->id_sekolah  ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>

                <!-- Balok -->
                <tr>
                    <th scope="row">3</th>
                    <td>Balok</td>
                    <td><?php if (!empty($balok->tingkat_kerusakan_balok)) {
                            if ($balok->tingkat_kerusakan_balok <= 0.3) {
                                echo "Rusak Ringan";
                            } elseif ($balok->tingkat_kerusakan_balok <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($balok->tingkat_kerusakan_balok > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $balok->tingkat_kerusakan_balok .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?>
                    </td>
                    <td class="text-center">
                        <?php if (!empty($balok)) { ?>
                            <a href=" <?= base_url('C_tampil/tampil_detail_balok/') . $balok->id_sekolah ?> " target='_blank' class="btn btn-primary">Detail</a>
                            <!-- <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>Balok belum diinput</p>
                            <a href=" <?= base_url('C_Form/balok/') . $sekolah->id_sekolah  ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>

                <!-- Atap -->
                <tr>
                    <th scope="row">4</th>
                    <td>Atap</td>
                    <td><?php if (!empty($atap->tingkat_kerusakan_atap)) {
                            if ($atap->tingkat_kerusakan_atap <= 0.3) {
                                echo "Rusak Ringan";
                            } elseif ($atap->tingkat_kerusakan_atap <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($atap->tingkat_kerusakan_atap > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $atap->tingkat_kerusakan_atap .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?>
                    </td>
                    <td class="text-center">
                        <?php if (!empty($atap)) { ?>
                            <a href=" <?= base_url('C_tampil/tampil_detail_atap/') . $atap->id_sekolah ?> " target='_blank' class="btn btn-primary">Detail</a>
                            <!-- <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>Atap belum diinput</p>
                            <a href=" <?= base_url('C_Form/atap/') . $sekolah->id_sekolah  ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>
                <!-- Dinding-->
                <tr>
                    <th scope="row">5</th>
                    <td>Dinding</td>
                    <td><?php if (!empty($dinding->tingkat_kerusakan_dinding)) {
                            if ($dinding->tingkat_kerusakan_dinding <= 0.3) {
                                echo "Rusak Ringan";
                            } elseif ($dinding->tingkat_kerusakan_dinding <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($dinding->tingkat_kerusakan_dinding > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $dinding->tingkat_kerusakan_dinding .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?>
                    </td>
                    <td class="text-center">
                        <?php if (!empty($dinding)) { ?>
                            <a href="  <?= base_url('C_tampil/tampil_detail_dinding/') . $dinding->id_sekolah ?>" target='_blank' class="btn btn-primary">Detail</a>
                            <!-- <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>Dinding belum diinput</p>
                            <a href=" <?= base_url('C_Form/dinding/') . $sekolah->id_sekolah  ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>


                <!-- plafond-->
                <tr>
                    <th scope="row">6</th>
                    <td>Plafond</td>
                    <td><?php if (!empty($plafond->tingkat_kerusakan_plafond)) {
                            if ($plafond->tingkat_kerusakan_plafond <= 0.3) {
                                echo "Rusak Ringan";
                            } elseif ($plafond->tingkat_kerusakan_plafond <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($plafond->tingkat_kerusakan_plafond > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $plafond->tingkat_kerusakan_plafond .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?>
                    </td>
                    <td class="text-center">
                        <?php if (!empty($plafond)) { ?>
                            <!-- <a href="" class="btn btn-primary">Detail</a> -->
                            <a href="  <?= base_url('C_tampil/tampil_detail_plafond/') . $plafond->id_sekolah ?>" target='_blank' class="btn btn-primary">Detail</a>

                            <!-- <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>Plafond belum diinput</p>
                            <a href=" <?= base_url('C_Form/plafond/') . $sekolah->id_sekolah ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                    <!-- <td class="text-center">
                        <?php if (!empty($plafond)) { ?>
                            <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Edit</a>
                        <?php } else { ?>
                            <p>Plafond belum diinput</p>
                            <a href=" <?= base_url('C_Form/plafond/')  ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td> -->
                </tr>

                <!--lantai-->
                <tr>
                    <th scope="row">7</th>
                    <td>Lantai</td>
                    <td><?php if (!empty($lantai->tingkat_kerusakan_lantai)) {
                            if ($lantai->tingkat_kerusakan_lantai <= 0.3) {
                                echo "Rusak Ringan";
                            } elseif ($lantai->tingkat_kerusakan_lantai <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($lantai->tingkat_kerusakan_lantai > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $lantai->tingkat_kerusakan_lantai .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?></td>
                    <td class="text-center">
                        <?php if (!empty($lantai)) { ?>
                            <a href="  <?= base_url('C_tampil/tampil_detail_lantai/') . $lantai->id_sekolah ?>" target='_blank' class="btn btn-primary">Detail</a>

                            <!-- <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>Lantai belum diinput</p>
                            <a href=" <?= base_url('C_Form/lantai/') . $sekolah->id_sekolah ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>

                <!--Kusen-->
                <tr>
                    <th scope="row">8</th>
                    <td>Kusen</td>
                    <td><?php if (!empty($kusen->tingkat_kerusakan_kusen)) {
                            if ($kusen->tingkat_kerusakan_kusen <= 0.3) {
                                echo "Rusak Ringan";
                            } elseif ($kusen->tingkat_kerusakan_kusen <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($kusen->tingkat_kerusakan_kusen > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $kusen->tingkat_kerusakan_kusen .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?></td>
                    <td class="text-center">
                        <?php if (!empty($kusen)) { ?>
                            <a href="  <?= base_url('C_tampil/tampil_detail_kusen/') . $kusen->id_sekolah ?>" target='_blank' class="btn btn-primary">Detail</a>

                            <!-- <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>Kusen belum diinput</p>
                            <a href=" <?= base_url('C_Form/kusen/') . $sekolah->id_sekolah ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>


                <!--pintu-->
                <tr>
                    <th scope="row">9</th>
                    <td>Pintu</td>
                    <td><?php if (!empty($pintu->tingkat_kerusakan_pintu)) {
                            if ($pintu->tingkat_kerusakan_pintu <= 0.3) {
                                echo "Rusak Ringan";
                            } elseif ($pintu->tingkat_kerusakan_pintu <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($pintu->tingkat_kerusakan_pintu > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $pintu->tingkat_kerusakan_pintu .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?></td>
                    <td class="text-center">
                        <?php if (!empty($pintu)) { ?>
                            <a href="  <?= base_url('C_tampil/tampil_detail_pintu/') . $pintu->id_sekolah ?>" target='_blank' class="btn btn-primary">Detail</a>

                            <!-- <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>Pintu belum diinput</p>
                            <a href=" <?= base_url('C_Form/pintu/') . $sekolah->id_sekolah  ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>

                <!--Jendela-->
                <tr>
                    <th scope="row">10</th>
                    <td>Jendela</td>
                    <td><?php if (!empty($jendela->tingkat_kerusakan_jendela)) {
                            if ($jendela->tingkat_kerusakan_jendela <= 0.3) {
                                echo "Rusak Ringan";
                            } elseif ($jendela->tingkat_kerusakan_jendela <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($jendela->tingkat_kerusakan_jendela > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $jendela->tingkat_kerusakan_jendela .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?></td>
                    <td class="text-center">
                        <?php if (!empty($jendela)) { ?>
                            <a href="  <?= base_url('C_tampil/tampil_detail_jendela/') . $jendela->id_sekolah ?>" target='_blank' class="btn btn-primary">Detail</a>

                            <!-- <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>Jendela belum diinput</p>
                            <a href=" <?= base_url('C_Form/jendela/') . $sekolah->id_sekolah ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>

                <!--finishinplafond-->
                <tr>
                    <th scope="row">11</th>
                    <td>Finishing plafond</td>
                    <td><?php if (!empty($finishingplafond->tingkat_kerusakan_finishing_plafond)) {
                            if ($finishingplafond->tingkat_kerusakan_finishing_plafond <= 0.3)
                            // if ($finishingplafond->nama field di database <= 0.3)
                            {
                                echo "Rusak Ringan";
                            } elseif ($finishingplafond->tingkat_kerusakan_finishing_plafond <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($finishingplafond->tingkat_kerusakan_finishing_plafond > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $finishingplafond->tingkat_kerusakan_finishing_plafond .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?></td>
                    <td class="text-center">
                        <?php if (!empty($finishingplafond)) { ?>

                            <a href="  <?= base_url('C_tampil/tampil_detail_fplafond/') . $finishingplafond->id_sekolah ?>" target='_blank' class="btn btn-primary">Detail</a>

                            <!-- <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>finishing plafond belum diinput</p>
                            <a href=" <?= base_url('C_Form/finishinplafond/') . $sekolah->id_sekolah  ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>


                <!--finishindinding-->
                <tr>
                    <th scope="row">12</th>
                    <td>finishing dinding</td>
                    <td><?php if (!empty($finishingdinding->tingkat_kerusakan_finishing_dinding)) {
                            if ($finishingdinding->tingkat_kerusakan_finishing_dinding <= 0.3)
                            // if ($finishingplafond->nama field di database <= 0.3)
                            {
                                echo "Rusak Ringan";
                            } elseif ($finishingdinding->tingkat_kerusakan_finishing_dinding <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($finishingdinding->tingkat_kerusakan_finishing_dinding > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $finishingdinding->tingkat_kerusakan_finishing_dinding .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?></td>
                    <td class="text-center">
                        <?php if (!empty($finishingdinding)) { ?>
                            <a href="  <?= base_url('C_tampil/tampil_detail_fdinding/') . $finishingdinding->id_sekolah ?>" target='_blank' class="btn btn-primary">Detail</a>

                            <!-- <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>finishing dinding belum diinput</p>
                            <a href=" <?= base_url('C_Form/finishingdinding/') .  $sekolah->id_sekolah ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>


                <!--finishingkusen-->
                <tr>
                    <th scope="row">13</th>
                    <td>finishing kusen</td>
                    <td><?php if (!empty($finishingkusen->tingkat_kerusakan_finishing_kusen)) {
                            if ($finishingdinding->tingkat_kerusakan_finishing_dinding <= 0.3)
                            // if ($finishingplafond->nama field di database <= 0.3)
                            {
                                echo "Rusak Ringan";
                            } elseif ($finishingkusen->tingkat_kerusakan_finishing_kusen <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($finishingkusen->tingkat_kerusakan_finishing_kusen > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $finishingkusen->tingkat_kerusakan_finishing_kusen .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?></td>
                    <td class="text-center">
                        <?php if (!empty($finishingkusen)) { ?>
                            <a href="  <?= base_url('C_tampil/tampil_detail_fkusen/') . $finishingkusen->id_sekolah ?>" target='_blank' class="btn btn-primary">Detail</a>

                            <!-- <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>finishing kusen belum diinput</p>
                            <a href=" <?= base_url('C_Form/finishingkusen/')  .  $sekolah->id_sekolah ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>


                <!--instalasilistrik-->
                <tr>
                    <th scope="row">14</th>
                    <td>instalasi listrik</td>
                    <td><?php if (!empty($instalasilistrik->tingkat_kerusakan_instalasi_listrik)) {
                            if ($instalasilistrik->tingkat_kerusakan_instalasi_listrik <= 0.3)
                            // if ($finishingplafond->nama field di database <= 0.3)
                            {
                                echo "Rusak Ringan";
                            } elseif ($instalasilistrik->tingkat_kerusakan_instalasi_listrik <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($instalasilistrik->tingkat_kerusakan_instalasi_listrik > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $instalasilistrik->tingkat_kerusakan_instalasi_listrik .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?></td>
                    <td class="text-center">
                        <?php if (!empty($instalasilistrik)) { ?>
                            <a href="  <?= base_url('C_tampil/tampil_detail_instalasi_listrik/') . $instalasilistrik->id_sekolah ?>" target='_blank' class="btn btn-primary">Detail</a>

                            <!-- <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>Instalasi listrik belum diinput</p>
                            <a href=" <?= base_url('C_Form/instalasilistrik/')  .  $sekolah->id_sekolah ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>

                <!--instalasiair-->
                <tr>
                    <th scope="row">15</th>
                    <td>instalasi air</td>
                    <td><?php if (!empty($instalasiair->tingkat_kerusakan_instalasi_air)) {
                            if ($instalasiair->tingkat_kerusakan_instalasi_air <= 0.3)
                            // if ($finishingplafond->nama field di database <= 0.3)
                            {
                                echo "Rusak Ringan";
                            } elseif ($instalasiair->tingkat_kerusakan_instalasi_air <= 0.45) {
                                echo "Rusak Sedang";
                            } elseif ($instalasiair->tingkat_kerusakan_instalasi_air > 0.45) {
                                echo "Rusak Berat";
                            }
                            echo " (" . $instalasiair->tingkat_kerusakan_instalasi_air .  ")";
                        } else {
                            echo "Masih Kosong";
                        } ?></td>
                    <td class="text-center">
                        <?php if (!empty($instalasiair)) { ?>
                            <a href="  <?= base_url('C_tampil/tampil_detail_instalasi_air/') . $instalasiair->id_sekolah ?>" target='_blank' class="btn btn-primary">Detail</a>

                            <!-- <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Edit</a> -->
                        <?php } else { ?>
                            <p>Instalasi air belum diinput</p>
                            <a href=" <?= base_url('C_Form/instalasiair/') .  $sekolah->id_sekolah  ?>" target='_blank' class="btn btn-success">Input Sekarang</a>
                        <?php } ?>
                    </td>
                </tr>

                <!--=============== yang bener================================ -->
                <!-- <tr>
                    <th scope="row">17</th>
                    <td> <strong>Kesimpulan</strong> </td>
                    <td><?= $totalAkumulasi ?></td>
                    <td class="text-center">

                    </td>
                </tr> -->


                <!-- Experiment -->
                <tr>
                    <th scope="row">16</th>
                    <td> <strong>Kesimpulan</strong> </td>
                    <td>
                        <?php if (!empty($totalAkumulasi)) {
                            if ($totalAkumulasi <= 0.3) {
                                echo "<strong>Rusak Ringan</strong>";
                            } elseif ($totalAkumulasi <= 0.45) {
                                echo "<strong>Rusak Sedang</strong>";
                            } elseif ($totalAkumulasi > 0.45) {
                                echo "<strong>Rusak Berat</strong>";
                            }
                            echo " (" . $totalAkumulasi .  ")";
                        } else {
                            echo "<strong>Belum Lengkap</strong>";
                        }
                        ?>
                    </td>


                    <td>
                        <?= "<strong>Estimasi Kerugian Rp. </strong>" . $totalAkumulasi * 2321000 * $luas_bangunan->luas_bangunan ?>
                    </td>


                    <td class="text-center">

                    </td>
                </tr>


            </table>
        </div>
    </div>
</div>