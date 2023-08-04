<?php
require_once APP_ROOT.'/app/models/Employee.php';
class EmployeeService{
    public function getAllEmployees(){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if ($conn != null){
            $sql = "SELECT * FROM employees";
            $stmt = $conn->query($sql);

            $employees = [];
            while ($row = $stmt->fetch()){
                $employee = new Employee($row['id'], $row['name'], $row['address'], $row['salary']);
                $employees[] = $employee;
            }
            return $employees;
        }
    }
}