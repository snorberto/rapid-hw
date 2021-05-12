@section("header")
  <div class="mainHeaderLogo">
    <img src="/pictures/Professional_Heart_Daily_header_logo.png"/>

  </div>
  <div class="mainHeaderLink"><a href="https://professional.heart.org/en/">Link to the original site</a></div>
  <div class="mainHeaderMenu">
  <div class="navbar">
  <a class="link {{ Request::is('Index') ? 'active' : '' }}" href="home">Home</a>
  <div class="subnav">
    <button class="subnavbtn">About ⇩</button>
    <div class="subnav-content">
      <a class="link {{ Request::is('layouts.subpages.Company') ? 'active' : '' }}" href="Company">Company</a>
      <a class="link {{ Request::is('layouts.subpages.Team') ? 'active' : '' }}" href="Team">Team</a>
      <a class="link {{ Request::is('layouts.subpages.Careers') ? 'active' : '' }}" href="Careers">Careers</a>
    </div>
  </div>
  <a class="link {{ Request::is('layouts.subpages.News') ? 'active' : '' }}" href="News">News</a> 
  <div class="subnav">
    <button class="subnavbtn">Guidelines and Statements ⇩</button>
    <div class="subnav-content">
      <a class="link {{ Request::is('layouts.subpages.Classif') ? 'active' : '' }}" href="Classif">Classification</a>
      <a class="link {{ Request::is('layouts.subpages.Policy') ? 'active' : '' }}" href="Policy">Policies Development</a>
      <a class="link {{ Request::is('layouts.subpages.Develop') ? 'active' : '' }}" href="Develop">Development</a>
    </div>
  </div>  
  <a class="link {{ Request::is('layouts.subpages.img_gal.Main') ? 'active' : '' }}" href="img_Main">Events & Photo Gallery</a>
  <a class="link {{ Request::is('layouts.subpages.ContactUs') ? 'active' : '' }}" href="ContactUs">Contact Us</a>
  
      @auth
        <?php if (Auth::user()->is_admin==1){?>
          <a class="link {{ Request::is('layouts.master') ? 'active' : '' }}" href="admin-master">Admin Panel</a>
        <?php } ?>
        <a class="link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form> 
      @endauth
      @guest
        <a class="link {{ route('login') }}" href="goToLogin">Login</a>
        @if (Route::has('register'))
          <a class="link" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
      @endguest

    
</div>

