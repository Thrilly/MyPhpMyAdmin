<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-server"></i> Server
          </div>
          <div class="card-body">
            <?php foreach ($_SERVER as $key => $params): ?>
              <p><?php echo "<b>".$key."</b>: ".$params ?></p>
            <?php endforeach ?>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-list"></i> Databases
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Databases Name</th>
                    <th>Tables Count</th>
                    <th style="text-align: center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($databasesWithTables as $dbname => $tables): ?>
                    <tr>
                      <td><i class="fa fa-database"></i>-<?php echo $dbname ?></td>
                      <td><?php echo count($tables) ?></td>
                      <td style="text-align: center">
                        <a class="btn btn-primary" href="?controller=table&action=index&dbname=<?php echo $dbname ?>"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-danger" onclick="return confirm('Do you really want to drop -<?php echo $dbname ?>- database?');" href="?controller=database&action=dropDatabaseProcess&dbname=<?php echo $dbname ?>"><i class="fa fa-trash"></i></a>
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
  </div>
    
</div>
