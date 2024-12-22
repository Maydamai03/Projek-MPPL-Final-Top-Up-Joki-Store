<?php

    session_start();
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['submitform'])){
            if(isset($_POST['email']) && isset( $_POST['pw']) && isset($_POST['req']) && isset($_POST['note']) && isset($_POST['options-outlined']) && isset($_POST['phone'])){
                
                include "../koneksi/cn.php";

                // Inisialisasi variabel inputan
                $email = $_POST['email'];
                $pw = $_POST['pw'];
                $req = $_POST['req'];
                $note = $_POST['note'];
                $phone = $_POST['phone'];
                $productData = $_POST['options-outlined'];


                // ubah jadi string
                $snapToken = mysqli_real_escape_string($cn, $snapToken);
                $userID = mysqli_real_escape_string($cn, $userID);
                $idProduct = mysqli_real_escape_string($cn, $idProduct);
                $email = mysqli_real_escape_string($cn, $email);
                $pw = mysqli_real_escape_string($cn, $pw);
                $req = mysqli_real_escape_string($cn, $req);
                $note = mysqli_real_escape_string($cn, $note);

                
                
                // Membelah nama paket dengan harga
                list($product, $price,$idProduct) = explode("|", $productData);
                $price = (int)$price;

                //====================== Midtrans =============================
                require_once dirname(__FILE__) . '/midtrans-php-master/Midtrans.php';

                // Set your Merchant Server Key
                \Midtrans\Config::$serverKey = 'SB-Mid-server-Xy5xm9bYMDYzsGcpo9LGp-S6';
                // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
                \Midtrans\Config::$isProduction = false;
                // Set sanitization on (default)
                \Midtrans\Config::$isSanitized = false;
                // Set 3DS transaction for credit card to true
                \Midtrans\Config::$is3ds = true;
                
                // Param untuk dikirim ke midtrans dashboard

                $username = "Mode Tamu";
                $userID = 0;
                
                if(isset($_SESSION['username'])){
                    $username = $_SESSION['username'];
                    $userID = $_SESSION['userID'];
                }
                
                $params = array(
                    'transaction_details' => array(
                        'order_id' => rand(),
                        'gross_amount' => $price,
                    ),
                    'item_details' => array(
                        array(
                            'id' => $idProduct,
                            'price' => $price,
                            'quantity' => 1,
                            'name' => $product
                        ),
                    ),
                    'customer_details' => array(
                        'first_name' => $username,
                        'email' => $email,
                        'phone' => $phone,
                    ),
                );

                $snapToken = \Midtrans\Snap::getSnapToken($params);
                //====================== Midtrans =============================

                
                // Kirim ke database
                $query = mysqli_query($cn,"insert into payment values ('$snapToken',DEFAULT,'$userID','pending','$idProduct',1,'$email','$pw', '$req', '$note', 'none', 'none', '$phone')");
                if($query){
                    header("Location: orderjoki.php?token=$snapToken");
                }else{
                    $pesan = mysqli_error($cn);
                    header("Location: orderjoki.php?pesan$pesan");
                }
                
                exit();
                

            }
        }
    }

    header("location:orderjoki.php?pesan=kosong");


?>