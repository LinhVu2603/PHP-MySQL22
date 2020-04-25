<?php 
	require_once "Connection.php"; 
	class Model{
		public $table;
		public $conn;
		private $query = [
			"SELECT" => "",
			"WHERE" => "",
			"GET" => "",
			"ORDERBY" => ""
		];
		//SELECT id,name:
		protected function select($column = ["id","name"]){
			if (empty($column)) {
				$this->query["SELECT"] = "*";
				return $this;
			} else{
				foreach ($column as $key => $value) {
					$this->query["SELECT"].=$value .",";
				}
				$this->query["SELECT"] = substr_replace($this->query["SELECT"],"",-1);
			}
			return $this;
		}

		//SELECT id, name FROM users WHERE email = "abcs" AND status = 1
		protected function where($condition = ["email"=>"asbcasnd","status"=>1]){
			foreach ($conditions as $key => $condition) {
				if (is_array($condition)) {
					$this->query["WHERE"] = implode(" ", $condition) . "and";
				} else{
					$this->query["WHERE"].= $key . " = " . $condition . " and";
				}
			}
			$this->query["WHERE"] = substr($this->query["WHERE"],0,-3);
			return $this;
		}

		protected function get(){
			$query = "";
			if ($this->query["SELECT"] == "" || $this->query["SELECT"]  == "*") {
				$query .= "SELECT *";
			}
			$query .= "FROM " . $this->table;
			if ($this->query["WHERE"] != "") {
				$query .= "WHERE" . $this->query["WHERE"];
			}

			$result = $this->conn->query($query);
			$data = [];
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}

		function __construct(){
			$connection = new Connection();
			$this->conn = $connection->conn;
		}
		function getAll(){
			$query = "SELECT * FROM $this->table";
			$result = $this->conn->query($query);
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
		function getById($id){
			$query = "SELECT * FROM $this->table WHERE id = " . $id;
			$result = $this->conn->query($query);
			$data = $result->fetch_assoc();
			return $data;
		}
		function store($data){
			$query = "INSERT INTO $this->table(";
			foreach ($data as $key => $value) {
				$query .= $key . ",";
			}
			$query = substr_replace($query, ")", -1);
			$query .= " VALUES (";
			foreach ($data as $value) {
				$query .= "'" . $value . "'" . ",";
			}
			$query = substr_replace($query, ")", -1);
			$result = $this->conn->query($query);
			return $result;
		}
		function update($data, $id){
			$query = "UPDATE $this->table SET ";
			foreach ($data as $key => $value) {
				$query .= $key . "=" . "'" . $value . "'" . ",";
			}
			$query = substr_replace($query, "", -1);
			$query .= " WHERE id = " . $id;
			$result = $this->conn->query($query);
			return $result;
		}
		function destroy($id){
			$query = "DELETE FROM $this->table WHERE id = " . $id;
			$result = $this->conn->query($query);
			return $result;
		}
	}
 ?> 