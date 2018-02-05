
<div class="box">
  <div class="box-header with-border">
    <!-- <a href="<?= base_url('admin/slider/create')?>" class="btn btn-primary">Create slider</a> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">

    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered datatables">
          <thead>  
            <tr>
              <th>No</th>
              <th>title</th>
              <th>Author</th>
              <th>Created At</th>
              <th>Tools</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($slider as $key => $value): ?>
            <tr>
              <td><?= $key+1 ?></td>
              <td><?= $value['title'] ?></td>
              <td><?= $value['first_name'] ?></td>
              <td><?= date('d F Y h:i',strtotime($value['created_at'])) ?></td>
              <td>  
                <a href="<?= base_url("admin/slider/edit/$value[slider_id]")?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
              </td>
            </tr>
          <?php endforeach ?>
          </tbody>
        </table>
      </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
  </div>
  <!-- /.box-body -->

</div>
<!-- /.box -->

<!-- modal -->

<div class="modal modal-danger fade modal-delete">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Delete slider</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure want to delete this slider?</p>
        <small>Data cannot be recover</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <a href="<?= base_url("admin/slider/delete/")?>" class="btn btn-outline">Yes, delete this</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script>
  $('.btn-delete').click(function() {
    var slider_id=$(this).val();
    var href=$('.modal-delete a').attr('href');
    $('.modal-delete a').attr('href',href+slider_id);
  })

  $('.datatables').DataTable();
</script>