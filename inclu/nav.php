

<nav class="navbar navbar-expand-lg navbar-light py-4 px-3">
    <div class="d-flex align-items-center">
        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
        <h2 class="fs-2 m-0"> Dashboard </h2>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSportedContent" aria-controls="navbarSportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="col-12 col-md-4 col-lg-2" style="margin-left: 15px;">
        <input type="text" style="background-color: #ffffff; font-size: 19px;" class="form-control form-control-dark" placeholder="Search" aria-label="Search">
    </div>

    <div class="conllapse navbar-collapse" id="navbarSportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">

            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: white; color: black; font-size: 19px; margin-left: 500px;"> <i class="fas fa-cog" style="color: purple; font-size: 19px;"></i> Setting</button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-left: 500px;">
                <li><a href="/Setting.php" class="dropdown-item"> Setting </a></li>
                <li><a href="/login.php" class="dropdown-item"> Login </a></li>
                <li><a href="/register.php" class="dropdown-item"> Logout </a></li>
                <li><a href="#" class="dropdown-item"> Contact </a></li>
            </ul>
            </li>
        </ul>
    </div>
</nav>