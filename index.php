<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Cinehub </title>
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        
        <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="logo">
                        <h1 id="cine">Cine</h1>
                        <h1 id="hub">hub</h1>
                    </div>
                    <div class="search">
                        <form action="" method="get" id="formulaire">
                            <img src="https://cdn-icons-png.flaticon.com/512/107/107122.png" id="img_search">
                            <input type="text" name="recherche" id="recherche" value="<?php echo $_GET["recherche"]?>" placeholder="Rechercher sur Cinehub">
                            <input type="hidden" value="<?php echo $_GET["genre"] ?>" name ="genre" id="genre">
                            <input type="hidden" value="<?php echo $_GET["distributor"] ?>" name="distributor" id="distributor">
                        </form>
                    </div>
                    <div class="import">
                        <img src="https://icon-library.com/images/cam-icon-png/cam-icon-png-0.jpg" id="cam">
                        <p> Importer </p>
                    </div>
                    <div class="premium">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828961.png" id="star">
                        <p>Premium</p>
                    </div>
                    <div class="log">
                        <p id="login"> Se connecter</p>
                        <p id="register"> Inscrivez-vous !</p>
                    </div>
                </div>
            </div>
                <hr>
            <div class="container">
                <nav>
                    <div class="row">
                        <a href="#" class="nav"><div class="liste" onclick="home()"><p>HOME</p></div></a>
                        <a href="#" class="nav"><div class="liste" onclick="genre()"><p>GENRE</p></div></a>
                        <a href="#" class="nav"><div class="liste" onclick="distributor()"><p>DISTRIBUTEUR</p></div><a>
                        <a href="user.php" class="nav"><div class="liste"><p>USER</p></div></a>
                        <a href="#" class="nav"><div class="liste"><p>HISTORIQUE</p></div></a>
                    </div>
                </nav>
            </div>
            <div id="element_create">
                <hr class="element_create">
                <div class="container select_genre">
                    <h2> Selectionnez un genre </h2>
                    <table>
                        <thead>
                            <tr>
                                <th> GENRE </th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Aucun</td>
                        </tr>
                        <tr>
                        <?php
                        $bdd = new PDO("mysql:host=127.0.0.1;dbname=cinema", "egloz", "DarkArmy42Supremacy!");
                        $requette = $bdd->query("select name from genre;");
                        while($resultat = $requette->fetch()){
                        ?>
                        <td><?php echo $resultat['name'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div id="element_create2">
                <hr class="element_create">
                <div class="container select_distributor">
                    <h2> Selectionnez un distributeur </h2>
                    <table>
                        <thead>
                            <tr>
                                <th> DISTRIBUTEUR </th>
                            </tr>
                        </thead>
                    <tr>
                        <td>Aucun</td>
                    </tr>
                    <tr>
                    <?php
                    $bdd = new PDO("mysql:host=127.0.0.1;dbname=cinema", "egloz", "DarkArmy42Supremacy!");
                    $result = $_GET['recherche_distributeur'];
                    $requette = $bdd->query("select name from distributor where name like '%$result%';");
                    while($resultat = $requette->fetch()){
                    ?>
                    <td><?php echo $resultat['name'] ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </table>
                </div>
            </div>
        </header>
        <main>
            <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank">
            <div class="container cinzzer" id="test">
                <h1>CIN</h1>
                <h1 class="jaune">ZZ</h1>
                <h1>ERS</h1>
                <div class="pub">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Plain_Yellow_Star.png">
                    <h1> Le meilleur du cinéma en </h1><h1 class="jaune" id="quatrek">4K</h1>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Plain_Yellow_Star.png">
                </div>
            </div>
            </a>
            <div class="container">
                <table id="mytable" class="display">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> FILMS </th>
                            <th> GENRE </th>
                            <th> DISTRIBUTEUR </th>
                        </tr>
                    </thead>
                    <tr>
                        <?php
                        $recherche = $_GET['recherche'];
                        $genre = $_GET['genre'];
                        $distributeur = $_GET['distributor'];
                        $bdd = new PDO("mysql:host=127.0.0.1;dbname=cinema", "egloz", "DarkArmy42Supremacy!");
                        $requette = $bdd->query("select movie.id as id, movie.title as movie, genre.name as genre, distributor.name as distributor from movie inner join movie_genre on id_movie = movie.id inner join genre on id_genre = genre.id inner join distributor on movie.id_distributor = distributor.id where movie.title like '%$recherche%' and genre.name like '%$genre%' and distributor.name like '%$distributeur%' order by id");
                        while($resultat = $requette->fetch()){
                        ?>
                        <td><?php echo $resultat['id']?></td>
                        <td><?php echo $resultat['movie']?></td>
                        <td><?php echo $resultat['genre']?></td>
                        <td><?php echo $resultat['distributor']?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </main>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#mytable").DataTable();
                document.getElementById("mytable_filter").remove();
            });
            </script>
        <script src="scriptjs.js"></script>
    </body>
</html>