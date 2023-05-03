<nav class="main-header navbar navbar-expand navbar-deepskyblue navbar-light" style="
    background-color: deepskyblue;
">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <form action="<?= base_url('admin/search') ?>" class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Cari Produk" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-bell-fill"
      viewBox="0 0 16 16" style="left: 678px;position: relative;">
      <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
    </svg>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="
    position: absolute;
    left: 983px;
    top: -5px;">



      <div class="image">
        <img src="<?= base_url('assets/') ?>dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?= $this->session->name; ?>
        </a>
      </div>
    </div>
  </form>
</nav>
