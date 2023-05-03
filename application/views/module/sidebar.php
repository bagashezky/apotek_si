<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-white-primary elevation-4">
  <!-- Brand Logo -->
  <span class="brand-text font-weight-light" style="
    position: relative;
    top: 39px;
    left: 34px;
    color: deepskyblue;
    font-size: xx-large;
">Apotek Milan</span>

  <!-- Sidebar -->
  <div class="sidebar" style="
    top: 49px;
    position: relative;
">
    <!-- Sidebar user panel (optional) -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">UTAMA</li>
        <li class="nav-item">
          <a href="<?= base_url('admin') ?>"
            class="nav-link <?= current_url() === base_url('admin') ? 'active' : null ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li
          class="nav-item has-treeview <?= current_url() === base_url('admin/obat') || current_url() === base_url('admin/units') || current_url() === base_url('admin/sales') || current_url() === base_url('admin/suppliers') ? 'menu-open' : null ?>">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Master Data
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/obat') ?>"
                class="nav-link <?= current_url() === base_url('admin/obat') ? 'active' : null ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Obat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/kategori') ?>"
                class="nav-link <?= current_url() === base_url('admin/kategori') ? 'active' : null ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Kategori Obat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/units') ?>"
                class="nav-link <?= current_url() === base_url('admin/units') ? 'active' : null ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Jenis Obat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/suppliers') ?>"
                class="nav-link <?= current_url() === base_url('admin/suppliers') ? 'active' : null ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Supplier</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/coa') ?>"
                class="nav-link <?= current_url() === base_url('admin/coa') ? 'active' : null ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>COA</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview <?= current_url() === base_url('admin/purchases') ? 'menu-open' : null ?>">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Transaksi
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/purchases') ?>"
                class="nav-link <?= current_url() === base_url('admin/purchases') ? 'active' : null ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Pembelian</p>
              </a>
            </li>
          </ul>
        </li>
        <li
          class="nav-item has-treeview <?= current_url() === base_url('admin/sales') ? 'menu-open' : null ?>">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Data Master
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
          
            <li class="nav-item">
              <a href="<?= base_url('admin/sales') ?>"
                class="nav-link <?= current_url() === base_url('admin/sales') ? 'active' : null ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Penjualan</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-pdf"></i>
            <p>
              Laporan
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/drug_report') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Obat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/purchase_report') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pembelian</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/sale_report') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Penjualan</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">MENU</li>
        <li class="nav-item">
          <a href="<?= base_url('auth/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Keluar
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>