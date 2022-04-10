@extends('layout.main')

@section('bg')
    bg
@endsection

@section('heightBox1')
    442px
@endsection

@section('widthBox1')
    342px
@endsection

@section('heightBox2')
    131px
@endsection

@section('widthBox2')
    342px
@endsection

@section('judul')
    Reccomendation For You
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

@section('category')
    <h3 class="mt-5" style="text-align: center; font-weight: 600; ">Choose Category</h3>
    <div class="row mt-3 align-items-center d-flex justify-content-center">
        <div class="col-md-4 mt-3">
            <div class="card text-white mx-auto"
                style="border: none; border-radius: 20px; width:370px; min-height: 221px;">
                <img src="images/gunungrinjanilombok21.jpg" class="card-img" alt="cat1"
                    style="border-radius: 20px; height: 221px; width: 370px;">
                <div class="card-img-overlay align-items-center d-flex justify-content-center">
                    <h5 class="card-title">Place Recommendation</h5>
                </div>
                <a href="/categories/tour" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card text-white mx-auto"
                style="border: none; border-radius: 20px; width:370px; min-height: 221px;">
                <img src="images/kuta_beach_lombok.jpg" class="card-img" alt="cat1"
                    style="border-radius: 20px; height: 221px; width: 370px">
                <div class="card-img-overlay align-items-center d-flex justify-content-center">
                    <h5 class="card-title">Hotel Recommendation</h5>
                </div>
                <a href="/categories/hotel" class="stretched-link"></a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @foreach ($posts as $post)
        <article>
            <img src="images/Meru-Temple-in-Lombok-Indonesia.jpg" alt="cat1"
            style="border-radius: 20px; height: 221px; width: 370px; float: left; margin-right: 20px">
            <h5>{{ $post['judul'] }}</h5>
            <p style="font-size: 12px;color: #FFA902; margin-bottom: 5px">Location <span
                style="color: gray">In</span> <span style="color: black">{{ $post['lokasi'] }}</span></p>
            <p style="font-size: 12px;color: #FFA902; margin-bottom: 5px">Category <span
                style="color: gray">:</span> <span style="color: black"> <a href="/categories/{{ $post->category->slug }}" style="text-decoration: none; color: #aaa">{{ $post->category->name}}</a></span></p>
            <p style="font-size: 14px; color: gray">{{ $post['deskripsi'] }}</p>    
            <p style="margin-bottom: 60px"></p>
        </article>
    @endforeach
@endsection

@section('contentRight')
    <p style="font-size: 18px; font-weight: 700; margin-top: 20px">Follow We On</p>
    <a class="btn btn-primary"
        style="background-color: #FFA902; border-radius: 20px; width: 40px; height: 40px; margin-right: 5px"
        href="#!" role="button"><i class="fab fa-instagram"></i></a>
    <a class="btn btn-primary"
        style="background-color: #55acee; border-radius: 20px; width: 40px; height: 40px; margin-right: 5px"
        href="#!" role="button"><i class="fab fa-twitter"></i></a>
    <a class="btn btn-primary"
        style="background-color: #55acee; border-radius: 20px; width: 40px; height: 40px; margin-right: 5px"
        href="#!" role="button"><i class="fa-brands fa-facebook-f"></i></a>
    <a class="btn btn-primary"
        style="background-color: #55acee; border-radius: 20px; width: 40px; height: 40px; margin-right: 5px"
        href="#!" role="button"><i class="fa-brands fa-youtube"></i></i></a>
@endsection

@section('contentRight2')
    <p style="font-size: 18px; font-weight: 700; margin-top: 20px">Popular Places</p>
    <img src="images/Meru-Temple-in-Lombok-Indonesia.jpg" alt="cat1"
        style="border-radius: 5px; height: 60px; width: 86px; float: left; margin-right: 20px">
    <p style="font-size: 16px; font-weight: 600; margin-bottom: 1px">Nama Tempat</p>
    <p style="font-size: 8px; color: #FFA902; margin-bottom: 1px">Location <span
        style="color: gray">In</span> <span style="color: black">Mandalika Circuit</span></p>
    <p style="font-size: 8px; color: #gray;">Category: <span style="color: #FFA902">Hotel</span> </p>
    <p style="margin-bottom: 25px"></p>
    <img src="images/Meru-Temple-in-Lombok-Indonesia.jpg" alt="cat1"
        style="border-radius: 5px; height: 60px; width: 86px; float: left; margin-right: 20px">
    <p style="font-size: 16px; font-weight: 600; margin-bottom: 1px">Nama Tempat</p>
    <p style="font-size: 8px; color: #FFA902; margin-bottom: 1px">Location <span
            style="color: gray">In</span> <span style="color: black">Mandalika Circuit</span></p>
    <p style="font-size: 8px; color: #gray;">Category: <span style="color: #FFA902">Hotel</span> </p>
    <p style="margin-bottom: 25px"></p>
    <img src="images/Meru-Temple-in-Lombok-Indonesia.jpg" alt="cat1"
        style="border-radius: 5px; height: 60px; width: 86px; float: left; margin-right: 20px">
    <p style="font-size: 16px; font-weight: 600; margin-bottom: 1px">Nama Tempat</p>
    <p style="font-size: 8px; color: #FFA902; margin-bottom: 1px">Location <span
            style="color: gray">In</span> <span style="color: black">Mandalika Circuit</span></p>
    <p style="font-size: 8px; color: #gray;">Category: <span style="color: #FFA902">Tour</span> </p>
    <p style="margin-bottom: 25px"></p>
    <img src="images/Meru-Temple-in-Lombok-Indonesia.jpg" alt="cat1"
    style="border-radius: 5px; height: 60px; width: 86px; float: left; margin-right: 20px">
    <p style="font-size: 16px; font-weight: 600; margin-bottom: 1px">Nama Tempat</p>
    <p style="font-size: 8px; color: #FFA902; margin-bottom: 1px">Location <span
            style="color: gray">In</span> <span style="color: black">Mandalika Circuit</span></p>
    <p style="font-size: 8px; color: #gray;">Category: <span style="color: #FFA902">Hotel</span> </p>
    <p style="margin-bottom: 25px"></p>
    <img src="images/Meru-Temple-in-Lombok-Indonesia.jpg" alt="cat1"
    style="border-radius: 5px; height: 60px; width: 86px; float: left; margin-right: 20px">
    <p style="font-size: 16px; font-weight: 600; margin-bottom: 1px">Nama Tempat</p>
    <p style="font-size: 8px; color: #FFA902; margin-bottom: 1px">Location <span
        style="color: gray">In</span> <span style="color: black">Mandalika Circuit</span></p>
    <p style="font-size: 8px; color: #gray;">Category: <span style="color: #FFA902">Tour</span> </p>
@endsection