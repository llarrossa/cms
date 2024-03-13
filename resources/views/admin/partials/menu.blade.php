<nav class="navbar navbar-expand-lg mb-5" data-bs-theme="dark" style="background: blue;">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel CMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff; font-weight: bold;" href="{{ route("news.index") }}">Notícias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff; font-weight: bold;" href="{{ route("category.index") }}">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff; font-weight: bold; href="#">Comentários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff; font-weight: bold; href="#">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff; font-weight: bold; href="#">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
