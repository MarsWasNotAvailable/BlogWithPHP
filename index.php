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
    <?php include './components/header-navbar.php'; ?>

    <section id="Entrance" class="ContentBoxes">
        <h1>Welcome to Cookery_Sland</h1>
        <form id="SearchForm" action="articles.php?exemples=value">
            <div id="Entries">
                <input type="text" id="SearchEntry" name="SearchEntry" size="20" required>

                <div id="Options">
                    <select name="Category" id="Category">
                        <option value="Viandard">Viandard</option>
                        <option value="Végétarien">Végétarien</option>
                    </select>
        
                    <select name="Order" id="Order">
                        <option value="Croissant">Croissant</option>
                        <option value="Décroissant">Décroissant</option>
                    </select>
                </div>
            </div>

            <button>Search</button>
        </form>
    </section>
    
    <?php include './components/footer.php'; ?>

</body>
</html>
