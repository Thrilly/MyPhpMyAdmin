<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-server"></i> Server Infos
          </div>
          <div class="card-body">
            <p><b>Host : </b> <?php echo $_SERVER["HTTP_HOST"] ?></p>
            <p><b>SoftWare : </b> <?php echo $_SERVER["SERVER_SOFTWARE"] ?></p>
            <p><b>Name : </b> <?php echo $_SERVER["SERVER_NAME"] ?></p>
            <p><b>Document Root :</b> <?php echo $_SERVER["DOCUMENT_ROOT"] ?></p>
            <p><b>Request Time :</b> <?php echo round((microtime(true)-$_SERVER['REQUEST_TIME_FLOAT'])*1000,2); ?> ms</p>
            <p><b>Logged User : </b> <?php echo $_SESSION["user"]["login"] ?></p>
            <p><b>Nb Databases : </b> <?php echo count($databasesWithTables) ?></p>
            <p><b>Author : </b> Harris SIMO, Benoit VU, Nicolas JOACHIM - ETNA</p>
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
                        <a class="btn btn-primary" href="?controller=table&action=index&dbname=<?php echo $dbname ?>"><i class="fa fa-eye"></i> Show</a>
                        <a class="btn btn-danger" onclick="return confirm('Do you really want to drop -<?php echo $dbname ?>- database?');" href="?controller=database&action=dropDatabaseProcess&dbname=<?php echo $dbname ?>"><i class="fa fa-trash"></i> Drop</a>
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
