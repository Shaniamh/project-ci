 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Siswa</a></li>
              <li class="breadcrumb-item active">Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
      <div class="container-fluid">
      <button class="btn btn-primary" style="margin-bottom:2%;" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Siswa</button>
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
                      <th>NISN</th>
                      <th>NAMA</th>
                      <th>KELAS</th>
                      <th colspan="3">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($siswa as $ssw) : ?>
                    <tr>
                      <td><?php echo $ssw->nisn ?></td>
                      <td><?php echo $ssw->nama ?></td>
                      <td><?php echo $ssw->kelas ?></td>
                      <td><?php echo anchor('siswa/detail/'.$ssw->nisn, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?></td>
                      <td onclick="javascript: return confirm('Anda yakin hapus data?')"><?php echo anchor('siswa/hapus_data/'.$ssw->nisn,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
                      <td><?php echo anchor('siswa/edit/'.$ssw->nisn, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
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
        <h4 class="modal-title" id="exampleModalLabel">Form input data siswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo base_url().'siswa/tambah_data' ?>" role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nrp">NISN</label>
                    <input type="number" name="nisn" class="form-control" id="nisn" placeholder="Masukkan NISN">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin">
                        <option>None</option>
                          <option>Pria</option>
                          <option>Wanita</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                  </div>  

                  <div class="form-group">
                    <label for="telepon">No. Telepon</label>
                    <input type="number" name="telepon" class="form-control" id="telepon" placeholder="Masukkan No. Telepon">
                  </div> 

                   <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Format : 2 Juli 2000">
                  </div> 

                <div class="form-group">
                    <label for="jurusan">kelas</label>
                    <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukkan Kelas">
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