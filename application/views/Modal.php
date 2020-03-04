<div id="TambahModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hiden="true">&times</button>
        <h4 class="modal-title">Tambah Data Pelajar</h4>
      </div>

        <div class="modal-body">
          <form action="<?php echo base_url() ?>Home/add" method="POST">
            <div class="form-group">
              <label>NIS</label>
              <input type="number" class="form-control" name="nis" placeholder="Harap Masukan Nis">
            </div>
            <div class="form-group">
              <label>Nama Siswa</label>
              <input type="text" class="form-control" name="nama" placeholder="Harap Masukan Nama">
            </div>
            <div class="form-group">
              <label>Kelas</label>
              <input type="text" class="form-control" name="kelas" placeholder="Harap Masukan Kelas">
            </div>
            <div class="form-group">
              <label>Jurusan</label>
              <input type="text" class="form-control" name="jurusan" placeholder="Masukan Nama Jurusan">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Harap Masukan Email">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
          <button type="submit" class="btn btn-primary"><i class="mdi mid-save-circle mr-2 fa fa-save"></i> Simpan</button>
      </div>
          </form>
  </div>
</div>
</div>

<div id="UbahModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hiden="true">&times</button>
        <h4 class="modal-title">Update Data Pelajar</h4>
      </div>

        <div class="modal-body">
          <form action="<?php echo base_url() ?>Home/update" method="POST">
            <div class="form-group">
              <label>NIS</label>
              <input type="number" class="form-control nis" name="nis" readonly>
            </div>
            <div class="form-group">
              <label>Nama Siswa</label>
              <input type="text" class="form-control nama_siswa" name="nama" placeholder="Harap Masukan Nama">
            </div>
            <div class="form-group">
              <label>Kelas</label>
              <input type="text" class="form-control kelas" name="kelas" placeholder="Harap Masukan Kelas">
            </div>
            <div class="form-group">
              <label>Jurusan</label>
              <input type="text" class="form-control jurusan" name="jurusan" placeholder="Masukan Nama Jurusan">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control email" name="email" placeholder="Harap Masukan Email">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
          <button type="submit" class="btn btn-primary"><i class="mdi mid-save-circle mr-2 fa fa-save"></i> Simpan</button>
      </div>
          </form>
  </div>
</div>
</div>
