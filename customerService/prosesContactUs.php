<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['nama']) && !empty($_POST['email']) && !empty($_POST['pesan']) ){

            include '../koneksi/cn.php';

            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $perihal = $_POST['perihal'];
            $pesan = $_POST['pesan'];

            echo $nama . ', ' . $email . ', ' . $perihal . ', ' . $pesan;

            $query = mysqli_query($cn,"insert into customerservice values ('', 'pending', '$nama', '$email', '$perihal', '$pesan')");

            if($query){
                header("location:../home.php?pesan=berhasilCS");
            }
            else{
                header("location:../home.php?pesan=gagal");
            }

        
        }else{
            header('location:contactus.php?pesan=kosong');
        }
    }
?>