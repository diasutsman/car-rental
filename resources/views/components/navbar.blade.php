<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="{{ route('home') }}" class="navbar-brand">Car Rental Website</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li @if (Route::is('home')) class="active" @endif><a href="{{ route('home') }}">Home</a></li>
                <li @if (Route::is('fleet')) class="active" @endif><a href="{{ route('fleet') }}">Fleet</a>
                </li>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">About<span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li @if (Route::is('blogs')) class="active" @endif><a
                                href="{{ route('blogs') }}">Blog</a></li>
                        <li @if (Route::is('about')) class="active" @endif><a href="{{ route('about') }}">About
                                Us</a></li>
                        <li @if (Route::is('team')) class="active" @endif><a
                                href="{{ route('team') }}">Team</a></li>
                        <li @if (Route::is('testi')) class="active" @endif><a
                                href="{{ route('testi') }}">Testimonials</a></li>
                        <li @if (Route::is('terms')) class="active" @endif><a
                                href="{{ route('terms') }}">Terms</a></li>
                    </ul>
                </li>
                <li @if (Route::is('contact')) class="active" @endif><a href="{{ route('contact') }}">Contact
                        Us</a></li>
            </ul>
        </div>

    </div>
</section>
