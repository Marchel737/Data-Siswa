<?php
include('koneksi.php');

//get id nih
$id =$_GET['id'];

$query ="DELETE FROM siswa WHERE id_siswa = '$id'";

if($connection->query($query)){
    header("location: index.php");

}else{
    echo "DATA GAGAL DI HAPUS!";
}
?>