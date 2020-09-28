
              <div class="card-header">
                <h3 class="card-title">Isi form <small>dengan data yang valid</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="number" name="nrp" class="form-control" id="nrp" placeholder="Masukkan NRP">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin">
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
                  <label>Tanggal Lahir</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan Jurusan">
                  </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
