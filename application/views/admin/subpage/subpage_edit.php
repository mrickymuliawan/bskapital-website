<div class="box">
  <div class="box-header with-border">
  </div>
  <!-- /.box-header -->


  <?php echo form_open_multipart("admin/subpage/edit/$page[title]/$subpage[sub_page_id]"); ?>
    <div class="box-body">
      <div class="form-group">
        <label class="control-label"> Uploaded Image</label>
        <div class="">
          <img src="<?= base_url("assets/images/subpage/$subpage[image_name]") ?>" class="img-responsive" />     
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Title</label>

        <div class="">
          <input type="text" class="form-control" placeholder="title" name="title" value="<?= $subpage['title'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Sub Title</label>

        <div class="">
          <input type="text" class="form-control" placeholder="sub title" name="sub_title" value="<?= $subpage['sub_title'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Parent</label>
        <div class="">
          <input type="text" class="form-control" value="<?= $page['title']?>" / readonly>   
          <input type="hidden" class="form-control" name='page_id' value="<?= $page['page_id']?>" />    
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
          <textarea name="content" rows="20" class="form-control texteditor"><?= $subpage['content'] ?></textarea>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <input type="hidden" name="image_name" value="<?= $subpage['image_name'] ?>" />
      <input type="hidden" name="sub_page_id" value="<?= $subpage['sub_page_id'] ?>" />
      <button type="submit" class="btn btn-primary pull-right">Submit</button>
    </div>
    <!-- /.box-footer -->
  </form>
</div>
<!-- /.box -->

