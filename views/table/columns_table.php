<div class="content-wrapper">
  <div class="container-fluid">
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Home > <?php echo $selected_db; ?> > <?php echo $selected_tab; ?> > Columns
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <h4><b><i><?php echo $selected_tab; ?></i></b></h4>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th><b><i>Columns</i></b></th>
                <th>Fields</th>
                <th>Type</th>
                <th>Null</th>
                <th>Key</th>
                <th>Default</th>
                <th>Extra</th>
                <th style="text-align: center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($columns as $column): ?>
                <tr>
                  <td><?php echo $column["Field"]?></td>
                  <td><?php echo $column["Type"]?></td>
                  <td><?php echo $column["Null"]?></td>
                  <td><?php echo $column["Key"]?></td>
                  <td><?php echo $column["Default"]?></td>
                  <td><?php echo $column["Extra"]?></td>
                  <td style="text-align: center">
                    <a class="btn btn-primary" href="?controller=table&action=showDatasTable&tabname=<?php echo $table?>"><i class="fa fa-eye"></i></a>
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
