    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <div class="logo d-flex align-items-center">
          <img src="<?= BASEURL; ?>/img/login-logo.png" alt="d'laundry-logo">
          <span class="d-none d-lg-block">D'Laundry</span>
        </div>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
              <i class="bi bi-search"></i>
            </a>
          </li><!-- End Search Icon-->

          <li class="nav-item dropdown pe-3">

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6>Kevin Anderson</h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>

            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->

        </ul>
      </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= BASEURL; ?>/DashboardPemilik">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " href="<?= BASEURL; ?>/DashboardPemilik/tambah_akun_page">
          <i class="bi bi-person"></i>
          <span>Tambah Akun</span>
        </a>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= BASEURL; ?>/DashboardPemilik/tambah_pegawai_page">
          <i class="bi bi-person"></i>
          <span>Tambah Pegawai</span>
        </a>
      </li><!-- End Dashboard Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="<?= BASEURL; ?>/DashboardPemilik/tambah_outlet_page">
          <i class="bi bi-building"></i>
          <span>Tambah Outlet</span>
        </a>

        <li class="nav-item">
        <a class="nav-link collapsed" href="<?= BASEURL; ?>/DashboardPemilik/tambah_harga_laundry_page">
          <i class="bi bi-cash-stack"></i>
          <span>Tambah Harga Laundry</span>
        </a>

        
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" confirm="Are you sure?" href="login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Logout Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Tambah Akun</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Tambah Akun</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">

              <!-- Multi Columns Form -->
              <form class="row g-3" method="post" action="<?= BASEURL;?>/dashboardpemilik/tambah_akun">
              <div class="col-md-12">
                  <label for="inputUsername" class="form-label">Username</label>
                  <input type="text" class="form-control" name="inputUsername" id="inputUsername">
                </div>
                <div class="col-md-12">
                  <label for="inputPass" class="form-label">Password</label>
                  <input type="text" class="form-control" name="inputPass" id="inputPass">
                </div> 
                <div class="col-12">
                  <label for="inputIdAkun" class="form-label">Id Akun</label>
                  <input type="text" class="form-control" name="inputIdAkun" id="inputIdAkun">
                </div>
                <div class="col-md-12">
                  <label for="inputStatusAkun" class="form-label">Status</label>
                  <input type="text" class="form-control" name="inputStatusAkun" id="inputStatusAkun" placeholder="Pegawai/Pemilik dengan huruf besar diawal">
                </div> 
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
              
            </div>
          </div><!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">

          </div><!-- End Right side columns -->

        </div>
      </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

