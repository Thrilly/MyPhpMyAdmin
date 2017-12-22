<div class="content-wrapper">
  <div class="container-fluid">
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Home > <?php echo $selected_db ?> > Tables
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <h4><b><i><?php echo $selected_db ?></i></b></h4>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th><b><i>Tables</i></b></th>
                <th style="text-align: center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tables_tab as $table): ?>
                <tr>
                  <td><i class="fa fa-table"></i>-<?php echo $table["Tables_in_$selected_db"]?></td>
                  <td style="text-align: center">
                    <a class="btn" href="?controller=table&action=showDatasTable&tablename=<?php echo $table["Tables_in_$selected_db"]?>"><i class="fa fa-list"></i> Show Datas</a>
                    <a class="btn" href="?controller=table&action=showDColumns&tablename=<?php echo $table["Tables_in_$selected_db"]?>&dbname=<?php echo $selected_db["Tables_in_$selected_db"]?>"><i class="fa fa-columns" aria-hidden="true"></i> Show Columns</a>
                    <a class="btn btn-danger" onclick="return confirm('Do you really want to drop -<?php echo $table["Tables_in_$selected_db"]?>- table?');" href="?controller=table&action=dropTable&tablename=<?php echo $table["Tables_in_$selected_db"]?>"><i class="fa fa-trash"></i> Delete</a>
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
