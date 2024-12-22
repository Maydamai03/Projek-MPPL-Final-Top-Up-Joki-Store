<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submitform'])){

        include '../koneksi/cn.php';

        if(empty($_POST['user']) || empty($_POST['pw'])){
            header("location: loginPage.php?pesan=empty");
        }else{
            $user = $_POST['user'];
            $pw = $_POST['pw'];

            $query = mysqli_query($cn,"select * from users where user = '$user' and pass = '$pw'");
            $cek = mysqli_num_rows($query);

            if($cek > 0){

                $data = mysqli_fetch_array($query);

                $_SESSION['userID'] = $data['userID'];
                $_SESSION['username'] = $user;
                $_SESSION['status'] = "login";

                $userID = $_SESSION['userID'];

                header("location: ../home.php?pesan=login&userID=$userID");
            }
            else{
                header("location:loginPage.php?pesan=gagal");
            }
        }
    }
}


?>