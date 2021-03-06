<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <div class="row justify-content-between w-100 m-0">
      <a class="navbar-brand" href="{{ route('homepage') }}">We Fashion</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item @if(isset($active) && $active == 'discount') active @endif">
            <a class="nav-link text-uppercase" href="{{ route('discount') }}">Soldes</a>
          </li>
          @foreach ($categories as $slug => $name)
            <li class="nav-item @if(isset($active) && $active == $slug) active @endif">
                <a class="nav-link text-uppercase" href="{{ route('category', $slug) }}">{{ $name }}</a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</nav>
