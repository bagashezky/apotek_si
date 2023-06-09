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
          <h1>Pemasok</h1>
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
        <button class="btn btn-primary btn-flat btn-sm" data-toggle="modal" data-target="#addsupplier">Tambah</button>
        <br />
        <?= $this->session->flashdata("msg"); ?>
        <br />
        <table class="table table-bordered table-hover" id="table">
          <thead>
            <tr>
              <th>No.</th>
              <th>ID Supplier</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No. HP</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($suppliers as $s): ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $s->id_supplier ?></td>
              <td><?= $s->nama_supplier ?></td>
              <td><?= $s->alamat ?></td>
              <td><?= $s->no_telp ?></td>
              <td>
                <a href="#" class="badge badge-primary" data-toggle="modal" data-target="#editsupplier"
                data-id="<?= $s->id_supplier ?>"
                data-name="<?= $s->nama_supplier ?>"
                data-hp="<?= $s->no_telp ?>"
                data-address="<?= $s->alamat ?>">Ubah</a>
                <br />
                <a href="<?= base_url('admin/deletesupplier/'. $s->id); ?>" class="badge badge-danger" onclick="return confirm('Lanjutkan menghapus data?')">Hapus</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- MODAL ADD SUPPLIER -->
<div class="modal fade" id="addsupplier">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Supplier</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/addsupplier') ?>" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="id_supplier">ID Supplier</label>
            <?php 
            $last_row = $this->db->order_by('id', "desc")
            ->limit(1)
            ->get('supplier')
            ->row();
            $arrstr = str_split($last_row->id_supplier);
            $last = number_format($arrstr[2]);
            $laststr = "SP" . ($last + 1);
            ?>
                        <input type="text" class="form-control" name="id_supplier" id="id_supplier"
                            value="<?= $laststr; ?>" placeholder="Kode obat... " required>
          </div>
          <div class="form-group">
            <label for="nama_supplier">Nama</label>
            <input type="text" class="form-control" name="nama_supplier" id="nama_supplier" placeholder="Masukkan nama..." required>
          </div>
          <div class="form-group">
            <label for="phone">Nomor Telepon</label>
            <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan nomor telepon..." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
          </div>
          <div class="form-group">
            <label for="jumlah">Alamat</label>
            <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat... " class="form-control" required />
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- MODAL EDIT SUPPLIER -->
<div class="modal fade" id="editsupplier">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ubah Supplier</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/editsupplier') ?>" method="POST">
        <div class="modal-body">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="id_supplier">ID Supplier</label>
            <input type="text" class="form-control" name="id_supplier" id="id_supplier" placeholder="Masukkan nama..." required>
          </div>
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" id="editsuppliername" placeholder="Masukkan nama..." required>
          </div>
          <div class="form-group">
            <label for="phone">Nomor Telepon</label>
            <input type="text" name="phone" id="editsupplierphone" class="form-control" placeholder="Masukkan nomor telepon..." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="editsupplieraddress" placeholder="Masukkan alamat... " class="form-control" required />
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>