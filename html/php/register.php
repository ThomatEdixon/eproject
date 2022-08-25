<?php
    //require_once 'connect.php';
    $errors = [];
    if(isset($_POST['register'])){
        $username = htmlspecialchars($_POST['username']);
        $conn->real_escape_string($username);
        $email = htmlspecialchars($_POST['email']);
        $conn->real_escape_string($email);
        $password = htmlspecialchars($_POST['password']);
        $conn->real_escape_string($password);
        $confirmpassword = htmlspecialchars($_POST['confirmpassword']);
        $conn->real_escape_string($confirmpassword);
        if(empty($username)){
            $errors['username'] = 'Username is required';
        }
        if(empty($password)){
            $errors['password'] = 'Password is required';
        }
        if(empty($email)){
            $errors['email'] = 'Email is required';
        }
        if($password != $confirmpassword){
            $errors['password'] = 'Password not match';
        }
        $sql = "SELECT * FROM my_db_user WHERE username = '$username'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $errors['username'] = 'Username already exists';
        }
        if(count($errors) == 0){
            $sql = "insert into my_db_user values ('$username','$email',sha1('$password'))";
            $result = $conn->query($sql);
            if($result){
                header('Location: login.php');
            }else{
                $errors['db'] = 'Error creating user';
            }
        }
    }
?>
<div class="register">
    <form action="" method="post">
        <div class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>

                                        <form class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="username"id="form3Example1c" class="form-control" placeholder="Your Name" required />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="form3Example3c" name="email" class="form-control" placeholder="Your Email" required/>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4c" class="form-control" placeholder="Password" name="password" required/>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4cd" class="form-control" placeholder="Confirm Password" name="confirmpassword" required/>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                            <label class="form-check-label check" for="form2Example3">
                                            I agree all statements in <a href="#!" class="terms">Terms of service</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg" name="register">Register</button>
                                        </div>

                                        </form>

                                    </div>
                                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                        <img src="../public/image/image-use-layout/register.png" class="img-fluid" alt="Sample image">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>