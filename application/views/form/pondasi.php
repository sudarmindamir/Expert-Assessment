<div role="tabpanel" class="tab-pane" id="pondasi">
            <div class="container mt-5 ml-3">
                <!-- <img width="500" src="<?= base_url('assets/img/balok1.jpg') ?>"> -->
                <form action="<?= base_url('C_Sekolah/terimaDataPondasi') ?>" method="POST">
                    
                        <div class="mb-3 form-check">
                        <input type="hidden" value="<?= $id_sekolah ?>"  name="id_sekolah">
                            <input type="radio" value="0" class="form-check-input" name="pondasi">
                            <label class="form-check-label" for="exampleCheck1"> Pondasi diindikasikan dalam kondisi baik

                            </label>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="radio" value="0.2" class="form-check-input" name="pondasi">
                            <label class="form-check-label" for="exampleCheck1">
                                Penurunan merata pada seluruh struktur
                                bangunan
                            </label>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="radio" value="0.35" class="form-check-input" name="pondasi">
                            <label class="form-check-label" for="exampleCheck1"> Penurunan tidak merata namun perbedaan
                                penurunan tidak melebihi 1/250 L
                            </label>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="radio" value="0.5" class="form-check-input" name="pondasi">
                            <label class="form-check-label" for="exampleCheck1"> Penurunan > 1/250 L sehingga
                                menimbulkan kerusakan atasnya.
                                Tanah
                                disekeliling bangunan naik
                            </label>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="radio" value="0.7" class="form-check-input" name="pondasi">
                            <label class="form-check-label" for="exampleCheck1"> • Bangunan miring secara kasat mata
                                • Lantai dasar naik/menggelembung
                            </label>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="radio" value="0.85" class="form-check-input" name="pondasi">
                            <label class="form-check-label" for="exampleCheck1"> Pondasi patah, bergeser akibat longsor,
                                struktur atas menjadi rusak
                            </label>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="radio" value="1" class="form-check-input" name="pondasi">
                            <label class="form-check-label" for="exampleCheck1">Material Dimensi dan kontruksi pondasi diindikasikan tidak sesuai dengan persyaratan teknis merujuk pada rencana teknis apabila ada petunjuk teknis dan/atau SNI</label>
                        </div>


                        <a href="#kolom"> <button type="submit" class="btn btn-primary">Submit</button></a>

                    
                </form>
            </div>
        </div>