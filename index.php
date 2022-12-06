<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-with-overlay-image.css">
    <link rel="stylesheet" href="assets/css/VentasPro-Login.css">
</head>

<body>
    <div class="text-center" id="main">
        <div class="text-center" id="info"><img id="ventaspro-logo" src="assets/img/durvill_logo.jpg" width="200">
            <h3 class="text-center">Welcome to Student DB</h3>
            <form action="login.php" method="post" class="text-start" id="form-login">

                <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>  
                <?php } ?>

                <div class="mb-3"><label class="form-label" id="lbl-usuario" for="txt-usuario">User Name</label><input class="form-control" type="text" name="uname" id="username"></div>
                <div class="mb-3"><label class="form-label" id="lbl-password" for="txt-password">Password</label><input class="form-control" type="password" name="password" id="password"></div>
				<input class="btn btn-primary" id="btn-sesion" type="submit" value="Login" style="--bs-primary: #256db4;--bs-primary-rgb: 37,109,180;background: #256db4;" type="submit" value="Login">
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<button type="submit" ></button>