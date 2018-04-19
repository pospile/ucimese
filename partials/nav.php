<? $user = $_SESSION['user']; ?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="admin.php"><i class="fa fa-comments"></i> Testovač</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="dropdown">
                    <a class="nav-link">
                        <i class="fa fa-user"></i> <? echo $user['display_name'] ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
