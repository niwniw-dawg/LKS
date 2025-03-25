<?php 
include ('header.php');
include ('footer.php');
include ('content_header.php');
include ('koneksi.php');

$id = $_GET ['id'];
$query = mysqli_query( $koneksi,"SELECT * FROM guru WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
  <div class="container-fluid">
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Guru</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='updateg.php?id=$user_data[id]'>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                      <input type="text" class="form-control" placeholder="ID"name="id" value="<?php echo $view['id']?>" hidden>
                        <input type="text" class="form-control" placeholder="ID"name="id_user" value="<?php echo $view['id_user']?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $view['nama']?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Mapel" name="mapel" value="<?php echo $view['mapel']?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                      <select class="custom-select" id="InputGroupSelect01" name="gender" name="gender" value="<?php echo $view['gender']?>">
                <option value="<?php echo $view['gender'];?>" selected <?php echo $view['gender'];?>></option>
                  <option value="L">L</option>
                  <option value="P">P</option>  
                  </select>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        </section>