<nav>
    <ul>
        @auth

            <li><a style="text-decoration: none; 
    font-size: 
    15px; color:
     white; 
     font-weight:bold;"
                    href="{{ route('home') }}">Home</a></li>
            <li><a style="text-decoration: none; 
      font-size: 
      15px; color:
       white; 
       font-weight:bold;"
                    href="{{ route('contacto') }}">Contacto</a></li>
            <li><a style="text-decoration: none; 
      font-size: 
      15px; color:
       white; 
       font-weight:bold;"
                    href="{{ route('blog') }}">Blog</a></li>
            <li><a style="text-decoration: none; 
      font-size: 
      15px; color:
       white; 
       font-weight:bold;"
                    href="<?= route('posts.index') ?>">Prueba - PHP</a></li>
            <li><a style="text-decoration: none; 
      font-size: 
      15px; color:
      white; 
      font-weight:bold;"
                    href="{{ route('about') }}">Acerca de mi</a></li>
        @endauth
        @guest
            <li><a class="btn btn-success py-1 mt-3 fw-bold" href="{{ route('login') }}">Login</a></li>
            <li><a class="btn btn-primary py-1 mt-2 fw-bold" href="{{ route('register') }}">Register</a></li>
        @endguest

    </ul>
</nav>
