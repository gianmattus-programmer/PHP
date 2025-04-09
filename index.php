<?php
 include "connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
     
        <div id="form">
            <table>
            <form action="" Method="POST">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="name" ></td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Número</td>
                    <td><input type="text" name="number"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
        </form>
        </table>
        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number= $_POST['number'];

    $insert = "insert into patel(name,email,password,number) VALUES ('$name','$email','$password','$number')";

    $sql = mysqli_query($con,$insert);
}

?>