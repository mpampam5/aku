<link rel="stylesheet" href="<?=$this->config->item('admin_dir')?>plugins/datatables/dataTables.bootstrap.css">
<script src="<?=$this->config->item('admin_dir')?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=$this->config->item('admin_dir')?>plugins/datatables/dataTables.bootstrap.min.js"></script>

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Admin Managament</h3>
    <div class="box-tools pull-right">
      <a href="<?=base_url()?>/cpanel/Managementuser/tambah_admin" id="tambah" class="btn btn-success btn-sm"> Tambah Admin</a>
    </div>
  </div>
  <div class="box-body">
    <div id="alert"></div>
    <table class="table" id="table">
      <thead>
        <tr>
          <th>Email</th>
          <th>Level</th>
          <th>Status</th>
          <th>#</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($row->result() as $user): ?>
        <tr>
          <td><?=$user->email?></td>
          <td><?=$user->level?></td>
          <td><?php if ($user->active==1): ?>
            <label class="label label-success">Aktif</label>
            <?php else: ?>
            <label class="label label-danger">Tidak Aktif</label>
          <?php endif; ?></td>
          <td>
            <?php if ($user->level!="superadmin"): ?>
            <?php if ($user->active==1): ?>
                  <a href="<?=base_url()?>/cpanel/Managementuser/active/<?=$user->id_auth?>/0" id="aktif" class="btn btn-warning btn-sm">Nonaktifkan</a>
              <?php else: ?>
                  <a href="<?=base_url()?>/cpanel/Managementuser/active/<?=$user->id_auth?>/1" id="aktif" class="btn btn-primary btn-sm">Aktifkan</a>
                <?php endif; ?>
                <a href="<?=base_url()?>/cpanel/Managementuser/hapus/<?=$user->id_auth?>" class="btn btn-danger btn-sm" id="hapus">Hapus</a>
            <?php endif; ?>

                <a href="<?=base_url()?>/cpanel/Managementuser/change_password/<?=$user->id_auth?>" class="btn btn-info btn-sm" id="reset"> Ganti Password</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div><!-- /.box-body -->
</div><!-- /.box -->

<script type="text/javascript">
   $('#table').DataTable(
     {
       "ordering": false
     }
   );

   $(document).on('click', '#tambah', function(e){
       e.preventDefault();
       $('.modal-dialog').removeClass('modal-lg');
       $('.modal-dialog').removeClass('modal-sm');
       $('.modal-dialog').addClass('modal-md');
       $('#ModalHeader').html('Tambah Admin');
       $('#ModalContent').load($(this).attr('href'));
       $('#ModalGue').modal('show');

     });


   $(document).on('click', '#reset', function(e){
       e.preventDefault();
       $('.modal-dialog').removeClass('modal-lg');
       $('.modal-dialog').removeClass('modal-sm');
       $('.modal-dialog').addClass('modal-md');
       $('#ModalHeader').html('Reset Password');
       $('#ModalContent').load($(this).attr('href'));
       $('#ModalGue').modal('show');

     });


   $(document).on('click', '#aktif', function(e){
    e.preventDefault();
    var Link = $(this).attr('href');

    $('.modal-dialog').removeClass('modal-lg');
    $('.modal-dialog').addClass('modal-sm');
    $('#ModalHeader').html('Konfirmasi');
    $('#ModalContent').html('Apakah anda yakin ingin Mengaktifkan/menonaktifkan?');
    $('#ModalFooter').html("<button type='button' class='btn btn-primary' id='ya' data-loading-text='<i class=\"fa fa-spinner fa-spin \"></i> Memproses ...' data-url='"+Link+"'>Ya, saya yakin</button><button type='button' class='btn btn-default' data-dismiss='modal'>Batal</button>");
    $('#ModalGue').modal('show');
  });

  $(document).on('click', '#ya', function(e){
    e.preventDefault();
    $('#ya').prop('disabled', true)
                    .button('loading');

    $.ajax({
      url: $(this).data('url'),
      type: "POST",
      cache: false,
      dataType:'json',
      success: function(data){
        $("#ModalGue").modal('hide');
        $('#alert').append('<div id="alert" class="alert alert-success">'+
                          data.alert+
                          '<div>');
        location.reload();
        $('.alert-success').delay(500).show(10, function(){
          $('.alert-success').delay(3000).hide(10, function(){
            $('.alert-success').remove();

          });
        })
      }
    });
  });

   $(document).on('click', '#hapus', function(e){
    e.preventDefault();
    var Link = $(this).attr('href');

    $('.modal-dialog').removeClass('modal-lg');
    $('.modal-dialog').addClass('modal-sm');
    $('#ModalHeader').html('Konfirmasi');
    $('#ModalContent').html('Apakah anda yakin ingin Menghapus?');
    $('#ModalFooter').html("<button type='button' class='btn btn-primary' id='ya-hapus' data-loading-text='<i class=\"fa fa-spinner fa-spin \"></i> Memproses ...' data-url='"+Link+"'>Ya, saya yakin</button><button type='button' class='btn btn-default' data-dismiss='modal'>Batal</button>");
    $('#ModalGue').modal('show');
  });

  $(document).on('click', '#ya-hapus', function(e){
    e.preventDefault();
    $('#ya-hapus').prop('disabled', true)
                    .button('loading');

    $.ajax({
      url: $(this).data('url'),
      type: "POST",
      cache: false,
      dataType:'json',
      success: function(data){
        $("#ModalGue").modal('hide');
        $('#alert').append('<div id="alert" class="alert alert-success">'+
                          data.alert+
                          '<div>');
        location.reload();
        $('.alert-success').delay(500).show(10, function(){
          $('.alert-success').delay(3000).hide(10, function(){
            $('.alert-success').remove();

          });
        })
      }
    });
  });
</script>
