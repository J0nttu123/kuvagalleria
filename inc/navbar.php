<nav class="navtop">
            <div class="jumbotron text-center">
                <h1 style="color:white;">Kuvagalleria</h1>
                <?php if (isset($_SESSION['username'])): ?>
                    <div class="container">
                        <a href="addpicture.php" class="nav-link">Lisää kuva</a>
                        <a href="index.php" class="nav-link">Kuvat</a>
                        <a href="logout.php" class="nav-link">Kirjaudu ulos</a>
                    </div>
            <?php endif; ?>
            </div>
    

        </nav>
