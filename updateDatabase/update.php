<?php
    session_start();
    include '../koneksi/cn.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['token'])){
            $token = $_GET['token'];
            $type = $_GET['type'];

            // Update database

            // Ganti total_donasi kalo ada
            $updateproyek = mysqli_query($cn, "UPDATE payment SET status = 'sukses' WHERE idPayment = '$token'");

            if($updateproyek){
                if($type == 'joki'){
                    header('location:../joki/orderjoki.php?pesan=sukses');
                }else{
                    header('location:../diamond/order.php?pesan=sukses');
                }
            }else{
                echo $cn->error;
            }

    }

?>