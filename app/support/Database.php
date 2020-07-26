<?php 



namespace Edu\board\support;



use PDO;



/**
 * Database management
 */
abstract class Database
{

	/**
	 * server information
	 */

	private $host = HOST;
	private $user = USER;
	private $pass = PASS;
	private $db   = DB;
	private $connection;

	/**
	 * Database connection through PDO
	 */


	private function connection()
	{
          

       return $connection = new PDO("mysql:host=".$this -> host.";dbname=".$this -> db ,$this -> user , $this -> pass);

	}



	/**
	 * data email check
	 */


	public function dataCheck($tbl,$data){



		$stmt = $this -> connection() -> prepare("SELECT * FROM $tbl WHERE uname = '$data' || email = '$data'");

			$stmt -> execute();


			$num = $stmt->rowCount();


			return[

                     'num' =>  $num,
                     'data' => $stmt



			];



	}





/*
   //update method
  public function update($tbl ,$id, array $data)
  {
      $query_string = '';

  	foreach($data as $key => $val) {
  		

             $query_string .= "$key = '$val', "; 



  	}

  	$query_array = explode(' ', $query_string);

    array_pop($query_array);
    array_pop($query_array);


  $final_query_string = implode(' ', $query_array);

  $stmt =  $this -> connection() -> prepare("UPDATE $tbl SET $final_query_string WHERE id='$id' ");



  $stmt -> execute();



  }


*/









		public function update($tbl, $id, array $data)
		{
			$query_string = '';
			foreach($data as $key => $val){

				$query_string .= "$key = '$val' , ";

			}

			$query_array = explode(' ', $query_string);
			array_pop($query_array);
			array_pop($query_array);

			$final_query_string =  implode(' ', $query_array);

			$stmt = $this -> connection() -> prepare("UPDATE $tbl SET $final_query_string WHERE id='$id' ");
			$stmt -> execute();

		}























 public function dataCheckPro($tbl,array $data,$condition = 'AND')

  {

            $query_string = '';
    foreach ($data as $key => $val) {


    
              $query_string .= $key . "='$val' AND ";


    }


  $query_array = explode(' ', $query_string);

    array_pop($query_array);
    array_pop($query_array);


    $finl_query_string = implode(' ', $query_array);









  			$stmt = $this -> connection() -> prepare("SELECT * FROM $tbl WHERE $finl_query_string");

			$stmt -> execute();


			

       

  }




  







	



}













 ?>