<?php


try {
    $dbh = new PDO('mysql:host=localhost;dbname=shopping_cart', 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>

<!DOCTYPE html>
<html>
<h1> Art Shop </h1>

<head>
    <title>Art Shop</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">

</head>

<body background="http://static.tumblr.com/94bee9a368dc93abfa16573ec738cbb6/rwfvryu/0A7o1lwz5/tumblr_static_egufvnmqftw04gc4c04c4g8sc.jpg">

<div id="content">

    <div id="header">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active" onclick="homePage()"><a href="#">Home</a></li>
            <li role="presentation" onclick="cartPage()"><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
            <li role="presentation" onclick="signPage()"><a href="#">Sign Up</li>
        </ul>
    </div>
    <div id="home">
        <table border="3px" style="text-align: center; margin-left: auto; margin-right: auto;">
            <tr>
                <td> <img src="http://g02.a.alicdn.com/kf/HTB1H_7vIFXXXXXcXXXXq6xXFXXXY/Contemporary-font-b-art-b-font-font-b-boxer-b-font-by-Jean-Michel-Basquiat-Painting.jpg" width="300px" height="350px" onclick="Pic('http://g02.a.alicdn.com/kf/HTB1H_7vIFXXXXXcXXXXq6xXFXXXY/Contemporary-font-b-art-b-font-font-b-boxer-b-font-by-Jean-Michel-Basquiat-Painting.jpg'); cartPage(); product()" </td>
                <td> <img src="http://guyhepner.com/wp-content/uploads/2015/06/Andy-Warhol-money.jpg" width="300px" height="350px" onclick="Pic('http://guyhepner.com/wp-content/uploads/2015/06/Andy-Warhol-money.jpg'); cartPage();"/></td>
                <td> <img src="http://media1.fdncms.com/sfweekly/imager/untitled-by-keith-haring/u/zoom/3250102/art1-untitled_keithharing.jpg" width="300px" height="350px" onclick="Pic('http://media1.fdncms.com/sfweekly/imager/untitled-by-keith-haring/u/zoom/3250102/art1-untitled_keithharing.jpg'); cartPage();"/></td>
            </tr>

            <tr>
                <td>Jean Michell Basquiat - (Boxer) 1982 - $13,522,500</td>
                <td>Andy Warhol - Dollar Signs 1982 - $6,000,000</td>
                <td>Keith Haring - Untitled 1980 - $4,589,000 </td>
            </tr>

            <tr>
                <td> <img src="https://blogs.baylor.edu/david_a_smith/files/2015/11/Rockwell-freedom-from-want-2fl28wn.jpg" width="300px" height="350px" onclick="Pic('https://blogs.baylor.edu/david_a_smith/files/2015/11/Rockwell-freedom-from-want-2fl28wn.jpg'); cartPage();" /></td>
                <td> <img src="https://s-media-cache-ak0.pinimg.com/564x/2a/03/d6/2a03d691890f7bcddb29b34cb61d37f5.jpg" width="300px" height="350px" onclick="Pic('https://s-media-cache-ak0.pinimg.com/564x/2a/03/d6/2a03d691890f7bcddb29b34cb61d37f5.jpg'); cartPage();"/></td>
                <td> <img src="https://upload.wikimedia.org/wikipedia/en/archive/b/bc/20131218192614!Old_guitarist_chicago.jpg" width="300px" height="350px" onclick="Pic('https://upload.wikimedia.org/wikipedia/en/archive/b/bc/20131218192614!Old_guitarist_chicago.jpg'); cartPage();"/></td>
            </tr>

            <tr>
                <td>Norman Rockwell - Freedom From Want 1943 - $20,000,000</td>
                <td>Banksy - Balloon Girl 2015 - $16,000</td>
                <td>Pablo Picasso - The Old Guitarist 1904 - $179m</td>
            <tr>

                <td> <img src="http://www.dalipaintings.net/images/paintings/lobster-telephone.jpg" width="300px" height="350px" onclick="Pic('http://www.dalipaintings.net/images/paintings/lobster-telephone.jpg'); cartPage();"/></td>
                <td> <img src="http://silverandexact.files.wordpress.com/2012/01/golconda-renc3a9-magritte-1953.jpg" width="300px" height="350px" onclick="Pic('http://silverandexact.files.wordpress.com/2012/01/golconda-renc3a9-magritte-1953.jpg'); cartPage();"/></td>
                <td> <img src="http://nsuartmuseum.org/wp-content/uploads/2015/01/4-0124-Self-Portrait-with-Monkeys-small-776x1030.jpg" width="300px" height="350px" onclick="Pic('http://nsuartmuseum.org/wp-content/uploads/2015/01/4-0124-Self-Portrait-with-Monkeys-small-776x1030.jpg'); cartPage();" /></td>

            </tr>

            <tr>
                <td>Salvador Dali - Lobster Telephone 1938 - $5,682,500</td>
                <td>Rene Magritte - Golconda 1953 - $600,000</td>
                <td>Frida Kahlo - Self-Portrait with Monkeys 1938 - $5.6m</td>

            </tr>







        </table>
    </div>

    <div id="cart">
        <h2>Checkout</h2>







    </div>


<br><br><br><br><br><br><br><br>
    <div id="signUp">Sign Up<form action="SignupProcess.php" method="post">
            First Name: <input type="text" name="fName"><br>
            Last Name: <input type="text" name="lName"><br>
            E-mail: <input type="text" name="email"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit">
        </form></div>

    </div>



<script src="scripts.js"></script>


</body>







</html>









