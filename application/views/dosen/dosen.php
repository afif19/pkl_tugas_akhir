<section class="content-header">
      <h1>
        Dosen
        <small>Tugas Akhir</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
          <div class="box-header">
              <h3 class="box-title">Data Dosen</h3>
              <div class="pull-right">
                <a href="<?= site_url('dosen/add')  ?>" class="btn btn-primary">
                  <i class="fa fa-user-plus"> Create</i>
                </a>
              </div>
          </div>

          <div class="box-body table-responsive">
            <!-- <?php print_r($row->result()) ?> -->
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Alamat</th>
                  <th>Level</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach($row->result() as $key => $data) { ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data->nama ?></td>
                  <td><?= $data->username ?></td>
                  <td><?= $data->alamat ?></td>
                  <td><?= $data->level == 1 ? "Admin" : "Dosen" ?></td>
                  <td class="text-center" width="160px">
                    <a href="<?= site_url('dosen/add')  ?>" class="btn btn-warning btn-xs">
                        <i class="fa fa-pencil"> Edit</i>
                    </a>
                    <a href="<?= site_url('dosen/add')  ?>" class="btn btn-danger btn-xs">
                        <i class="fa fa-pencil"> Hapus</i>
                    </a>
                  </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
    </section>
    <!-- /.content -->