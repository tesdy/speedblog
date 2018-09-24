<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<nav>
    <div class="nav-wrapper light-blue row">
        <a href="index.php" class="brand-logo col s2 offset-s1"><span class="yellowtxt">Speed</span><span class="redtxt">Blog</span></a>
        <a href="index.php" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li>
                <form id="navbarsearch">
                    <div class="navfix">
                        <div id="navfix2">
                            <div class="input-field">
                                <input id="mynavsearch" type="search" required>
                                <label class="label-icon" for="mynavsearch"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </div>
                    </div>
                </form>
            </li>
            <li class="<?= ($page == 'home') ? 'active' : '';?>"><a href="index.php">Home</a></li>
            <li class="<?= ($page == 'list') ? 'active' : ''?>"><a href="?page=list">Liste</a></li>
            <li class="<?= ($page == 'trois') ? "active" : '';?>"><a href="?page=trois">JavaScript</a></li>
            <li class="<?= ($page == 'error') ? "active" : '';?>"><a href="index.php?page=zozo">$_GET['Page']="zozo" qui existe pas</a></li>
            <li class="<?= ($page == 'error') ? "active" : '';?>"><a href="index.php?debile=zozo">$_GET['debile']="zozo" qui existe pas</a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="index.php">Home</a></li>
    <li><a href="?page=list">Liste</a></li>
    <li><a href="?page=trois">JavaScript</a></li>
    <li><a href="index.php?page=zozo">$_GETx="zozo": existe pas</a></li>
    <li><a href="index.php?debile=zozo">$_GET['debile']x : existe pas</a></li>
</ul>
