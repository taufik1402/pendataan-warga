<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data User</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Keterangan</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data_user as $user) : ?>
    <tr>
      <td><?php echo $user['id_user'] ?></td>
      <td><?php echo $user['nama_user'] ?></td>
      <td><?php echo $user['username_user'] ?></td>
      <td><?php echo $user['keterangan_user'] ?></td>
      <td><?php echo $user['status_user'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php"><span class="glyphicon glyphicon-sunglasses"></span> Detail</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="edit.php"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
            </li>
            <li>
              <a href="mutasi.php"><span class="glyphicon glyphicon-export"></span> Mutasi</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?php include('../_partials/bottom.php') ?>
