<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script defer src="./script.js"></script>

    <title>Redactor View</title>
</head>
<body>
    <?php include './components/header-navbar.php'; ?>

    <section id="ArticleBox" class="ContentBoxes">
        <h5>Recipe name goes here</h5>

        <div id="InstructionsRedact">
            <form onsubmit="">
                <div>
                    <legend>Ingredients:</legend>
                    <textarea name="IngredientsList" id="IngredientsList" cols="40" rows="15"></textarea>
                </div>

                <div id="ImagePreviewRedact">
                    <legend>Click to upload image:</legend>
                    <input type="file" id="Image" name="Image" accept="image/png, image/jpeg">
                    <img src="./cache/recipe1.jpeg">
                </div>


                <div>
                    <legend>Steps:</legend>
                    <textarea name="StepsList" id="StepsList" cols="40" rows="15"></textarea>
                </div>

                <button id="PostButton">POST</button>

            </form>
        </div>
    </section>

    <?php include './components/footer.php'; ?>
</body>
</html>
