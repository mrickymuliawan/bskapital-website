<div class="box">
  <div class="box-header with-border">
  
  </div>
  <!-- /.box-header -->

  <?php echo form_open_multipart('admin/news/create'); ?>
    <div class="box-body">
      <div class="form-group">
        <label class="control-label">Title</label>

        <div class="">
          <input type="text" class="form-control" placeholder="title" name="title">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label"> Upload Image (maximum 2MB)</label>
        <div class="">
          <input type="file" name="userfile" size="20" class="form-control" />        
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Content</label>

        <div class="">
          <textarea name="content" rows="20" class="form-control texteditor"></textarea>
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
