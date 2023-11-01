@extends('layouts.main')
@section('container')
    <section>
        <div class="container">
            <h1>Hello World</h1>
            @if (auth()->check())
            <form class="mt-auto mx-auto" action="/logout" method="POST">
                @csrf
                <button class="mt-auto mx-auto border-0 bttn" type="submit">
                    <h1 class="nav-link mb-0"><img src="/assets/assets/logout-i.svg" alt=""> Log Out</h1>
                </button>  
            </form>
                
            @else
                <a href="/login">Login</a>
            @endif
        </div>
    </section>
@endsection