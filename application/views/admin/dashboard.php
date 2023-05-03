<!-- Navbar -->
<?php $this->load->view('module/navbar') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php $this->load->view('module/sidebar') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="
    background-color: deepskyblue;">

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
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
  <section class="content" style="
    background-color: deepskyblue;
">

    <!-- Default box -->
    <div class="container-fluid" style="background-color: deepskyblue;
">
      <div class="card-body">
        <div class="row">


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <p>
                  PEMBELIAN
                </p>
                <?php
                $purchases = $this->db->get('pembelian')->result();
                $total = 0;
                foreach($purchases as $p){
                  $total += $p->total;
                }
                ?>
                <h3><?= 'Rp. '.number_format($total) ?></h3>
              </div>
              <a href="<?= base_url('admin/purchases') ?>" class="small-box-footer">Lihat data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <p>
                  JUMLAH SUPPLIER
                </p>
                <?php
                $suppliers = $this->db->get('supplier')->result();
                $id = 0;
                foreach($suppliers as $p){
                  $id += $p->id;
                }
                ?>
                <h3><?= $id ?></h3>
              </div>
              <a href="<?= base_url('admin/suppliers') ?>" class="small-box-footer">Lihat data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <p>
                  STOK TERSEDIA
                </p>
                <?php
                $drugs = $this->db->get('obats')->result();
                $cdrugs = 0;
                foreach($drugs as $d){
                  $cdrugs += $d->jmlh_stok;
                }
                ?>
                <h3><?= $cdrugs ?></h3>

              </div>
              <a href="<?= base_url('admin/drugs') ?>" class="small-box-footer">Lihat data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <p>
                  STOK KADALUARSA
                </p>
                <?php
                $drugss = $this->db->get('obats')->result();
                $cdrugss = 0;
                foreach($drugss as $dd){
                  $cdrugss += $dd->tgl_kadaluarsa;
                }
                ?>
                <h3><?= $cdrugss ?></h3>
              </div>
              <a href="<?= base_url('admin/sales') ?>" class="small-box-footer">Lihat data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
  <section class="content" style="
    background-color: white;
">

    <!-- Default box -->
    <div class="container-fluid" style="background-color: white;
">
      <div class="card-body" style="
    top: -39px;
    position: relative;
">
      <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card" style="background-color: rgba(10,18,92,255);">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3" style="color: white;">Grafik Total Pembelian</h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item" style="position: relative;background-color: white;border-radius: 5px;left: -4px;"><a class="nav-link active" href="#tab_1" data-toggle="tab" style="color: black;font-weight: bold;">Bulanan</a></li>
                  <li class="nav-item" style="background-color: white; border-radius: 5px;"><a class="nav-link" href="#tab_2" data-toggle="tab" style="color: black;font-weight: bold;">Mingguan</a></li>

                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                  <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 487px;" width="487" height="250"></canvas>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <canvas id="lineChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 487px;" width="487" height="250" class="chartjs-render-monitor"></canvas>
                  </div>
                  <!-- /.tab-pane -->
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
  <!-- Custom tabs (Charts with tabs)-->

</div>
<!-- /.content-wrapper -->

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
<script>
  var ctx = document.getElementById("lineChart").getContext('2d');
		var lineChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober","November","Desember"],
				datasets: [{
					label: 'Jumlah',
					data: [10, 15, 19, 23, 27, 35,40,50,60,75,60,50],
					borderColor: ["#ffffff"],
					borderWidth: 3
				}]
			},
			options: {
    scales: {
      x: [{ 
                gridLines: {
                    display: false,
                },
                ticks: {
                  color: 'red' // this here
                },
            }],
    }
  }
		});
  var ctx = document.getElementById("lineChart2").getContext('2d');
		var lineChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"],
				datasets: [{
					label: 'Jumlah',
					data: [32, 36, 19, 43, 42, 50,40],
					borderColor: ["#ffffff"],
					borderWidth: 3
				}]
			},
			options: {
    scales: {
      xAxes: [{
        type: 'time'
      }]
    }
  }
		});
</script>

