<?php
    require "config.php";

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $tall = $_POST['tall'];
        $grande = $_POST['grande'];
        $venti = $_POST['venti'];
        $query = mysqli_query($db,"INSERT INTO menu (nama_menu,tall,grande,venti) VALUES ('$nama','$tall','$grande','$venti')");

        if(!empty($_FILES['gambar']['name'])){
        $query = mysqli_query($db, "SELECT * FROM menu WHERE nama_menu = '$nama'");
        $result = mysqli_fetch_assoc($query);
        $id = $result['id'];
        $nama = $_POST['nama_gambar'];
        $gambar = $_FILES['gambar']['name'];
        $x = explode(',', $gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp,"Images/$gambar_baru")){
            $query = mysqli_query($db, "INSERT INTO lampiran (id_menu,nama,file,file) VALUES ($id, '$nama', '$gambar_baru');");
            
            if($query){
                echo "<script> alert('Data Berhasil Dikirim');
                window.location = 'admin.php';
                </script>";
            } else {
            echo "Tambah data error";
            }
        }
        }
    }
?>