<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>
    <div style="text-align: center;">
    <?php
    $u = $_POST['login'];
    $p = $_POST['pwd'];
    if($u == "admin" && $p == "ad1234"){
        $_SESSION['usename'] = 'admin';
        $_SESSION['role'] = 'a';
        $_SESSION['id'] = session_id();
        header("Location:index.php");
        die();
    }
    else if($u == "member" && $p == "mem1234"){
        $_SESSION['usename'] = 'member';
        $_SESSION['role'] = 'm';
        $_SESSION['id'] = session_id();
        header("Location:index.php");
        die();
    }
    else{
        $_SESSION['error'] = 'error';
        header("Location:login.php");
        die();
    }
    ?>
        
    </div>
  
</body>

</html>