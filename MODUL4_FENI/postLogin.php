<?php
if (!isset($_SESSION)) {
    session_start();
}
if(isset($_POST['remember'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    setCookie("Email", $email, time()+3600);
    setCookie("Password", $password, time()+3600);
}
$connect=mysqli_connect("localhost:3307", "root", "", "wad_modul4_feni");
$email=$_POST['email'];
$password=$_POST['password'];
$dt_nama = "SELECT * FROM users_feni WHERE email='$email'";
$executeQuery = mysqli_query($connect, $dt_nama);

if (mysqli_num_rows($executeQuery)>0){
    $result = mysqli_fetch_assoc($executeQuery);
    $result_check = $result['password'];

    if ($password == $result_check){
        $_SESSION['Login'] = TRUE;
        $_SESSION['nama'] = $result['nama'];
        $_SESSION['uid'] = $result['id'];
        $_SESSION['Login'] = 'Anda Berhasil Login !';
        header('location:HomeSetelahLogin.php');
        exit();
    }else {
        $_SESSION['message-error'] = 'Password Anda Salah, Silahkan Coba Lagi!';
        header('location:Login.php');
        exit();
    }
}
$_SESSION['message-error'] = "Gagal Login";
header('location:Login.php');
exit();

?>