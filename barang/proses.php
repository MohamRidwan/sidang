<?php
include '../database.php';
$dosen = new Barang();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = @$_POST['id'];
    $ruangan = $_POST['ruangan'];
    $nama_barang = $_POST['nama_barang'];
    $status = $_POST['status'];
    $jumlah = $_POST['jumlah'];
    // $date = $row['date'];
    // $date = date('m.d.Y', strtotime($row))
    

    if ($aksi == "create"){
        $dosen->create($ruangan,$nama_barang,$status,$jumlah);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $dosen->update($id,$ruangan,$nama_barang,$status,$jumlah);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $dosen->delete($id);
        header("location:index.php");
    }
}
?>