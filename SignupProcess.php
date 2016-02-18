<?php

if($_POST) {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=shopping_cart', 'root', 'root');
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "First Name: " . $name;
    echo "email: " . $email;

    print_r($_POST);

    $sql = "INSERT INTO Sign_Up (First_Name, Last_Name, Email, Password)
VALUES (:fName , :lName, :email, :password)";

    $stmt = $dbh->prepare($sql);
    $result = $stmt->execute(array(
        'fName' => $_POST['fName'],
        'lName' => $_POST['lName'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ));

    if ($result) {
        echo 'Thanks For Signing Up!';
        header('Location: ShoppingCart.php');
    }
}

