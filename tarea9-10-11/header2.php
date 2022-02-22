<header>
    <nav class="navbar navbar-expand-md mb-4 ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
                        <li class="nav-item">
                        <a class="btn btn-outline-info px-4 py-1 <?php echo ($pg == "sobre-mi") ? "active" : "" ?>" style="color: black;" href="index.php">SECRETO</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="btn btn-outline-info px-4 py-1 <?php echo ($pg == "contacto") ? "active" : "" ?>" style="color: black;" href="portada.php">PORTADA</a>
                    </li>
                </ul>
                <div class="d-inline">
                    <a href="registro.php" class="btn btn-rojo">REGISTRARME</a>
                </div>
            </div>
        </div>
    </nav>
</header>