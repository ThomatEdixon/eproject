<?php
    //require_once 'connect.php';
    $errors = [];
    if(isset($_POST['login'])){
        $username = htmlspecialchars($_POST['username']);
        $conn->real_escape_string($username);
        $password = htmlspecialchars($_POST['password']);
        $conn->real_escape_string($password);
        if(empty($username)){
            $errors['username'] = 'Username is required';
        }
        if(empty($password)){
            $errors['password'] = 'Password is required';
        }
        if(count($errors) == 0){
            $sql = "SELECT * FROM my_db_user where username='$username' and password=sha1('$password')";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                echo " Chao mung $username ";
            }
            else{
                $errors['login'] = "Tên người dùng hoặc mật khẩu không hợp lệ";
            }
        }
    }
?>
<div class="login">
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="../public/image/image-use-layout/login.png"
              class="img-fluid" alt="Phone image">
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 ">
            <form method="POST" class="login-form">
              <div class="form-login-container">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 ">Login </p>
                <div class="form-outline mb-4">
                  <input type="email" id="form1Example13" required name="email" placeholder="Email address"class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example23" required name="password" placeholder="Password" class="form-control form-control-lg" />
                </div>
  
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label label-checkbox" for="form1Example3"> Remember me </label>
                  </div>
                  <div class="forgot">
                    <a href="#!" >Forgot password?</a>
                  </div>
                </div>
                <div class = "d-flex align-items-center justify-content-center">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </div>
  
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>
  
                <div class="d-flex align-items-center justify-content-center" >
                  <a class="btn btn-primary icon" style="background-color: #3b5998" href="#!"
                    role="button">
                    <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                  </a>
                  <a class="btn btn-primary icon"  style="background-color: #55acee" href="#!"
                    role="button">
                    <i class="fab fa-twitter me-2"></i>Continue with Twitter
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>