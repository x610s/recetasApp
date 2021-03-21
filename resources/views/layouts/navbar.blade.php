<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('recetas.index')}}">Recetas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('recetas.index')}}">Inicio</a>
          </li>

          @guest
              
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('register')}}">Registrate</a>
          </li>

          @else

          <li class="nav-item">
            <a class="nav-link active"
            onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Cerrar sesión
              <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                 @csrf
             </form>
            </a>
          </li>
          @endguest
        

         
        </ul>
      
      </div>
    </div>
  </nav>    