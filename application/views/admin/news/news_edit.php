<div class="box">
  <div class="box-header with-border">
  </div>
  <!-- /.box-header -->


  <?php echo form_open_multipart("admin/news/edit/$news[news_id]"); ?>
    <div class="box-body">
      <div class="form-group">
        <label class="control-label"> Uploaded Image</label>
        <div class="">
          <img src="<?= base_url("assets/images/news/$news[image_name]") ?>" class="img-responsive" />     
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Title</label>

        <div class="">
          <input type="text" class="form-control" placeholder="title" name="title" value="<?= $news['title'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Content</label>

        <div class="">
          <textarea name="content" rows="20" class="form-control texteditor"><?= $news['content'] ?></textarea>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <input type="hidden" name="news_id" value="<?= $news['news_id'] ?>" />
      <button type="submit" class="btn btn-primary pull-right">Submit</button>
    </div>
    <!-- /.box-footer -->
  </form>
</div>
<!-- /.box -->

