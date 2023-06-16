<section id="Entrance" class="ContentBoxes">
    <h1>Welcome to Cookery_Sland</h1>
    <form id="SearchForm" method="GET">
        <div id="Entries">
            <input type="hidden" id="display" name="display" value="selection">

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

        <button type="submit" formaction="./index.php">Search</button>
    </form>
</section>
