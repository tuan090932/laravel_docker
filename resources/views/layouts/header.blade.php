<div class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/book/create">Add Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/danhmuc">Manager category</a>
                    </li>

                </ul>
            </div>
            <form class="d-flex ml-auto" action="index.php?act=searchBook" method="post">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <input type="submit" name="sreach" value="Tìm kiếm" class="btn btn-primary col-3">
            </form>
            <?php if (isset($_SESSION['user'])) { ?>
                <a><?= $ten_user ?></a>
                <a class="nav-link" href="./index.php?act=logout">Logout</a>
            <?php } else { ?>
                <a class="nav-link" href="./index.php?act=login"><i class="bi bi-person"></i></a>
            <?php } ?>
        </div>
    </div>
</div>