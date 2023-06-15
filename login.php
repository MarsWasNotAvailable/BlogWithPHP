<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script defer src="./script.js"></script>

    <title>Login</title>
</head>
<body>
    <?php include './components/header-navbar.php'; ?>

    <section id="LoginBox" class="ContentBoxes">
        <form action="#">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" size="90">

            <label for="Password">Password</label>
            <input type="password" name="Password" id="Password" size="90">

            <a>Forgot your password ?</a>

            <div id="TheButtons">
                <button>Login</button>
                <button>Signup</button>
            </div>
        </form>
    </section>

    <?php include './components/footer.php'; ?>
    
</body>
</html>
