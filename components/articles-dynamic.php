<section id="ArticlesBox" class="ContentBoxes">
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "blog_cookery";
        
        if (($_SERVER['REQUEST_METHOD'] == 'GET') )
        {
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            else {
                $SQLStringSelect = "SELECT * FROM articles";
                $result = $conn->query($SQLStringSelect);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    
                    echo '<div id="TheArticles">';
                    while($row = $result->fetch_assoc()) {
        
                        $Index = $row["idArticles"]; //1-based ?
        
                        echo '<article>';
                        echo "<h3>Recipe $Index </h3>";
                        echo '<h4>' . $row["Date"] . '</h4>';
                        echo '<h5>' . $row["Category"] . '</h5>';
                        echo '<a href="' . './' . $row["Link"] . '">';
                        echo '<img src="' . './cache/' . $row["ImageLink"] . '" alt="Picture Of Recipe">';
                        echo '</a>';
                        echo '<span>'  . $row["Description"] . '</span>';
                        echo '<button onclick="(event) => {  }">Click To Open</button>';
                        echo '</article>';
                    }

                    echo '</div>';
                    echo '<button id="LoadMoreButton" onclick="LoadMore()">LOAD MORE<br>...</button>';
                } else {
                    echo "0 results from selected database";
                }
            }

            $conn->close();
        }
    ?>
</section>

<script defer>
    let LoadMore = function (){
        //here we pretend to fetch results, and claims everything has been loaded
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
