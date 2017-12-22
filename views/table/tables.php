<div class="content-wrapper">
  <div class="container-fluid">
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Home > <?php echo $_GET["dbname"]; ?> > Tables
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th><b><i><?php echo $dbname; ?></i></b></th>
                <th style="text-align: center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tables as $table): ?>
                <tr>
                  <td><i class="fa fa-table"></i>-<?php echo $table?></td>
                  <td style="text-align: center">
                    <a class="btn btn-primary" href="?controller=table&action=showDatasTable&tablename=<?php echo $table?>"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-danger" onclick="return confirm('Do you really want to drop -<?php echo $table?>- table?');" href="?controller=table&action=dropTable&tablename=<?php echo $table?>"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated <?php echo date("d/m/Y - G:i:s") ?></div>
    </div>
  </div>
</div>
