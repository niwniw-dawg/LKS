<section class="content">
      <?php
      $siswa = mysqli_query($koneksi, "select * from siswa ORDER BY id DESC");
      $guru = mysqli_query($koneksi, "select * from guru ORDER BY id DESC");
      include('koneksi.php');

      if($_SESSION['level'] == 'Admin'){ ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
              </div>
                      
              <div class="card-body">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-siswa">
                  Tambah Data Siswa
                </button>
                <br></br>

                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Gender</th>
                    <th>Angkatan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                  while($user_data = mysqli_fetch_array(result: $siswa)) {         
                  echo "<tr>";
                  echo "<td>".$user_data['id_user']."</td>";
                  echo "<td>".$user_data['nama']."</td>";
                  echo "<td>".$user_data['kelas']."</td>";    
                  echo "<td>".$user_data['gender']."</td>";    
                  echo "<td>".$user_data['angkatan']."</td>";
                  echo "<td><a href='edits.php?page=edit&& id=$user_data[id]' class='btn btn-sm btn-success'>Edit</a> <a onclick='hapuss($user_data[id])' class='btn btn-sm btn-danger'>Delete</a></td></tr>";        
                 }
                   ?>
                  </tfoot>
                </table>
              </div>
            </div>
            </div>
          </div>
        </div>

      <?php
      } else if($_SESSION['level'] == 'Guru'){ ?>
            <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
              </div>
                      
              <div class="card-body">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-siswa">
                  Tambah Data Siswa
                </button>
                <br></br>

                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Gender</th>
                    <th>Angkatan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                  while($user_data = mysqli_fetch_array(result: $siswa)) {         
                  echo "<tr>";
                  echo "<td>".$user_data['id_user']."</td>";
                  echo "<td>".$user_data['nama']."</td>";
                  echo "<td>".$user_data['kelas']."</td>";    
                  echo "<td>".$user_data['gender']."</td>";    
                  echo "<td>".$user_data['angkatan']."</td>";
                  echo "<td><a href='edits.php?page=edit&& id=$user_data[id]' class='btn btn-sm btn-success'>Edit</a> <a onclick='hapuss($user_data[id])' class='btn btn-sm btn-danger'>Delete</a></td></tr>";        
                 }
                 
                   ?>
                  </tfoot>
                </table>
              </div>
            </div>
            </div>
          </div>
        </div>

      
      <?php
      }else if($_SESSION['level'] == 'Siswa'){ ?>
            <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
              </div>
                      
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Gender</th>
                    <th>Angkatan</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                  while($user_data = mysqli_fetch_array(result: $siswa)) {         
                  echo "<tr>";
                  echo "<td>".$user_data['id_user']."</td>";
                  echo "<td>".$user_data['nama']."</td>";
                  echo "<td>".$user_data['kelas']."</td>";    
                  echo "<td>".$user_data['gender']."</td>";    
                  echo "<td>".$user_data['angkatan']."</td>";
                 }
                }
                   ?>
                  </tfoot>
                </table>
              </div>
            </div>
            </div>
          </div>
        </div>




        <div class="modal fade" id="modal-siswa">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambahkan Data Siswa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <form method="get" action="adds.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="ID" name="id_user">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nama" name="nama">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Kelas" name="kelas">
                </div>
                <div class="col">
                  <select class="custom-select" id="InputGroupSelect01" name="gender">
                <option selected>Gender</option>
                  <option value="L">L</option>
                  <option value="P">P</option>  
              </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Angkatan" name="angkatan">
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between" id="siswa">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
          </div>
          </div>
          </div>
        </form>
    </section>
<script>
  function hapuss(data_id){
    Swal.fire({
  title: "Apakah anda yakin?",
  text: "Setelah dihapus data ini akan hilang..",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Ya, saya yakin"
}).then((result) => {
  if (result.isConfirmed) {
    window.location=("deletes.php?id="+data_id)
  }
})
  }
</script>

<script>
function hapusg(data_id){
    Swal.fire({
  title: "Apakah anda yakin?",
  text: "Setelah dihapus data ini akan hilang..",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Ya, saya yakin"
}).then((result) => {
  if (result.isConfirmed) {
    window.location=("deleteg.php?id="+data_id)
  }
})
  }
</script>