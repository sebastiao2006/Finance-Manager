<header id="header" class="header sticky-top">

  <div class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">geral@meukumbu.co.ao</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+244 999 999 999</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div><!-- End Top Bar -->

  <div class="branding d-flex align-items-cente">
    <div class="container position-relative d-flex align-items-center justify-content-between">
   <img src="site/assets/img/logo.png" alt="logo" style="width: 95px; height: 95px; max-width: 100%; image-rendering: auto; display: block;">

      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('site.home.index') }}" class="active">Home</a></li>
          <li><a href="{{ route('site.about.index') }}">Sobre </a></li>
          <li><a href="{{ route('site.finance.index') }}">Dicas Financeiras</a></li>

          <li><a href="{{ route('login') }}"><i class="bi bi-person" style="font-size: 1.5rem; background: none;"></i>
</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>

  </div>

</header>