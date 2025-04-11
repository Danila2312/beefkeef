<!-- Нижняя навигация (мобильная) -->

<nav class="mobile-nav d-lg-none fixed-bottom bg-light-brown">
    <div class="container">
        <div class="d-flex justify-content-around py-2">
            <a href="{{route('home')}}" class="btn btn-nav {{  request()->routeIs('home') ? 'active' : ''  }}">🏠</a>
            <a href="{{route('catalog')}}" class="btn btn-nav {{  request()->routeIs('catalog') ? 'active' : ''  }}">🔍</a>
            <a href="{{route('cart')}}" class="btn btn-nav {{  request()->routeIs('cart') ? 'active' : ''  }}">🛒</a>
            <a href="{{route('profile')}}" class="btn btn-nav {{  request()->routeIs('profile') ? 'active' : ''  }}">👤</a>
        </div>
    </div>
</nav>
