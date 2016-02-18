<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=shopping_cart', 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

if($_POST) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "First Name: " . $name;
    echo "email: " . $email;
    if ($email != '' && $fname != '' && $lname != ''$password != ''&&  ) {


        print_r($_POST);

        $sql = "INSERT INTO login ('First_Name', 'Last_Name', Email, Password)
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
        } else {

        }
    }
}
?>



   <form action="SignupProcess.php" method="post">
    First Name: <input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    E-mail: <input type="text" name="email"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Submit">
</form>
