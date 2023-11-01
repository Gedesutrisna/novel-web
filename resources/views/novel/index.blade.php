@extends('layouts.main')
@section('container')
    <section>
        <div class="container">
            <h1>Hello World</h1>
            @foreach ($novels as $novel)
                <a href="/novels/{{ $novel->slug }}">
                    <p style="color: white">{{ $novel->title }}</p>
                </a>
            @endforeach

          
        </div>
    </section>
@endsection