@extends('layout.main')

@section('bg')
    bg
@endsection

@section('judulPage')
    Categories
@endsection

@section('isiPage')
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus viverra. Sit
    justo velit, eu sed <br> sollicitudin tempus, risus. Sed sit elit mauris adipiscing.
    Lobortis pellentesque nulla accumsan id urna, ullamcorper <br> gravida varius. Massa mauris,
    cursus orci magna non enim fames et sed.</p>
@endsection


@section('content')
    @foreach ($categories as $category)
    <ul>
        <li>
            <h2>
                <a href="/categories/{{$category->slug}}">{{$category->name}}</a>
            </h2>
        </li>
    </ul>
    @endforeach
@endsection