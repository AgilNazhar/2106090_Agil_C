<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form pembelian buku</title>
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <div class="kotak">
        <h2>FORM <BR> PEMBELIAN BUKU</BR></h2>
        <form method="POST" action="proses_input.php">

            <label for="username"> Masukan Username :</label>
            <input type="text" name="username" id="username" maxlength="20" class="form-input" required><br>

            <label for="password"> Masukan Password :</label>
            <input type="password" name="password" id="password" maxlength="20" class="form-input" required><br>

            <label for="nama_buku"> Masukan Nama buku :</label>
            <input type="text" name="nama_buku" id="nama_buku" maxlength="20" class="form-input" required><br>

            <label for="jml_buku"> Masukan Jumlah buku :</label>
            <input type="number" name="jml_buku" id="jml_buku" maxlength="20" class="form-input" required><br>

            <label for="tgl_buku"> Masukan Tanggal buku :</label>
            <input type="date" name="tgl_buku" id="tgl_buku" maxlength="20" class="form-input" required><br>
            <button type="submit" id="btn_kirim">kirim</button>

        </form>

    </div>
</body>

</html>