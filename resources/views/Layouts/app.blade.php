
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rise of Heroes</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

@auth
    
      
    <nav class="navbar">
        <a href="{{ route('accueil') }}" class="navbar-brand">The Rise Of Heroes</a>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a href="{{ route('characters.create') }}" class="nav-link">Créer un personnage</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('characters.index') }}" class="nav-link">Mes personnages</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('groups.index') }}" class="nav-link">Mes groupes</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('groups.create') }}" class="nav-link">Créer un groupe</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('characters.catalog') }}" class="nav-link">Catalogue de personnages</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('teams.index') }}" class="nav-link">Mes équipes</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">Déconnexion</a>
          </li>
        </ul>
      </nav>
      
      <br/>

    @else 
   
    <nav class="navbar">
        <a href="{{ route('accueil') }}" class="navbar-brand">The Rise Of Heroes</a>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a href="{{ route('users.create') }}" class="nav-link">S'inscrire</a>
          </li>
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">Connexion</a>
          </li>     
        </ul>
   </nav>
      <br/>

  @endauth

     <div class="container">
         @yield('content')
     </div>

     <footer class="footer-custom">
      
         <div class="container">
            <p>&copy; 2023 The Rise Of Heroes - Tous droits réservés.</p>
         </div>  
      </footer>
 
     <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
