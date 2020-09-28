<div class="content-wrapper">
    <section class="content">
    <?php foreach ($mapel as $mpl) { ?>
    <form method="post" action="<?php echo base_url().'mapel/update' ?>" role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">ID</label>
                    <input type="number" name="id" class="form-control" id="id" value="<?php echo $mpl->id ?>">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Mata Pelajaran</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $mpl->nama ?>">
                  </div>
                  <div class="form-group">
                    <label for="guru">Guru</label>
                    <input type="text" name="guru" class="form-control" id="guru" value="<?php echo $mpl->guru ?>">
                  </div>  

                   <div class="form-group">
                    <label for="ruang">Ruang</label>
                    <input type="text" name="ruang" class="form-control" id="ruang" value="<?php echo $mpl->ruang ?>">
                  </div> 

              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
    <?php } ?>
    </section>
</div>