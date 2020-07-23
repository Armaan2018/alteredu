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


	



}













 ?>