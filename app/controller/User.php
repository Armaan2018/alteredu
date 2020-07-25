<?php 

  namespace Edu\board\controller;
  
  use Edu\board\support\Database;




  /**
   * user management
   */

  class User Extends Database



  {








public function passwordChange($user_id,$new_pass)
{

  

  $this -> update('user', $user_id ,[

         'pass'  => password_hash( $new_pass, PASSWORD_DEFAULT),




  ]);


  return "<p class=\"alert alert-danger\">password changed! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";





}









  }











 ?>