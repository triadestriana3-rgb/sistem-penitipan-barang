<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost","root","","peba");

if (!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "FILE TERBUKA <br>";

echo "<pre>";
print_r($_POST);
echo "</pre>";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$hp = $_POST['no_hp'];
$prodi = $_POST['prodi'];
$tingkat = $_POST['tingkat'];
$barang = $_POST['nama_barang'];

$sql = "INSERT INTO titip_barang
(nama_lengkap,email,no_hp,prodi,tingkat,nama_barang)
VALUES
(
'$nama',
'$email',
'$hp',
'$prodi',
'$tingkat',
'$barang'
)";

if(mysqli_query($conn,$sql)){
    echo "DATA BERHASIL MASUK";
}else{
    echo "ERROR SQL: ".mysqli_error($conn);
}

}
?>