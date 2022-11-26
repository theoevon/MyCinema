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
                        <a href="index.php" class="nav"><div class="liste" onclick="home()"><p>HOME</p></div></a>
                        <a href="#" class="nav"><div class="liste" onclick="genre()"><p>GENRE</p></div></a>
                        <a href="#" class="nav"><div class="liste" onclick="distributor()"><p>DISTRIBUTEUR</p></div><a>
                        <a href="#" class="nav"><div class="liste"><p>USER</p></div></a>
                        <a href="#" class="nav"><div class="liste"><p>HISTORIQUE</p></div></a>
                    </div>
                </nav>
            </div>
        </header>
        <main>
        <div class="container user_table">
                <table id="mytable" class="display">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> EMAIL </th>
                            <th> PRÉNOM </th>
                            <th> NOM </th>
                        </tr>
                    </thead>
                    <tr>
                        <?php
                        $recherche = $_GET['recherche'];
                        $bdd = new PDO("mysql:host=127.0.0.1;dbname=cinema", "egloz", "DarkArmy42Supremacy!");
                        $requette = $bdd->query("select * from user;");
                        while($resultat = $requette->fetch()){
                        ?>
                        <td><?php echo $resultat['id']?></td>
                        <td><?php echo $resultat['email']?></td>
                        <td><?php echo $resultat['firstname']?></td>
                        <td><?php echo $resultat['lastname']?></td>
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
            });
            </script>
        <script src="scriptjs.js"></script>
    </body>
</html>