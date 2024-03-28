<?php
if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if($email === 'admin@gmail.com' && $password === 'admin') {
        header('Location: dashboard.php');
        exit;
    } else {
        header('Location: login-layout.php?error=true');
        exit;
    }
} else {
    header('Location: login-layout.php');
    exit;
}
?>