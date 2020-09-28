<div class="content-wrapper">
    <section class="content">
    <?php foreach ($mahasiswa as $mhs) { ?>
    <form method="post" action="<?php echo base_url().'mahasiswa/update' ?>" role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="number" name="nrp" class="form-control" id="nrp" value="<?php echo $mhs->nrp ?>">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama mahasiswa</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $mhs->nama ?>">
                  </div>
                  <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $mhs->jenis_kelamin ?>">
                        <option>None</option>
                          <option>Pria</option>
                          <option>Wanita</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $mhs->alamat ?>">
                  </div>  

                  <div class="form-group">
                    <label for="telepon">No. Telepon</label>
                    <input type="number" name="telepon" class="form-control" id="telepon" value="<?php echo $mhs->telepon ?>">
                  </div> 

                   <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?php echo $mhs->tgl_lahir ?>">
                  </div> 

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="jurusan" value="<?php echo $mhs->jurusan ?>">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $mhs->email ?>">
                  </div>

              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
    <?php } ?>
    </section>
</div>