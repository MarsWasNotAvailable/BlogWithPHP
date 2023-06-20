<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script defer src="./script.js"></script>

    <title>Accueil</title>
</head>
<body>
    <?php require './components/header-navbar.php';
    
    $Direction = isset($_GET['display']) ? $_GET['display'] : null;

    switch ($Direction) {
        case 'articles':
            include './components/articles-dynamic.php';
            break;
        case 'selection':
            include './components/articles-dynamic.php';
            break;
        case 'contact':
            include './components/contact.php';
            break;
        case 'login':
            include './components/login.php';
            break;

        default:
            include './components/search.php';
            break;
    }
    ?>

    <?php include './components/footer.php'; ?>

</body>
</html>
