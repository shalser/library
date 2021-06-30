<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="one" aria-current="page" href="/">Материалы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="two" href="../list-tag.php">Теги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="three" href="../list-category.php">Категории</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    try {
        let url = document.location;
        if (url.pathname === '/') {
            let a = document.querySelector('#one');
            a.classList.add('active');
        }
        if (url.pathname === '/list-tag.php') {
            let a = document.querySelector('#two');
            a.classList.add('active');
        }
        if (url.pathname === '/list-category.php') {
            let a = document.querySelector('#three');
            a.classList.add('active');
        }

    } catch (error) {
        console.log(error);
    }
</script>
