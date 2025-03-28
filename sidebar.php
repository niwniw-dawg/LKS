
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['level'];?></a>
        </div>
    </div>

    <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=data-siswa" class="nav-link active">
                  <p>Data Siswa</p>
                </a>
              </li>
        </ul>
        <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=data-guru" class="nav-link active">
                  <p>Data Guru</p>
                </a>
              </li>
        </ul>
        <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="logout.php" class="nav-link active">
                  <p>Logout</p>
                </a>
              </li>
        </ul>

      </nav>
    </div>
  </aside>