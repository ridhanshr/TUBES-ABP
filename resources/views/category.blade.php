@extends('layout.main')

@section('bg')
    bg
@endsection

@section('judul')
    {{ $category }}
@endsection

@section('judulPage')
    Hotel and Tour Recommendation
@endsection


@section('isiPage')
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus viverra. Sit
    justo velit, eu sed <br> sollicitudin tempus, risus. Sed sit elit mauris adipiscing.
    Lobortis pellentesque nulla accumsan id urna, ullamcorper <br> gravida varius. Massa mauris,
    cursus orci magna non enim fames et sed.</p>
@endsection


@section('content')
    @foreach ($posts as $post)
        <article>
            <img src="{{ asset('images/Meru-Temple-in-Lombok-Indonesia.jpg') }}" alt="cat1"
            style="border-radius: 20px; height: 221px; width: 370px; float: left; margin-right: 20px">
            <h5>{{ $post['judul'] }}</h5>
            <p style="font-size: 12px;color: #FFA902; margin-bottom: 5px">Location <span
                style="color: gray">In</span> <span style="color: black">{{ $post['lokasi'] }}</span></p>
            <p style="font-size: 12px;color: #FFA902; margin-bottom: 5px">Category <span
                style="color: gray">:</span> <span style="color: black"> <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></span></p>
            <p style="font-size: 14px; color: gray">{{ $post['deskripsi'] }}</p>    
            <p style="margin-bottom: 110px"></p>
        </article>
    @endforeach
@endsection