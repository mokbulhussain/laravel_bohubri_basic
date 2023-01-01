  @extends('layout.custom')
  @section('content')
    <h1>Home page by route with view</h1>
    @foreach ($product as $pro)
        @if ($pro=='pens')
                {{'ok find'}}
            @elseif($pro=='paper')
                {{'paper'}}
            @else
                {{'not find'}}
        @endif
    @endforeach

@endsection
