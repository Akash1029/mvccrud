<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "welcome";
	private $database = "UserTable";
	private $conn;

	function __construct()
	{
		$this->conn = $this->connectDB();
	}

	function connectDB()
	{
		$conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
		return $conn;
	}
}