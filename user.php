<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIAP</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login API.</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <p>Ultilizador:</p>
        <input type="text" name="user" id="user"> <br><br>
        <p>Palavra Passe: </p>
        <input type="password" name="senha" id="senha"> <br><br>
        <button>Login app</button>
    </form>
</body>
</html>