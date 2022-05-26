<?php include "dbConfig.php";

if(!isset($_SESSION['user'])){
        echo "<script>window.open('login.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>this is protected for authorized user only</title>
</head>
<body>
        <h1>Welcome, Genuine User...</h1>
        <p>This is protected page</p>
</body>
</html>