<ul class="nav justify-content-center mt-3">
    @foreach ($navigation as $name => $url)
        <li class="nav-item">
            <a class="nav-link text-dark fw-bold" aria-current="page" href="{{ $url }}">{{ $name }}</a>
        </li>
    @endforeach
</ul>
