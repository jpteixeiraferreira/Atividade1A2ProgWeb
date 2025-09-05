  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="{{ asset('assets/img/my-profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="{{ route('inicio') }}" class="logo d-flex align-items-center justify-content-center">
      <h1 class="sitename">João Pedro</h1>
    </a>

    <div class="social-links text-center">
      <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{route('inicio')}}#hero" class="active"><i class="bi bi-house navicon"></i>Início</a></li>
        <li><a href="{{route('inicio')}}#about"><i class="bi bi-person navicon"></i> Sobre</a></li>
        <li><a href="{{route('inicio')}}#resume"><i class="bi bi-file-earmark-text navicon"></i> Resumo Profissional</a></li>
        <li><a href="{{route('inicio')}}#portfolio"><i class="bi bi-images navicon"></i> Portfólio</a></li>
        <li><a href="{{route('inicio')}}#services"><i class="bi bi-hdd-stack navicon"></i> Serviços</a></li>
        <li><a href="{{route('inicio')}}#contact"><i class="bi bi-envelope navicon"></i> Contato</a></li>
      </ul>
    </nav>

  </header>