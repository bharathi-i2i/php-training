<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="main.js"></script>

</head>
<body class="bg-muted">
  <section class="container">
    <div class="row">
      <div class="container offset-sm-4 col-sm-4">
        <h2 class="font-weight-bolder">Login form</h2>
        <form method="post" class="was-validated" onsubmit= "return myFunction()">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="text-right">
            <input type="submit" class="btn btn-primary btn-lg" value="login">
          </div>
          <p id="demo"></p>
        </form>
      </div>
    </div>
  </section>
</body>
</html>
