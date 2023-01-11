<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <title>Dani Modul 3</title>
    </head>
    <style>
    </style>
<body>
<section id="Home">
      <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: cadetblue;">
        <div class="container-fluid">
          <a class="navbar-brand fst-italic" href="#">StepUp</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <nav align="center">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link mx-2 active" aria-current="page" href="desain.php">Desain</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 active" href="Login.html">Keranjang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 active" href="#">Feedback</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 active">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <section>
        <div class="container py-5 justify-content-start" style="width:50%;">
            <h2 class="fw-bold">Desain Sepatumu!</h2>

            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="namaMobil" class="form-label fw-bold">Jenis Sepatu</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih Jenis Sepatu</option>
                        <option value="1">High</option>
                        <option value="2">Low</option>
                    </select>
                </div>

                <div class="mb-3">
                <p class="fw-bold">Warna Dasar Sepatu</p>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran1" value="Lunas">
                    <label class="form-check-label" for="statusPembayaran">Hitam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Putih</label>
                </div>
                </div>

                <div class="mb-3">
                <p class="fw-bold">Warna Insole</p>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran1" value="Lunas">
                    <label class="form-check-label" for="statusPembayaran">Merah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Biru</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Hitam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Putih</label>
                </div>
                </div>

                <div class="mb-3">
                <p class="fw-bold">Warna Tali Sepatu</p>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran1" value="Lunas">
                    <label class="form-check-label" for="statusPembayaran">Merah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Biru</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Hitam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Putih</label>
                </div>
                </div>

                <div class="mb-3">
                <p class="fw-bold">Warna Lidah Sepatu</p>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran1" value="Lunas">
                    <label class="form-check-label" for="statusPembayaran">Merah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Biru</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Hitam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Putih</label>
                </div>
                </div>

                <div class="mb-3">
                <p class="fw-bold">Warna Midsole</p>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran1" value="Lunas">
                    <label class="form-check-label" for="statusPembayaran">Merah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Biru</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Hitam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Putih</label>
                </div>
                </div>

                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="selesai">Selesai</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>



            


