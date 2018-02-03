<div class="box">
  <div class="box-header with-border">
  </div>
  <!-- /.box-header -->


  <?php echo form_open_multipart("admin/slider/edit/$slider[slider_id]"); ?>
    <div class="box-body">
      <div class="form-group">
        <label class="control-label"> Uploaded Image</label>
        <div class="">
          <img src="<?= base_url("assets/images/slider/$slider[image_name]") ?>" class="img-responsive" />     
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Title</label>

        <div class="">
          <input type="text" class="form-control" placeholder="title" name="title" value="<?= $slider['title'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Sub Title</label>

        <div class="">
          <input type="text" class="form-control" placeholder="sub title" name="sub_title" value="<?= $slider['sub_title'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label"> Change Image (maximum 2MB)</label><br />
        <small>If you upload new image, old image will be deleted</small>
        <div class="">
          <input type="file" name="userfile" size="20" class="form-control" />        
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Content</label>

        <div class="">
          <textarea name="content" rows="20" class="form-control texteditor"><?= $slider['content'] ?></textarea>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <input type="hidden" name="image_name" value="<?= $slider['image_name'] ?>" />
      <input type="hidden" name="slider_id" value="<?= $slider['slider_id'] ?>" />
      <button type="submit" class="btn btn-primary pull-right">Submit</button>
    </div>
    <!-- /.box-footer -->
  </form>
</div>
<!-- /.box -->

