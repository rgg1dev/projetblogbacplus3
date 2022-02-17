<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="d-flex flex-grow-1 ">
        <a class="navbar-brand" href="{{ route('home') }} ">
            <i class="fas fa-house-user"></i> Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">

                <li class="nav-item active">
                    <a class="nav-link " href=" {{ route('articles') }} ">Articles</a>
                </li>
                <ul class="navbar-nav ml-auto ">

                    @if (Auth::user())
                        @if (Auth::user()->role === 'ADMIN')
                            <li class="nav-item active ">
                                <a class="nav-link " href="{{ route('articles.index') }}">Espace admin</a>
                            </li>
                        @endif
                        <li class="nav-item   ">
                            <form class="nav-item" method="post" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class=" btn nav-link ">Déconnexion</button>

                            </form>
                </ul>
                </li>

            @else
                <li class="nav-item active  ">
                    <a class="nav-link " href="{{ route('login') }}"> Me conecter</a>
                </li>
                @endif


            </ul>

        </div>
    </div>
</nav>
