
<div class="box">
  <div class="box-header with-border">
    <a href="<?= base_url('admin/subpage/create/'.$page['title'])?>" class="btn btn-primary">
    Create <?= $page['title'] ?>
    </a>
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
              <th>Parent</th>
              <th>Created At</th>
              <th>Tools</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($subpage as $key => $value): ?>
            <tr>
              <td><?= $key+1 ?></td>
              <td><?= $value['title'] ?></td>
              <td><?= $value['page_title'] ?></td>
              <td><?= date('d F Y h:i',strtotime($value['created_at'])) ?></td>
              <td>  
                <a href="<?= base_url("admin/subpage/edit/$value[page_title]/$value[sub_page_id]")?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                <button class="btn btn-danger btn-delete" data-toggle="modal" data-target=".modal-delete" value="<?= "$value[page_title]/$value[sub_page_id]" ?>"><i class="fa fa-trash"></i></button>
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
        <h4 class="modal-title">Delete subpage</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure want to delete this subpage?</p>
        <small>Data cannot be recover</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <a href="<?= base_url("admin/subpage/delete/")?>" class="btn btn-outline">Yes, delete this</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script>
  $('.btn-delete').click(function() {
    var sub_page_id=$(this).val();
    var href=$('.modal-delete a').attr('href');
    $('.modal-delete a').attr('href',href+sub_page_id);
  })

  $('.datatables').DataTable();
</script>