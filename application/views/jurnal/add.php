<div class="container pt-5">
    <!-- Heading -->
    <div class="p-2 bg-light mb-3 border">
        <h1 class=""><?= $title ?></h1>
        <!-- Breadcrumb -->
        <nav class="d-flex">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a>Jurnal</a></li>
                <li class="breadcrumb-item "><a href="<?= base_url('jurnal'); ?>">List Data</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Data</li>
            </ol>
        </nav>
        <!-- Breadcrumb -->
    </div>
    <!-- Heading -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id_jurnal' => 'FrmAddJurnal', 'method' => "post", "autocomplete" => "off",);
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row mb-3">
                        <label for="judul" class="col-sm-2 col-form-label">judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" name="judul" value="<?= set_value('judul'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('jurnal') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="penulis" name="penulis" rows="3"><?= set_value('penulis'); ?></input>
                            <small class="text-danger">
                                <?php echo form_error('penulis') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= set_value('penerbit'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('penerbit') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                        <div class="col-sm-2
                        ">
                            <select class="form-select" id="tahun" name="tahun">
                                <option value="2022" selected disabled>Pilih</option>
                                <option value="2022" <?php if (set_value('tahun') == "2022") : echo "selected";
                                                        endif; ?>>2022</option>
                                <option value="2021" <?php if (set_value('tahun') == "2021") : echo "selected";
                                                            endif; ?>>2021</option>
                                <option value="2020" <?php if (set_value('tahun') == "2020") : echo "selected";
                                                        endif; ?>>2020</option>
                                <option value="2019" <?php if (set_value('tahun') == "2019") : echo "selected";
                                                        endif; ?>>2019</option>
                                <option value="2018" <?php if (set_value('tahun') == "2018") : echo "selected";
                                                        endif; ?>>2018</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('tahun') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row mb-3 ">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>