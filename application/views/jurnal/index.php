
<div class="container pt-5 mb-3">
    <?php if ($this->session->flashdata('login')) :
        echo $this->session->flashdata('login');
        endif; ?>
    <!-- Heading -->
    <div class="p-2 bg-light mb-3 border rounded">
        <h1 class=""><?= $title ?></h1>
        <!-- Breadcrumb -->
        <nav class="d-flex">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a>Jurnal</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Data</li>
            </ol>
        </nav>
        <!-- Breadcrumb -->
    </div>
    <!-- Heading -->

    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mb-3 font-weight-bold" href="<?= base_url('jurnal/add'); ?>">TAMBAH JURNAL</a>
            <div mb-2>
                <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                <?php if ($this->session->flashdata('message')) :
                    echo $this->session->flashdata('message');
                endif; ?>
            </div>

            <div class="table-responsive rounded">
                <table class="table table-striped table-bordered table-hover" id="tableJurnal">
                    <thead>
                        <tr class="table-warning">
                            <th>JUDUL</th>
                            <th>PENULIS</th>
                            <th>PENERBIT</th>
                            <th>TAHUN</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data_jurnal as $row) : ?>
                            <tr>
                                <td><?= $row->judul ?></td>
                                <td><?= $row->penulis ?></td>
                                <td><?= $row->penerbit ?></td>
                                <td><?= $row->tahun ?></td>
                                <td>
                                    <a href="<?= site_url('jurnal/edit/' . $row->id_jurnal) ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> </a>
                                    <a href="<?= site_url('jurnal/delete/' . $row->id_jurnal) ?>" data="<?= $row->id_jurnal ?>" class="btn btn-danger btn-sm item-delete"><i class="bi bi-trash"></i> </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>            
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 4000);
    });  
</script>