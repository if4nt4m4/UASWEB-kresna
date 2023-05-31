<?php 
if (isset($_POST['edit'])){

    include("koneksi.php");
    $db = new database();

    $noUjian = $_POST["noUjian"];
    $nama = $_POST["nama"];
    $tempat = $_POST["tempat"];
    $tanggal = $_POST["tgllahir"];
    $alamat = $_POST["alamat"];
    $noHp = $_POST["noHp"];
    $jurusan = $_POST["jurusan"];
    $prodi = $_POST["prodi"];
    $email = $_POST["email"];


    $query = $db->koneksi->prepare("UPDATE pendaftaran SET noUjian = '$noUjian', 
    nama = '$nama', tempat = '$tempat', tgllahir = '$tanggal', alamat = '$alamat', jurusan = '$jurusan', prodi = '$prodi', email = '$email' WHERE noUjian= '$noUjian'");
    $query->execute();

    header("location:viewdata.php");
    return $result;

}
?>