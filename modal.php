<html>
    <head>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="assest/css/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="assest/css/adminlte.min.css">
        <link rel="stylesheet" href="assest/css/icheck-bootstrap.min.css">
        <style>
        .register-box {
        width: 456px;
        }
        </style>
    </head>
    <body>
<!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="register-box">
                            <div class="register-logo">
                                <b>Registration Page</b>
                            </div>
                            <p class="login-box-msg">Register a new membership</p>
                            <form action="" method="POST" id="form" >
                                <input type="hidden" id="hidden_id" name="hidden_id">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Full name" id="username" name="username">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <small id="emailvalid" class="form-text text-muted invalid-feedback">
                                        Your email must be a valid email
                                    </small> 
                                </div>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" placeholder="address" id="address" name="address"></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="tel" class="form-control" placeholder="Mobile no" id="phn_no" name="phn_no">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                    <div class="input-group-append">
                                         <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <h5 id="passcheck" style="color: red;">
                                     **Enter a password
                                    </h5>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Retype password" id="re_password" name="re_password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <h5 id="conpasscheck" style="color: red;">
                                    **Please enter your password to confirm
                                    </h5>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                            
                                        </div>
                                    </div>   
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block" id="register" name="register" onclick="add()">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <!-- jQuery -->
        <script src="assest/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assest/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assest/dist/js/adminlte.min.js"></script>
        <script src="register.js"></script>
    </body>
</html>
