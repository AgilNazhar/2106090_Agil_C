<?php
$conn = mysqli_connect("localhost", "root", "", "2106090_agil");
if (!$conn) {
    echo "<script>
             alert('database tidak terhubung')
        </script>";
};
$username = $_POST['username'];
$password = $_POST['password'];
$nama_buku = $_POST['nama_buku'];
$jml_buku = $_POST['jml_buku'];


$query = "INSERT INTO uts VALUES(NULL,'$username','$password','$nama_buku','$jml_buku')";
mysqli_query($conn,$query);
echo "<script>alert('buku berhasil ditambahkan')</script>";
echo "<script>window.location='./index.php'</script>"
?>