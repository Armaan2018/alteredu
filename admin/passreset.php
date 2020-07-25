
<?php  include_once 'templates/header_part.php';  ?>



<?php 
use Edu\board\controller\User;





$user = new User;


 ?>
 
 <?php include_once 'templates/aside.php';  ?>



                                        <!-- /.aside -->
                                        <section id="content">
                                            <section class="hbox stretch">





<?php 




if (isset($_POST['passchange'])) {
	 $old_pass = $_POST['old_pass'];
	 $new_pass = $_POST['new_pass'];
	 $con_pass = $_POST['con_pass'];
	 $user_id  = $_SESSION['id'];




	 



	 //old pass




	 if ($new_pass == $con_pass) {
	 	$cpass = true;
	 }else{
	 	$cpass = false;
	 }

     //old pass check

     if (password_verify($old_pass, $_SESSION['pass'])) {
        $old_pass_check = true;
     }else{
         $old_pass_check = false;  
     }


	 if (empty($old_pass) || empty($new_pass) || empty($con_pass)) {
	 	 
           $msg = "<p class=\"alert alert-danger\">Fields must not be empty ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

	 }elseif($cpass == false){
	 	$msg = "<p class=\"alert alert-danger\">confirm password not matched ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

	 }elseif($old_pass_check == false){

         $msg = "<p class=\"alert alert-danger\">old password not matched ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

     }

     else{



        $msg = $user -> passwordChange($user_id,$new_pass);


        

	 


	 }
}


 ?>




                                                <!-- main content-->



<div class="col-sm-6">


	<?php 

           if (isset($msg)) {
           	echo $msg;
           }



	 ?>
    <section class="panel panel-default">
        <header class="panel-heading font-bold">Basic form</header>
        <div class="panel-body">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group"><label>Old Password</label> <input type="password" name="old_pass" class="form-control" placeholder="Enter email" /></div>
                <div class="form-group"><label>New Password</label> <input type="password" name="new_pass" class="form-control" placeholder="Enter email" /></div>
                <div class="form-group"><label>Confirm Password</label> <input type="password" name="con_pass" class="form-control" placeholder="Enter email" /></div>

             
                <button type="submit" name="passchange" class="btn btn-sm btn-default">Submit</button>
            </form>
        </div>
    </section>
</div>








                                                
                                                 <!-- main content-->










 <?php include_once 'templates/footer_part.php';  ?>





































                                                <!-- side content -->
         