  <nav class="navbar navbar-expand-lg navbar-dark bg-dark-extreme fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo_pma.png">
  </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="menu">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#users" data-parent="#menu">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Users</span>
          </a>
          <ul class="sidenav-second-level collapse" id="users">
            <li>
              <a href="#"><i class="fa fa-fw fa-plus"></i> Add user</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-fw fa-trash"></i> Delete user</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-fw fa-pencil"></i> Edit user</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Databases">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#databases" data-parent="#menu">
            <i class="fa fa-fw fa-database"></i>
            <span class="nav-link-text">Databases</span>
          </a>
          <ul class="sidenav-second-level collapse" id="databases">
            <li>
              <a href="?controller=database&action=createDatabaseForm" style="text-decoration: underline;"><i class="fa fa-fw fa-plus"></i>_Add a database</a>
            </li>
            <li>
              <a href="?controller=index" style="text-decoration: underline;"><i class="fa fa-fw fa-list"></i>_List databases</a>
            </li>
            <?php foreach ($databasesWithTables as $dbname => $tables): ?>
              <li>
                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#<?php echo $dbname ?>"><i class="fa fa-fw fa-database"></i>-<?php echo $dbname ?></a>
                <ul class="sidenav-third-level collapse" id="<?php echo $dbname ?>">
                  <li>
                    <a href="?controller=table&action=index&dbname=<?php echo $dbname ?>" style="text-decoration: underline;"><i class="fa fa-fw fa-eye"></i>_See Database</a>
                  </li>
                  <?php foreach ($tables as $tablename): ?>
                    <li>
                      <a href="#"><i class="fa fa-fw fa-table"></i>--<?php echo $tablename; ?></a>
                    </li>
                  <?php endforeach ?>
                </ul>
              </li>
            <?php endforeach ?>
            
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
          <a class="nav-link" href="?controller=index&action=logoutProcess">
            <i class="fa fa-fw fa-sign-out"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <div class="dropdown">
            <a href="" class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i> <?php echo $user["login"] ?></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="">
                <i class="fa fa-fw fa-edit"></i> Edit</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-fw fa-sign-out"></i> Logout</a>
            </div>
          </div>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Server Performance">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-server"></i>
            <span class="nav-link-text">Request-Time : <?php echo round((microtime(true)-$_SERVER['REQUEST_TIME_FLOAT'])*1000,2); ?> ms</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
