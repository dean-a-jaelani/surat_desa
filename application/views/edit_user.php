    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php echo $this->session->flashdata('pesan'); ?>
        <!-- Small boxes (Stat box) -->
        <div class="row">

    <div class="col-md-3">
      <!-- Profile Image -->
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <form method="post" action="<?php echo base_url('User/updatePhoto/'.$user['id_user']); ?>" enctype="multipart/form-data">
            <?php if($user['photo'] == NULL) { ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/default.jpg'); ?>" alt="User profile picture">
            <?php }else{ ?>
            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/uploads/'.$user['photo']); ?>" alt="User profile picture">
            <?php } ?>
            <h3 class="profile-username text-center"><?php echo $user['nama'] ?></h3>

            <input type="file" name="photo" class="form-control" placeholder="Update Photo" required="">
            <button type="submit" class="btn btn-primary btn-block">Update Photo</button>
          </form>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <!-- About Me Box -->
      <div class="card card-primary card-outline">
        <div class="card-header p-2">
          <div class="row">
            <div class="col-md-7">
              <h3 class="box-title">Detil Data Admin</h3>
            </div>
            <div class="col-md-5">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary"><i class="fa fa-key"></i> Update Password
              </button>
              <a href="<?php echo base_url('User'); ?>" class="btn btn-warning"> Kembali </a>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-striped">
            <tr>
              <td style="width: 150px;">Nama</td>
              <td style="width: 30px;"> : </td>
              <td> <?php echo $user['nama']; ?></td>
            </tr>
            <tr>
              <td>Username</td>
              <td> : </td>
              <td> <?php echo $user['username']; ?></td>
            </tr>
            <tr>
              <td>Password</td>
              <td> : </td>
              <td> <?php echo $user['password']; ?></td>
            </tr>
            <tr>
              <td>Level</td>
              <td> : </td>
              <td> <?php echo $user['level']; ?></td>
            </tr>
          </table>
          <br>
          <hr>
          
        </div>

        <!-- /.box-body -->
      </div><br>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    <!-- Modals Update Password -->
<div class="modal modal-info fade" id="modal-primary">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Password</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('User/updatePass/'.$user['id_user']); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password Baru" required="">
                </div>
              </div>
              <!-- /.box-body -->
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->