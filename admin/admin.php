<!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>ADMIN LOGIN</h1>
          </div>
          <div class="panel-body">

            <!--connect php-->
            <form action="sign/sign.php" method="post">
              <div class="form-group">
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  required
                />
              </div>             
              <input type="submit" class="btn btn-primary"/>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; Group 37</small>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>