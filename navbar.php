<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #16003B">
    <div class="container-fluid">
        <a class="navbar-brand">DOНИ GAMES </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <?php
                global $ONLINE;
                  if($ONLINE){


                ?>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php
                           echo $_SESSION['NOW_USER']['full_name'];
                        ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="addgames.php">Add Games</a></li>
                        <li><a class="dropdown-item" href="adddeveloper.php">Add Developer</a></li>
                        <li><a class="dropdown-item" href="card.php">Theme Card</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                    </ul>
                </li>
                <?php
                 }else{
                ?>
                      <a class="nav-link active" aria-current="page" href="register.php">SIGN UP</a>
                      <a class="nav-link active" aria-current="page" href="login.php">SIGN IN</a>
                <?php
                  }
                ?>
            </ul>
        </div>
    </div>
</nav>