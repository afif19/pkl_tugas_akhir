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
              <h3 class="box-title">Tambah Dosen</h3>
              <div class="pull-right">
                <a href="<?= site_url('dosen') ?>" class="btn btn-warning">
                  <i class="fa fa-undo"></i> Back
                </a>
              </div>
          </div>

          <div class="box-body">
			<div class="row">
				<div class="col-md-12">
					<?php //echo validation_errors(); ?>
					<form action="" method="POST">
						<div class="form-group <?= form_error('username') ? 'has-error' : null  ?>">
							<label for="">Username *</label>
							<input type="text" name="username" class="form-control" value="<?= set_value('username') ?>">
							<?= form_error('username')?>
						</div>

						<div class="form-group <?= form_error('password') ? 'has-error' : null  ?>">
							<label for="">Password *</label>
							<input type="password" name="password" class="form-control" value="<?= set_value('password') ?>">
							<?= form_error('password')?>
						</div>

						<div class="form-group <?= form_error('passconf') ? 'has-error' : null  ?>">
							<label for="">Konfirmasi Password *</label>
							<input type="password" name="passconf" class="form-control" value="<?= set_value('passconf') ?>">
							<?= form_error('passconf')?>
						</div>

						<div class="form-group <?= form_error('fullname') ? 'has-error' : null  ?>">
							<label for="">Nama *</label>
							<input type="text" name="fullname" class="form-control" value="<?= set_value('fullname') ?>">
							<?= form_error('fullname')?>
						</div>

						<!-- <div class="form-group">
							<label for="">NIP *</label>
							<input type="number" name="nip" class="form-control">
						</div> -->

						<div class="form-group <?= form_error('alamat') ? 'has-error' : null  ?>">
							<label for="">Alamat</label>
							<textarea name="alamat" class="form-control"><?= set_value('alamat') ?></textarea>
							<?= form_error('alamat')?>
						</div>

						<!-- <div class="form-group">
							<label for="">No.Telpon *</label>
							<input type="number" name="telpon" class="form-control">
						</div> -->

						<div class="form-group <?= form_error('level') ? 'has-error' : null  ?>">
							<label for="">Level *</label>
							<select name="level" class="form-control">
								<option value="">- Pilih -</option>
								<option value="1" <?=set_value('level') == 1 ? "selected" : null ?>>Dosen</option>
								<option value="2" <?=set_value('level') == 2 ? "selected" : null ?>>Mahasiswa</option>
							</select>
							<?= form_error('level')?> 
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success btn-flat">Submit</button>
							<button type="reset" class="btn btn-danger btn-flat">Reset</button>
						</div> 




					</form>
				</div>
			</div>
          </div>
        </div>
    </section>
    <!-- /.content -->