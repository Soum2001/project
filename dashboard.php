<?
include 'connection.php';
include 'modal.php';
$table = $h->table('user_details');
$query1=$table->select()->get();
?>
<html>
    <head>
         <!-- CSS only -->
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="assest/css/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="assest/css/adminlte.min.css">
        <link rel="stylesheet" href="assest/css/icheck-bootstrap.min.css">

    </head>
    <body>
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                     <button type="button" class="btn btn-primary" id="add" name="add">ADD</button>
                <li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                <li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Contact</a>
                <li>
            </ul>
        </nav>
        <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">User Details</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <form>
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>phone number</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>    
                                    </thead>
                                    <tbody>
                                        <?
                                         foreach ($query1 as $data)
                                         {
                                        ?>  
                                        <tr>
                                            <td><?echo $data['id']?></td>
                                            <td><?echo $data['user_name']?></td>
                                            <td><?echo $data['email']?></td>
                                            <td><?echo $data['phone_no']?></td>
                                            <td><?echo $data['address']?></td>
                                            <td>
                                                <i class="fas fa-edit" id="edit" onclick="edit_data('<?=$data['id']?>')"></i>
                                                <i class="fas fa-trash" id="delete" onclick="delete_data('<?=$data['id']?>')"></i>
                                            </td>
                                        </tr>  
                                        <?
                                        }
                                        ?>  
                                    </tbody>
                                </table>
                                </form>
                            <div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="" class="img-circle elevation-2">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Soumya Samantaray</a>
                    </div>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                          Tables
                          <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block;">
                        <li class="nav-item menu-is-opening menu-open">
                            <li class="nav-item">
                                <a href="dashboard.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>user_detais Table</p>
                                </a>
                            </li>
                        </li>
                    </ul>
                    </li>
                </ul>
            </nav>
        </aside>
        
    </div>
    
        <!-- jQuery -->
        <script src="assest/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assest/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assest/dist/js/adminlte.min.js"></script>
        <script src="assest/js/login_validation.js"></script>
        <script src="register.js"></script>
            
    </body>
</html>