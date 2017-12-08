@extends('app')

@section('content')

  <h1>Articles</h1>
  <hr>

  <li>
    <a href="{{ url('/logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
          Logout
    </a>
     <form id="logout-form"
            action="{{ url('/logout') }}"
        method="POST"
        style="display: none;">
                    {{ csrf_field() }}
      </form>
</li>

  @foreach($articles as $article)
    <article>
      <h2>
        <a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</h2>
        </a>

      <div class="body">
        {{ $article->body }}
      </div>
    </article>
  @endforeach
@stop
