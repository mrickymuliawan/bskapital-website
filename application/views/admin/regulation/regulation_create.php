<div class="box">
  <div class="box-header with-border">
  
  </div>
  <!-- /.box-header -->

  <?php echo form_open('admin/regulation/create'); ?>
    <div class="box-body">
      <div class="form-group">
        <label class=" control-label">Title</label>

        <div class="">
          <input type="text" class="form-control" placeholder="title" name="title" value="<?= set_value('title'); ?>">
        </div>
      </div>
      <div class="form-group">
        <label class=" control-label">Content</label>

        <div class="">
          <textarea name="content" rows="20" class="form-control texteditor"><?= set_value('content'); ?></textarea>
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

