<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submitform'])){
        session_start();

        include '../koneksi/cn.php';

        if(empty($_POST['user']) || empty($_POST['pw']) || empty($_POST['email'])){
            header("location: daftar.php?pesan=empty");
        }else{
            $user = $_POST['user'];
            $pw = $_POST['pw'];
            $email = $_POST['email'];

            $query = mysqli_query($cn,"select * from users where user = '$user'");
            $cek = mysqli_num_rows($query);

            if($cek > 0){
                header("location: daftar.php?pesan=sudahada");
            }
            else{
                $query = mysqli_query($cn,"insert into users values ('','$user','$pw','$email',0, 0)");
                if($query){
                    $data = mysqli_query($cn,"select * from users where user = '$user'");
                    $userData = mysqli_fetch_array($data);

                    $_SESSION['userID'] =  $userData['userID'];
                    $_SESSION['username'] = $user;
                    $_SESSION['status'] = "login";
                    header("location:../home.php?pesan=register");
                }
            }
        }
    }
}


?>