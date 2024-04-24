<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>
body{
  width : 100%;
  height: 100vh;
  background-image: url(./bg1.jpg);
  background-size: 100%;
  border: 2px solid;
}
</style>
</head>    
<body>
<nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-1" id="navbarNav">
        <div class="navbar-nav me-auto">

        </div>
        <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
        <a href="login.php" class="btn btn-outline-primary m-1">Masuk</a>
    </div>
  </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-dark text-white">
                    <div class="text-center">
                        <h5>Login Aplikasi</h5>
                    </div>
                    <form action="config/aksilogin.php" method="POST">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <div class="d-grid mt-2">
                            <button class="btn btn-primary" type="submit" name="kirim">MASUK</button>
                        </div>
                    </form>
                    <hr>
                    <p>Belum punya akun?? <a href="register.php">Daftar disini</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; UJIKOM RPL 2024 | Nazwa Ainun Nabila Wahyudin</p>
</footer>
    
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>