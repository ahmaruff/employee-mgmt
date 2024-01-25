@extends('admin.layout.base')

@section('content')
    <h1>U sudah login bang!</h1>
    <p>{{ Auth::user() }}</p>

    <form action="{{route('admin.logout')}}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
