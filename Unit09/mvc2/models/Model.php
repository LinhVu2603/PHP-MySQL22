<?php 
require_once("Connection.php");
class Model {
	protected $table;
	protected $conn;
	public $connection;
	public function __construct(){
		$servername = 'localhost';
		$username = 'root';
		$password = "";
		$dbname = "php_blog1";

		$conn = new mysqli($servername,$username,$password,$dbname);

		if ($conn->connect_errno) {
			echo "Failed to connect to MySQL:".$conn->connect_errno;
			exit();
		}
		$this->connection = $conn;
		// $this->$conn = $table;
		$connection = new Connection();
		$this->conn = $connection->conn;
	}

	public function create($data){
		$query = " INSERT INTO $this->table (";
		foreach ($data as $key => $value) {
			$query .= $key . ",";
		}
		$query = substr_replace($query,")",-1);
		$query .= " VALUE (";
		foreach ($data as $key => $value) {
			$query .= "'".$value."'" . ",";
		}
		$query = substr_replace($query,")",-1);
		$result = $this->connection->query($query);
		return $result;
	}
	public function update($data,$id){
		$query = "UPDATE $this->table SET ";
		foreach ($data as $key => $value) {
			$query .= $key ." = '".$value."',";
		}
		$query = substr_replace($query,"", -1);
		$query .= " WHERE id = ".$id;
		$status = $this->connection->excute($query);
		return $status;
	}
	// public function update($data,$id){
	// 	$query = "UPDATE $this->tabl SET name='".$data['name']."' ,description='".$data['description']."' WHERE  id = ".$id;
	// 	// echo $query;
	// 	$status = $this->connection->query($query);
	// 	return $status;
	// }
	public function delete($id){
		$query = "DELETE FROM $this->table WHERE id = ".$id;
		return $query;
	}
	public function getAll(){
		$query = "SELECT * FROM ".$this->table;
		$result  =$this->connection->query($query);

		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	public function getID($id){
		$query = "SELECT * from $this->table WHERE id = ".$id;
		$result = $this->connection->query($query);

		$data = $result->fetch_assoc();
		return $data;
	}	
}
?>