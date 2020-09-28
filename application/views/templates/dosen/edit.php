<div class="content-wrapper">
    <section class="content">
    <?php foreach ($dosen as $dsn) { ?>
    <form method="post" action="<?php echo base_url().'dosen/update' ?>" role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="number" name="nip" class="form-control" id="nip" value="<?php echo $dsn->nip ?>">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Dosen</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $dsn->nama ?>">
                  </div>
                  <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $dsn->jenis_kelamin ?>">
                        <option>None</option>
                          <option>Pria</option>
                          <option>Wanita</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $dsn->alamat ?>">
                  </div>  

                  <div class="form-group">
                    <label for="telepon">No. Telepon</label>
                    <input type="number" name="telepon" class="form-control" id="telepon" value="<?php echo $dsn->telepon ?>">
                  </div> 

                   <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?php echo $dsn->tgl_lahir ?>">
                  </div> 

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $dsn->email ?>">
                  </div>

              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
    <?php } ?>
    </section>
</div>