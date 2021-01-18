<?php
require_once ("class/DBController.php");

class Student
{
	private $db_handle;
	function __construct()
	{
		$this->db_handle = new DBController();
	}

	function addStudent($name, $roll_number, $dob, $class){
		$query = "INSERT INTO Students (name, roll_no, DOB, class) values (?, ?, ?, ?)";
		$paramType = "siss";
		$paramValue = array(
			$name,
			$roll_number,
			$dob,
			$class
		); 
		$insertId = $this->db_handle->insert($query, $paramType, $paramValue);
		return $insertId;
	}

	function editStudent($name, $roll_numberm, $dob, $class){
		$query = "UPDATE Students SET name = ?, roll_no = ?, DOB = ?, class = ? WHERE id = ?" ;
		$paramType = "sissi";
		$paramValue = array(
			$name,
			$roll_number,
			$dob,
			$class,
			$Student_id
		);
		$this->db_handle->update($query, $paramType, $paramValue);
	}

	function deleteStudent($student_id){
		$query = "DELETE FROM Students WHERE id = ?";
		$paramType = "i";
		$paramValue = array(
			$student_id
		);
		$this->db_handle->delete($query, $paramType, $paramValue);
	}

	function getStudentById($student_id){
		$query = "SELECT * FROM Students WHERE id = ?";
		$paramType = "i";
		$paramValue = array(
			$student_id
		);
		$this->db_handle->runQuery($query, $paramType, $paramValue);
		return $result;
	}
	function getAllStudent(){
		$sql = "SELECT * FROM Students ORDER BY id";
		$result = $this->db_handle->runBaseQuery($sql);
		return $result;
	}
}
?>