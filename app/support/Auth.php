<?php 



namespace Edu\board\support;

use PDO;
use Edu\board\support\Database;





/**
 * authentication management
 */
class Auth extends Database
{
	 public function UserLoginSystem($emailuser,$password){

	 	

	 	      $data = $this -> emaitUserCheck($emailuser);

	 	      //data catching from database

              $num             = $data['num'];
	 	      $login_user_data = $data['data']->fetch(PDO::FETCH_ASSOC);


	 	      if ($num == 1) {

	 	      	if (password_verify($password,$login_user_data['pass'])) {

	 	      		$_SESSION['id']     = $login_user_data['id'];
	 	      		$_SESSION['name']   = $login_user_data['name'];
	 	      		$_SESSION['photo']  = $login_user_data['photo'];
	 	      		$_SESSION['email']  = $login_user_data['email'];
	 	      		$_SESSION['role']   = $login_user_data['role'];

	 	      		header("Location:dashboard.php");
	 	      		 
	 	      	}else{
	 	      		return "<p class=\"alert alert-danger\">Password is incorrect! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
	 	      	}


	 	           
	 	      }else{

	 	      	return "<p class=\"alert alert-danger\">Email or username incorrect! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
	 	      }





	 }



	 public function emaitUserCheck($emailuser){

             return $data =  $this -> dataCheck('user',$emailuser);


	 }

}






 ?>