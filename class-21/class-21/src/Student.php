<?php
namespace Pondit;
use PDO;
use PDOException;

class Student 
{
    private $conn = '';
    public $firstName = '';
    public $lastName = '';

    public function __construct()
    {
        try {
            session_start();
            // do what you want……!
            $this->conn = new PDO("mysql:host=localhost;dbname=seip_b1","root", "1111");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
            // echo 'Database connected';
        } catch(PDOException $e){
            // echo 'Failed to connect database';
            echo $e->getMessage();
        }

    }

    public function index()
    {
        $sql = 'SELECT * FROM `students`';
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function setData(array $data = [])
    {

        $errors = [];

        if(array_key_exists('first_name', $data) && !empty($data['first_name'])){
            $this->firstName = $data['first_name'];
        }else{
            $errors[] = 'first name required';
        }

        if(array_key_exists('last_name', $data) && !empty($data['last_name'])){
            $this->lastName = $data['last_name'];
        }else{
            $errors[] = 'last name required';
        }

        if(count($errors)){
            $_SESSION['errors'] = $errors;
            header('location: create.php');
        }else{
            return $this;
        }

    }

    public function store()
    {
        try{
            $query ="INSERT INTO students(first_name, last_name) VALUES(:firstName , :lastName)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                ':firstName' => $this->firstName,
                ':lastName' => $this->lastName
            ));
    
            $_SESSION['message'] = 'Successfully Created !';

            header('Location:index.php');
        } catch (PDOException $e){
            echo $e->getMessage();
        }
       
    }


    public function show($id)
    {
        $sql = 'SELECT * FROM `students` WHERE id='.$id;
        $stmt = $this->conn->query($sql);
        return $stmt->fetch();
    }

    
    public function update($id)
    {
        $query ="UPDATE students SET first_name=:firstName, last_name=:lastName where id = ".$id;

        $stmt = $this->conn->prepare($query);

        $stmt->execute(array(
            ':firstName' => $this->firstName,
            ':lastName' => $this->lastName
        ));
        $_SESSION['message'] = 'Successfully Updated !';
        header('Location:index.php');
    }

    public function delete($id)
    {
        $query ="delete from students where id=".$id;
        $stmt = $this->conn->query($query);
        $stmt->execute();

        $_SESSION['message'] = 'Successfully Deleted !';

        header('Location:index.php');
    }


}