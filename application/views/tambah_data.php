  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Pelajar
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Tambah Data Pelajar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pelajar</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url() ?>Home/add" method="POST">
              <div class="box-body">
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
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="mdi mid-save-circle mr-2 fa fa-save"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
