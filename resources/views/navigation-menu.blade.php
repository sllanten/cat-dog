<div class="container">
    <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #2d3748;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('usuario.dashboard') }}"><img src="" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    @if( Auth::user()->rol== 1 )
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Mascotas</a>
                        </li>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Actividad
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Nueva actividad</a></li>
                                        <li><a class="dropdown-item" href="#">Consultar actividades</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Historia clinica
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Nuevo registro</a></li>
                                        <li><a class="dropdown-item" href="#">Consultar registro</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @endif

                    @if( Auth::user()->rol== 2 )
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Mascotas</a>
                        </li>
                        <li>
                            <a class="nav-link" aria-current="page" href="{{ route('profile.show') }}">Perfil</a>
                        </li>
                    @endif
                </ul>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <label class="invisible">&nbsp;</label>
                    <a class="navbar-nav  text-white text-right" aria-current="page" href="{{ route('logout') }}" 
                    onclick="event.preventDefault(); this.closest('form').submit();">Salir</a>
                </form>
            </div>
        </div>
    </nav>
</div>