<nav class="navtop">
            <div class="jumbotron text-center">
                <h1 style="color:white;">Kuvagalleria</h1>
                <?php if (isset($_SESSION['username'])): ?>
                    <div class="container">
                        <a href="addpicture.php" class="nav-link">Lisää kuva</a>
                        <a href="index.php" class="nav-link">Kuvat</a>
                        <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1): ?>
                        <!-- <a href="admin.php" class="nav-link">Admin</a> -->
                        <?php endif; ?>
                        <a href="logout.php" class="nav-link">Kirjaudu ulos</a>
                    </div>
            <?php endif; ?>
            </div>
    

        </nav>
