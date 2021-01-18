<?php 
require_once ("class/DBController.php");

class Attendance {
	private $db_handle;

	function __construct(){
		$this->db_handle = new DBController();
	}

	function addAttendance($attendance_date, $student_id, $present, $absent){
		$query = "INSERT INTO Attendance (attendance_date, Student_id, present, absent) VALUES (?, ?, ?, ?)";
		$paramType = "siii";
		$paramValue = array(
			$attendance_date,
			$student_id,
			$present,
			$absent
		);
		$insertId = $this->db_handle->insert($query, $paramType, $paramValue);
		return $insertId;
	}

	function deleteAttendanceByDate($attendance_date){
		$query = "DELETE FROM Attendance WHERE attendance_date";
		$paramType = "s";
		$paramValue = array(
			$attendance_date
		);
		$this->db_handle->update($query, $paramType, $paramValue);
	}

	function getAttendanceByDate($attendance_date){
		$query = "SELECT * FROM Attendance LEFT JOIN Students ON Attendance.attendance_date = Students.id WHERE attendance_date = ? ORDER BY Student_id";
		$paramType = "i";
		$paramValue = array(
			$attendance_date
		);

		$result = $this->db_handle->runQuery($query, $paramType, $paramValue);
		return $result;
	}

	function getAttendance(){
		$sql = "SELECT id, attendance_date, sum(present) as present, sum(absent) as absent FROM Attendance GROUP BY attendance_date";
		$result = $this->db_handle->runBaseQuery($sql);
		return $result;
	}
}
?>