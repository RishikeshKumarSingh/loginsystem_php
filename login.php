<?php include "dbConfig.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
        
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container">
                        <a href="" class="navbar-brand">Login Here</a>
                </div>
        </nav>

        <div class="container">
                <div class="row">
                        <div class="col-5 mx-auto">
                                <div class="card mt-5">
                                        <div class="card-body">
                                                <form action="" method="post">
                                                        <div class="mb-3">
                                                                <label for="">Username/Email</label>
                                                                <input type="email" name="email" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                                <label for="">Password</label>
                                                                <input type="password" name="password" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                                <input type="submit" name="create" class="btn btn-primary">
                                                        </div>
                                                </form>
                                                <?php
                                                if (isset($_POST['create'])) {
                                                        $email = $_POST['email'];
                                                        $password = $_POST['password'];
                                                        $query = mysqli_query($connect, "select * from accounts where email='$email' AND password='$password'");


                                                        $count = mysqli_num_rows($query);
                                                       
                                                        if($count > 0){

                                                                $_SESSION['user'] = $email;
                                                               echo "<script>window.open('secure.php','_self')</script>";
                                                        }
                                                        else{
                                                                echo "<script>alert('username & password is incorrect')</script>";
                                                        }
                                                }
                                                ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</body>
</html>