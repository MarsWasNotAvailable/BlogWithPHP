<section id="ArticlesBox" class="ContentBoxes">
    
    <div id="TheArticles">
        <article>
            <h2>Poulet Korma </h2>
            <h3>Catégories : Plat</h3>
            <h5>Le 01/06/23 </h5>
            <a href="./article-individual.php">
                <img src="./cache/recipe1.jpeg" alt="Picture Of Recipe">
            </a>
            <span>Descriptions :
            <br>Le poulet Korma une recette venue d'Asie centrale qui 
            peut être un peu ou très épicé, et peut se faire avec du mouton,
            du poulet, du boeuf ou du gibier.
            </span>
            <button>Click ici</button>
        </article>

        <article>
            
            <h2>Glace à la cardamome </h2>
            <h3>Catégories : Dessert</h3>
            <h5>Le 02/06/23 </h5>
            <a href="./article-individual.php">
                <img src="./cache/recipe2.jpeg" alt="Picture Of Recipe">
            </a>
            <span>Descriptions :
            <br>La glace à la cardamome essayez cette glace appelée "kulfi" ! Entièrement vegan, elle est composée de lait de coco, noix de coco râpée, 
            sucre de coco, safran et cardamome pour un résultat frais, doux et irrésistiblement parfumé.
            </span>
            <button>Click ici</button>
        </article>

        <article>
            <h2>Salade méditéranéen </h2>
            <h3>Catégories : Entrée</h3>
            <h5>Le 03/06/23 </h5>
            <a href="./article-individual.php">
                <img src="./cache/recipe3.jpeg" alt="Picture Of Recipe">
            </a>
            <span>Descriptions :
            La salade niçoise une recette classique française de salade froide
            de riz agrémentée de légumes au thon et œufs. Idéal pour un repas frais d'été,
            un pique-nique improvisé 
            </span>
            <button>Click ici</button>
        </article>

        <article>
            <h2>Dhal salade </h2> 
            <h3>Catégories : Entrée</h3>
            <h5>Le 04/06/23 </h5>
            <a href="./article-individual.php">
                <img src="./cache/recipe4.jpeg" alt="Picture Of Recipe">
            </a>
            <span>Descriptions :
            <br>
            Le dhal est un plat d'origine indienne à base de légumineuses.
            Il est souvent à base de lentilles corail mais
            il peut être aussi cuisiné avec des pois chiches.
            Vous pouvez déguster le dhal de lentilles corail avec un petit pain indien
            qui se présente sous forme de galette, le chapati.
            </span>
            <button>Click ici</button>
        </article>

        <article> 
            <h2>Pizza </h2>
            <h3>Catégories : Plat</h3>
            <h5>Le 05/06/23 </h5>
            <a href="./article-individual.php">
                <img src="./cache/recipe5.jpeg" alt="Picture Of Recipe">
            </a>
            <span>Descriptions :
            <br>La pizza est un plat d'origine italienne fait d'une pâte à pain étalée et de coulis de tomates,
            recouverte de divers ingrédients et cuite au four (à bois, à gaz ou électrique).
            </span>
            <button>Click ici</button>
        </article>

        <article>
            <h2>Chutney </h2>
            <h3>Catégories : Apéritifs</h3>
            <h5>06/06/23 </h5>
            <a href="./article-individual.php">
                <img src="./cache/recipe6.jpeg" alt="Picture Of Recipe">
            </a>
            <span>Descriptions :
            <br>Le chutney : une sauce, souvent aigre-douce, servie en accompagnement
            de la cuisine indienne, de la cuisine pakistanaise et de la cuisine sud-africaine.
            </span>
            <button>Click ici</button>
        </article>
    </div>

    <button id="LoadMoreButton" onclick="LoadMore()">LOAD MORE<br>...</button>

</section>

<script defer>
    let LoadMore = function (){
        //in this example we'll simply pretend to fetch results
        //and claims everything has been loaded
        //also kill the button


        let LoadMoreButton = document.getElementById("LoadMoreButton");

        LoadMoreButton.removeEventListener('click', LoadMore);

        LoadMoreButton.innerHTML = "Fetching<br>...";

        setTimeout(()=>{
            LoadMoreButton.innerHTML = "All articles has been loaded";
        }, "2000");
    }

    let AllButtons = document.querySelectorAll("article button");

    AllButtons.forEach((EachButton) => {
        EachButton.addEventListener("click", (Event)=>{
            console.log(EachButton.parentElement);

            const Forward = EachButton.parentElement.getElementsByTagName("a")[0].href;

            location.href = Forward;
        })
    });
</script>
