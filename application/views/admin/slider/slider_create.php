<div class="box">
  <div class="box-header with-border">
  
  </div>
  <!-- /.box-header -->

  <?php echo form_open_multipart('admin/slider/create'); ?>
    <div class="box-body">
      <div class="form-group">
        <label class="control-label">Title</label>

        <div class="">
          <input type="text" class="form-control" placeholder="title" name="title" value="<?= set_value('title'); ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Sub Title</label>

        <div class="">
          <input type="text" class="form-control" placeholder="sub title" name="sub_title" value="<?= set_value('sub_title'); ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label"> Upload Image (maximum 2MB) </label><br />
        <small>Min width 1000px</small>
        <div class="">
          <input type="file" name="userfile" size="20" class="form-control" />        
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Content</label><br />
        <small>Max 100 letters</small>
        <div class="">
          <textarea name="content" rows="2" class="form-control" maxlength="100"><?= set_value('content'); ?></textarea>
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

