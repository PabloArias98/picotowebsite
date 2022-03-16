<html>
<head>
    <title>
        Recibo de datos
    </title>
</head>
<?php
$name = $_POST['firstname'];
$lastname=$_POST['lastname'];
$email = $_POST['email'];
$country = $_POST['country'];
$subject = $_POST['subject'];
?>

<body>
Bienvenido <?php echo $_POST["name"]; ?><br>
Tu correo electrónico es: <?php echo $_POST["email"]; ?>
</body>
</html>