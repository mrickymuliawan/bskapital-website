
<div class="box">
  <div class="box-header with-border">

  </div>
  <!-- /.box-header -->

  
  <?php echo form_open("admin/user/changepassword/$user[user_id]",'class=form-horizontal'); ?>
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>

        <div class="col-sm-10">
          <input type="text" name="email" class="form-control" value="<?= $user['email'] ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Old Password</label>

        <div class="col-sm-10">
          <input type="password" name="oldpassword" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">New Password</label>

        <div class="col-sm-10">
          <input type="password" name="newpassword" class="form-control">
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <input type="hidden" value="<?= $user['user_id'] ?>" name="user_id"/>
     <!--  <button type="button" class="btn btn-warning" data-toggle='modal' data-target=".modal-reset-password">Reset Password</button> -->
      <button type="submit" class="btn btn-info pull-right">Submit</button>
    </div>
    <!-- /.box-footer -->
  </form>
</div>
<!-- /.box -->
<div class="modal modal-warning fade modal-reset-password">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Reset Password</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure want to reset user password?</p>
        <b>after resetting, password will be the same as the email</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <a href="<?= base_url("admin/user/resetpassword/$user[user_id]")?>" class="btn btn-outline">Yes, reset this</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>