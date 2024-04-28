<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="{{route('homePage')}}">Acceuil</a>
        <a class="nav-item nav-link" href="{{route('stagiaires.index')}}">Espace stagiaire</a>

        @auth
        <div class="dropdown">
          <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->prenom}}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="nav-item nav-link" href="{{route('login.logout')}}">Deconnexion</a></li>
          </ul>
        </div>
          
        @endauth

        @guest
          <a class="nav-item nav-link " href="{{route('login.show')}}">Se connecter</a>
        @endguest

        
       
      
      
    </div>
  </nav>