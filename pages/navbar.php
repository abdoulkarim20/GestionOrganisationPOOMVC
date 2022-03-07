<header class="main-header">
    <a href="index.html" class="logo blue-bg">
        <span class="logo-mini"><img src="dist/img/logo-n.png" alt=""></span>
        <span class="logo-lg"><img src="dist/img/logo.png" alt=""></span>
    </a>
    <nav class="navbar blue-bg navbar-static-top">
        <ul class="nav navbar-nav pull-left">
            <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
        </ul>
        <div class="pull-left search-box">
            <form action="#" method="get" class="search-form">
                <div class="input-group">
                    <input name="search" class="form-control" placeholder="Search..." type="text">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
                    </span>
                </div>
            </form>
        </div>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                </li>
                <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="dist/img/img1.jpg" class="user-image" alt="User Image"> <span class="hidden-xs"><?= $_SESSION['prenoms'] . " " . $_SESSION['nom']; ?></span> </a>
                    <ul class="dropdown-menu">
        
                        <li><a href="./connexion.php"><i class="fa fa-power-off"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>