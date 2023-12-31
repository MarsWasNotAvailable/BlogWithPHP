<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script defer src="./script.js"></script>

    <title>Recipe #1</title>
</head>
<body>
    <?php include './components/header-navbar.php'; ?>

    <section id="ArticleBox" class="ContentBoxes">
        <h5>Recipe name goes here</h5>

        <img id="ImagePreview" src="./cache/recipe1.jpeg">

        <div id="Instructions">
            <div id="Ingredients">
                <legend>Ingredients:</legend>
                <ul>
                    <li>450g Red Meat</li>
                    <li>1/2 teaspoon salt</li>
                    <li>1/2 teaspoon pepper</li>
                    <li>50ml Water</li>
                    <li>2 Garlic Gloves</li>
                    <li>50g Tomatoes</li>
                </ul>
            </div>
    
            <div id="Steps">
                <legend>Steps:</legend>
                <ul>
                    <li>Season the meat with salt and pepper</li>
                    <li>Sear eminced gloves and tomatoes in saucepan</li>
                    <li>Add water in saucepan</li>
                    <li>Add the meat in saucepan</li>
                    <li>Let simmer at low temperatir for 15 minutes</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="CommentBox" class="ContentBoxes">
        <h5>Commentaires</h5>

        <form id="SendCommentForm">
            <label for="Name">Name</label>
            <input type="text" id="Name" name="Name" size="20" placeholder="Enter your name here" required>

            <label for="Email">Email</label>
            <input type="email" id="Email" name="Email" size="20" placeholder="Enter your email here" required>

            <textarea name="CommentBody" id="CommentBody" cols="45" rows="15" placeholder="Enter your comment here"></textarea>

            <button>SEND</button>
        </form>
        
        <hr>

        <div class="Comment">
            <span>John Doe, 2023-05-23, said:</span>
            <p>I tried this recipe with success.</p>
        </div>
    </section>
    
    <?php include './components/footer.php'; ?>
</body>
</html>
