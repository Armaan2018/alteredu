
<?php 
    

    require_once "../config.php";
    require_once "../vendor/autoload.php";


 ?>


<?php 

 use Edu\board\support\Auth;

 $auth = new Auth;



 ?>




<!DOCTYPE html>
<html lang="en" class=" ">
    <!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Education Board Result</title>
        <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
        <!--[if lt IE 9]>
            <script src="js/ie/html5shiv.js"></script>
            <script src="js/ie/respond.min.js"></script>
            <script src="js/ie/excanvas.js"></script>
        <![endif]-->
    </head>
    <body class="">



<?php 


   if (isset($_POST['login'])) {
       $emailuser = $_POST['email_user'];
       $password  = $_POST['password'];


       if (empty($emailuser) || empty($password)) {
           
           $msg = "<p class=\"alert alert-danger\">Fields must not be empty ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
       }else{


         $msg = $auth -> UserLoginSystem($emailuser,$password);



       }


   }





 ?>








        <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
            <div class="container aside-xl">









                <a class="navbar-brand block" href="index.html">Admin - Login</a>
                <section class="m-b-lg">
                    <header class="wrapper text-center"><strong>Sign in to get in touch</strong></header>


                    <?php 


                            if (isset($msg)) {
                                 
                                 echo $msg;
                            }

                     ?>




                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="list-group">
                            <div class="list-group-item"><input type="text" name="email_user" placeholder="Email" class="form-control no-border" /></div>
                            <div class="list-group-item"><input type="password" name="password" placeholder="Password" class="form-control no-border" /></div>
                        </div>
                        <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Sign in</button>
                 
                 

                    </form>




                </section>
            </div>
        </section>
        <!-- footer -->
        <footer id="footer">
            <div class="text-center padder">
                <p>
                    <small>
                        Web app framework base created by Armaan<br />
                        &copy; 2020
                    </small>
                </p>
            </div>
        </footer>
        <!-- / footer -->
        <!-- Bootstrap -->
        <!-- App -->
        <script src="js/app.v1.js"></script>
        <script src="js/app.plugin.js"></script>
    </body>
    <!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->
</html>
