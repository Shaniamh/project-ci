 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mapel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Mapel</a></li>
              <li class="breadcrumb-item active">Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
      <div class="container-fluid">
      <button class="btn btn-primary" style="margin-bottom:2%;" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Mapel</button>
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <!-- <h3>heiooo</h3> -->
              
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table">
                  <thead>                  
                    <tr>
                      <th>ID</th>
                      <th>NAMA MATA PELAJARAN</th>
                      <th>GURU</th>
                      <th>RUANG KELAS</th>
                      <th colspan="3">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($mapel as $mpl) : ?>
                    <tr>
                      <td><?php echo $mpl->id ?></td>
                      <td><?php echo $mpl->nama ?></td>
                      <td><?php echo $mpl->guru ?></td>
                      <td><?php echo $mpl->ruang ?></td>
                      <td onclick="javascript: return confirm('Anda yakin hapus data?')"><?php echo anchor('mapel/hapus_data/'.$mpl->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
                      <td><?php echo anchor('mapel/edit/'.$mpl->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- heiyo -->
            </div>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form input data mapel</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo base_url().'mapel/tambah_data' ?>" role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">ID</label>
                    <input type="number" name="id" class="form-control" id="id" placeholder="Masukkan ID" required>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Mata pelajaran</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="guru">Guru</label>
                    <input type="text" name="guru" class="form-control" id="guru" placeholder="Masukkan Guru" required>
                  </div>  

                   <div class="form-group">
                    <label for="kelas">Ruang</label>
                    <input type="text" name="ruang" class="form-control" id="ruang" placeholder="Masukkan kelas" required>
                  </div> 

              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
              </form>

      </div>
    </div>
  </div>
</div>

  </div>
  <!-- /.content-wrapper -->  