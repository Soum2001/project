
<html>
    <head>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="assest/css/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="assest/css/adminlte.min.css">
        <link rel="stylesheet" href="assest/css/icheck-bootstrap.min.css">
        <style>
          .errorMsg{border:1px solid red; }
          .message{color: red; font-weight:bold; }
        </style>
    </head>
    <body class="register-page">
      <?
      if(isset($_GET['response'])){
        ?>
        <p class='message'><?php echo $_GET['response'] ?></p>
        <?
      }
      ?>
        <div class="login-box">
        <div class="card-body">
        <div class="card card-outer card-primary">
            <div class="card-hearder text-center">
                <b>ADMIN</b>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="check.php" method="POST">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" class="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <small id="emailvalid" class="form-text
                        text-muted invalid-feedback">
                                Your email must be a valid email
                            </small> 
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" class="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <h5 id="passcheck" style="color: red;">
                        **Enter a password
                    </h5>
                    <div class="row">
                        <div class="col-8">
                        <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                        Remember Me
                        </label>
                        </div>
                        </div>
                        
                        <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
                        </div>
                        
                    </div>
                </form>
                <p class="mb-0">
                    <a href="register.php" class="text-center">Register a new membership</a>
                </p>
            </div>  
        </div>
        </div>
        </div>
        <!-- jQuery -->
        <script src="assest/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assest/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assest/dist/js/adminlte.min.js"></script>
        <script src="assest/js/login_validation.js"></script>
            
    </body>
</html>