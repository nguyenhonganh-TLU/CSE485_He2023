<?php
class Employee{
    private $id;
    private $fullname;
    private $address;
    private $salary;
    public function __construct($id, $fullname, $address, $salary){
        $this->id = $id;
        $this->fullname = $fullname;
        $this->address = $address;
        $this->salary = $salary;
    }
    public function getId(){
        return $this->id;
    }
    public function setid($id){
        $this->id = $id;
    }

    public function getFullname(){
        return $this->fullname;
    }
    public function setFullname($fullname){
        $this->fullname = $fullname;
    }

    public function getAddress(){
        return $this->address;
    }
    public function setAddress($address){
        $this->address = $address;
    }

    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
}