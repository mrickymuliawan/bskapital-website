
<div class="box">
  <div class="box-header with-border">

  </div>
  <!-- /.box-header -->


  <?php echo form_open('admin/user/create','class=form-horizontal'); ?>
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>

        <div class="col-sm-10">
          <input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">First Name</label>

        <div class="col-sm-10">
          <input type="text" name="first_name" class="form-control" value="<?= set_value('first_name'); ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Last Name</label>

        <div class="col-sm-10">
          <input type="text" name="last_name" class="form-control" value="<?= set_value('last_name'); ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Password</label>

        <div class="col-sm-10">
          <input type="text" value="the password will be the same as the email, user can change it later" class="form-control" readonly="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Role</label>
        <div class="col-sm-10">
          <select class="form-control" name='role'>
            <option value="administrator">Administrator</option>
            <option value="author">Author</option>
          </select> 
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary pull-right">Submit</button>
    </div>
    <!-- /.box-footer -->
  </form>
</div>
<!-- /.box -->

