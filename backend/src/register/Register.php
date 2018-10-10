<?php
session_start();
class Register
{
    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $pass = '';
    public $con_pas = '';

    public function setData($data)
    {

        $this->first_name = $data['first_name'];

        $this->last_name = $data['last_name'];

        $this->email = $data['email'];

        $this->pass = $data['pass'];

        $this->con_pas = $data['con_pas'];

    }

    public function getData()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=foodiez', 'root', '');
            $query = "INSERT INTO `register` (`id`, `first_name`, `last_name`, `email`, `password`, `confirm_password`) VALUES (:id, :first_name, :last_name, :email, :password, :confirm_password)";
            $stmt = $pdo->prepare($query);
            $stmt->execute(array(
                ':id' => null,
                ':first_name' => $this->first_name,
                ':last_name' => $this->last_name,
                ':email' => $this->email,
                ':password' => $this->pass,
                ':confirm_password' => $this->con_pas,
            ));
            if($stmt){
                $_SESSION['msg'] = "<h2 style='color: green'>Successfully registered!!</h2>. ";
                header('location:create.php');
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}