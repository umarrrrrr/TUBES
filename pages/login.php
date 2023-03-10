<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="d-flex justify-content-between align-items-center" style="height: 100%;">
    <div class="img" style="margin-left:0px;">
        <img src="../images/logo.jpg" style="width: 700px; height: 700px" alt="">
    </div>
        <form action="" method="post" style="width:50%;margin: 10px 50px">
            <h1 style="padding-bottom:20px;">Login</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" 
                <?php if (isset($_COOKIE['simpan_email'])){
                  echo $_COOKIE['simpan_email'];
                }
                ?>>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" value="true">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Login</button>
            <p class="mb-4" style="text-align: left,">Anda belum punya akun? <a href="../pages/Register-Umar.php">Daftar</a></p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>