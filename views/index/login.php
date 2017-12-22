<br><br><br>
 <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">MyPhpMyAdmin</div>
      <div class="card-body">
        <form action="index.php?controller=index&action=loginProcess" method="POST">
          <div class="form-group">
            <label for="login">User Name</label>
            <input name="login" class="form-control" id="login" type="text" aria-describedby="emailHelp" placeholder="Login">
          </div>
          <div class="form-group">
            <label for="passwd">Password</label>
            <input name="passwd" class="form-control" id="passwd" type="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</a>
        </form>
      </div>
    </div>
  </div>
