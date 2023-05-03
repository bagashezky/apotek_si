<!-- Navbar -->
<?php $this->load->view('module/navbar') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php $this->load->view('module/sidebar') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kategori Obat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">
                            <?= $bc ?>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel</h3>
            </div>
            <div class="card-body">
                <button class="btn btn-primary btn-sm btn-flat" data-toggle="modal"
                    data-target="#addunit">Tambah</button>
                <br />
                <?= $this->session->flashdata("msg"); ?>
                <br />
                <table class="table table-bordered table-hover " id="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID Kategori</th>
                            <th>Kode obat</th>
                            <th>Nama Obat</th>
                            <th>Kategori Obat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kategori as $s):
                            ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $s->id_kategori_obat; ?>
                                </td>
                                <td>
                                    <?= $s->kode_obat; ?>
                                </td>
                                <td>
                                    <?= $s->nama_obat; ?>
                                </td>
                                <td>
                                    <?= $s->nama_kategori_obat; ?>
                                </td>
                                <td>
              <a href="#" class="badge badge-primary" data-toggle="modal" data-target="#editkategori"
              data-id-kategori-obat="<?= $s->id_kategori_obat ?>"
              data-nama-kategori-obat="<?= $s->nama_kategori_obat ?>">Ubah</a>
              &nbsp;
              <a href="<?= base_url("admin/deletekategori/". $s->id_kategori_obat) ?>" onclick="return confirm('Lanjutkan menghapus data?')" class="badge badge-danger">Hapus</a>
            </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="addunit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url("admin/addkategori") ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_kategori_obat">ID KATEGORI OBAT</label>
                        <?php
                        $last_row = $this->db->order_by('id', "desc")
                            ->limit(1)
                            ->get('kategori_obat')
                            ->row();
                        $arrstr = str_split($last_row->kode_obat);
                        $last = number_format($arrstr[2]);
                        $laststr = "KAT" . ($last + 1);
                        ?>
                        <input type="text" class="form-control" name="id_kategori_obat" id="id_kategori_obat"
                            value="<?= $laststr; ?>" placeholder="Kode obat... " required>
                    </div>
                    <div class="form-group">
                        <label for="kode_obat">Obat</label>
                        <select name="kode_obat" id="id_obat" class="form-control" required>
                            <option value="">-- KODE OBAT --</option>
                            <?php
                            $obat = $this->db->get("obats")->result(); foreach ($obat as $o):
                                ?>
                                <option value="<?= $o->kode_obat ?>"> <?= $o->kode_obat . " - " . $o->nama_obat; ?>
                                <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_kategori_obat">Kategori Obat</label>
                        <input type="text" class="form-control" name="nama_kategori_obat" id="nama_kategori_obat"
                            placeholder="Masukkan nama... ">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" id="btneditunit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal edit unit -->
<div class="modal fade" id="editkategori">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/editkategori') ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id_kategori_obat" id="id_kategori_obat">
                    <div class="form-group">
                        <label for="id_kategori_obat">ID KATEGORI OBAT</label>
                        <input type="text" class="form-control" name="id_kategori_obat" id="id_kategori_obat"
                            value="<?= $laststr; ?>" placeholder="Kode obat... " required>
                    </div>
                    <div class="form-group">
                        <label for="kode_obat">Obat</label>
                        <select name="kode_obat" id="id_obat" class="form-control" required>
                            <option value="">-- KODE OBAT --</option>
                            <?php
                            $obat = $this->db->get("obats")->result(); foreach ($obat as $o):
                                ?>
                                <option value="<?= $o->kode_obat ?>"> <?= $o->kode_obat . " - " . $o->nama_obat; ?>
                                <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_kategori_obat">Kategori Obat</label>
                        <input type="text" class="form-control" name="nama_kategori_obat" id="nama_kategori_obat"
                            placeholder="Masukkan nama... ">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" id="btneditunit" class="btn btn-primary">Ubah</button>
                    </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>