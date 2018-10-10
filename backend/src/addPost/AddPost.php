<?php

session_start();

class AddPost
{
    public $id = '';
    public $shopName = '';
    public $ProductName = '';
    public $place = '';
    public $price = '';

    public function setData($data)
    {
        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }

        if (array_key_exists('shopName', $data)) {
            $this->shopName = $data['shopName'];
        }

        if (array_key_exists('ProductName', $data)) {
            $this->ProductName = $data['ProductName'];
        }

        if (array_key_exists('place', $data)) {
            $this->place = $data['place'];
        }

        if (array_key_exists('price', $data)) {
            $this->price = $data['price'];
        }
        return $this;

    }


    public function store()
    {


        try {
            $pdo = new PDO('mysql:host=localhost;dbname=foodiez', 'root', '');

            $query = "INSERT INTO `addpost` (`id`, `shop_name`, `Product_Name`, `place`, `price`) VALUES (:id, :shop_Name, :productName, :place, :price)";

            $stmt = $pdo->prepare($query);
            $stmt->execute(array(
                ':id' => null,
                ':shop_Name' => $this->shopName,
                ':productName' => $this->ProductName,
                ':place' => $this->place,
                ':price' => $this->price,
            ));


            if ($stmt) {
                session_start();
                $_SESSION['msg'] = "<h2 style='color: green'>Value Added Successfully</h2>";
                header('location:addPost.php');
            }

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function index()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=foodiez', "root", "");
            $query = "SELECT * FROM `addpost`";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function search($key ='')
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=foodiez', "root", "");
            $query = "SELECT * FROM `addpost` WHERE product_Name LIKE'%$key%'";

//            echo $query;
//            die();

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function show()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=foodiez', "root", "");
        $query = "SELECT * FROM `addpost` WHERE id=$this->id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

    public function delete()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=foodiez', "root", "");
        $query = "DELETE FROM `addpost` WHERE `addpost`.`id` = $this->id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();

        if ($stmt) {
            session_start();
            $_SESSION['msg'] = "<h2>Successfully Deleted</h2>";
            header('location:../show/show.php');
        }
    }

    public function update()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=foodiez', "root", "");
            $query = "UPDATE `addpost` SET shopName = :shopName, Product_Name = :product, place = :place, price = :price WHERE id = :id";
            $stmt = $pdo->prepare($query);
            $stmt->execute(array(
                ':id' => $this->id,
                ':shopName' => $this->shopName,
                ':product' => $this->ProductName,
                ':place' => $this->place,
                ':price' => $this->price,
            ));

            if ($stmt) {
                session_start();
                $_SESSION['msg'] = "<h2 style='color: green'>Value Added Successfully</h2>";
                header('location:../../views/addPost/addPost.php');
            }

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}







