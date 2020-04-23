<?php
session_start();
include '../Login.php';

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT Id, username FROM Login
            WHERE username='$username' AND password='$password'";
    $res = mysqli_query($Login, $sql);

    $count = mysqli_affected_rows($Login);
    if($count == 1)
    {
        $data_login = mysqli_fetch_assoc($res);
        
        $_SESSION['username'] = $username['username']; 
        //nilainya digunakan waktu insert peminjaman
        
        $_SESSION['password'] = $data_login['password']; 
        //nilainya bisa digunakan di navbar, mis. 'Hai, [nama_petugas]'

        header("Location: http://localhost/Project%20Tugas%20Akhir/Covid-19.html");
    }
    else
    {   
        header("Location: http://localhost/Project%20Tugas%20Akhir/Covid-19.html");
    }

}
?>