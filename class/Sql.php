<?php 

class Sql extends PDO {

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost:3307;dbname=dbphp7", "ErickN", "8e35m94G&");
	}

	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value){

			$this->setParam($statement, $key, $value);
		}
	}

	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);
	} 

	public function run($rawRun, $params = array()){

		$stmt = $this->conn->prepare($rawRun);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;


		}

	public function select($rawRun, $params = array()):array{

			$stmt = $this->run($rawRun, $params);

			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
}



 ?>