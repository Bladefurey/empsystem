<?php
include_once('includes/dbcon.php');
class department{

    private $id;
    private $dept_name;
    private $email;
    private $phone;
    private $pdo;
    public function __construct(){

    }
    public function getId(){
        return $this->id;
    }
    public function setDept_name($dept_name){
        $this->dept_name=$dept_name;
    }
    public function getDept_name(){
        return $this->dept_name;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setPhone($phone){
        $this->phone=$phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function add($name,$email,$phone){
        $this->dept_name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="insert into department(department_name,email,phone) values(:name,:email,:phone)";
        $stmt=$this->pdo->prepare($sql);
        $stmt->bindParam(':name',$this->dept_name);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':phone',$this->phone);
        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }
    }
}
?>