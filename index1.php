<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Biodata</h1>
        <form method="POST" action="biodata2.php">
            <!-- nama, jenis kelamin, agama, alamat, tempat lahir, tanggal lahir, hobi, cita-cita, usia, asal sekolah -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jenis_kelamin" placeholder="Laki-laki/ Perempuan" required>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control" name="agama" placeholder="Agama" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tanggal_lahir" placeholder="dd-mm-yy" required>
        </div>
        <div class="mb-3">
            <label for="hobi" class="form-label">Hobi</label>
            <input type="text" class="form-control" name="hobi" placeholder="Hobi" required>
        </div>
        <div class="mb-3">
            <label for="cita_cita" class="form-label">Cita-Cita</label>
            <input type="text" class="form-control" name="cita_cita" placeholder="Cita-cita" required>
        </div>
        <div class="mb-3">
            <label for="usia" class="form-label">Usia</label>
            <input type="text" class="form-control" name="usia" placeholder="Usia" required>
        </div>
        <div class="mb-3">
            <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
            <input type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah" required>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>