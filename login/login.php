<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
        <h1>Login</h1>
        <form method="post">
            <div class="camptext">
                <input type="text" required>
                <span></span>
                <label>Usuario</label>
            </div>
            <div class="camptext">
                <input type="password" required>
                <span></span>
                <label>Contraseña</label>
            </div>
           <div class="pass">¿Olvidaste la Contraseña?</div>
            <input type="submit" value="Login">
            <div class="register_link">
                ¿No eres miembro? <a href="#">Resgistrate</a>
            </div>
        </form>
    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            $user=false;
            if(strcmp($_POST['usname'],"usuario1")===0 && strcmp($_POST['pass'], "1") === 0) {
              $user=true;
              header("Location: Index.php");
            }
          }
    ?>
</body>
</html>