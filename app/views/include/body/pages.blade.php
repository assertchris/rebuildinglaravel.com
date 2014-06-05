<hr />
<ul>
  @foreach ($routes as $route => $noop)
    <li>
      @if (Request::is(trim($prefix . $route, "/")))
        {{ titleFromRoute($route) }}
      @else
        <a href="{{ URL::to($prefix . $route) }}">
          {{ titleFromRoute($route) }}
        </a>
      @endif
    </li>
  @endforeach
</ul>
