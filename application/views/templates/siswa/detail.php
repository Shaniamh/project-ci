 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Detail</a></li>
              <li class="breadcrumb-item active">Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <!-- <h3>heiooo</h3> -->
            
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table">               
                  <tr>
                    <th>NRP</th>
                    <td><?php echo $detail->nrp ?></td>
                  </tr>
                  <tr>
                    <th>Nama</th>
                    <td><?php echo $detail->nama ?></td>
                  </tr>
                  <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $detail->jenis_kelamin ?></td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td><?php echo $detail->alamat ?></td>
                  </tr>
                  <tr>
                    <th>No.Telepon</th>
                    <td><?php echo $detail->telepon ?></td>
                  </tr>
                  <tr>
                    <th>Tanggal Lahir</th>
                    <td><?php echo $detail->tgl_lahir ?></td>
                  </tr>
                  <tr>
                    <th>Jurusan</th>
                    <td><?php echo $detail->jurusan ?></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td><?php echo $detail->email ?></td>
                  </tr>
                </table>

                <a href="<?php echo base_url('mahasiswa/index'); ?>" class="btn btn-primary">Kembali</a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </section>