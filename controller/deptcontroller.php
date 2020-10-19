<?php
    include_once("model/department.php");
    class DeptController extends Department{
        public function createDepartment($name,$email,$phone){
            if ($this->add($name,$email,$phone)){
                return true;
            }
            else {
                return false;
            }
        }
    }
?>