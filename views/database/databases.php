<div class="content-wrapper">
  <div class="container-fluid">
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-plus"></i> Home > Add Database
      </div>
      <div class="card-body">
        <form action="index.php?controller=database&action=createDatabase" method="POST">
          <div class="form-group">
            <label for="dbname">Database Name</label>
            <input name="dbname" class="form-control" id="dbname" type="text" aria-describedby="dbname" placeholder="Database Name">
          </div>
          <div class="form-group">
            <label for="charset">Charset</label>
            <select name="charset" class="form-control" id="charset" type="password">
              <?php foreach ($charsets as $key => $c): ?>
                <option value="<?php echo $c['CHARACTER_SET_NAME'] ?>" <?php if ($c['CHARACTER_SET_NAME'] == "utf8") echo "selected" ?>><?php echo $c['DEFAULT_COLLATE_NAME'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Enregistrer</a>
        </form>
      </div>
    </div>
  </div>
</div>