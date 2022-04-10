@extends('layout.main')

@section('bg')
    bg
@endsection

@section('heightBox1')
    517px
@endsection

@section('widthBox1')
    342px
@endsection

@section('heightBox2')
    196px
@endsection

@section('widthBox2')
    342px
@endsection

@section('judulPage')
    About Me
@endsection

@section('isiPage')
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus viverra. Sit
    justo velit, eu sed <br> sollicitudin tempus, risus. Sed sit elit mauris adipiscing.
    Lobortis pellentesque nulla accumsan id urna, ullamcorper <br> gravida varius. Massa mauris,
    cursus orci magna non enim fames et sed.</p>
@endsection

@section('content')
    <p class="lh-lg" style="float: left;"><span class="firstletter">A</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus viverra. Sit justo velit, eu sed sollicitudin tempus, risus. Sed sit elit mauris adipiscing. Lobortis pellentesque nulla accumsan id urna, ullamcorper gravida varius. <br> 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu pulvinar diam adipiscing ut placerat nulla. Netus tortor ante vestibulum egestas facilisi scelerisque est rhoncus tristique. Viverra malesuada massa libero, adipiscing elit phasellus elementum. Faucibus penatibus cursus pellentesque tellus.<br>
pellentesque dignissim. Netus pharetra in pellentesque vitae ante neque duis nec. Eu eget tellus tempor aliquam commodo et ut vestibulum. Vulputate tellus sed semper malesuada interdum lectus a sapien. Praesent lectus eu mauris libero rhoncus. Ac sapien rhoncus diam cursus pellentesque aliquet. </p>
@endsection

@section('contentRight')
    <p style="font-weight: 700; font-size: 18px; margin-top: 15px">Contact Me</p>
    <div style="font-size: 15px;">
        <div><i class="fa-solid fa-location-dot" style="margin-right: 5px; margin-bottom: 20px"></i>Telkom University, Bandung</div>
        <div><i class="fa-solid fa-envelope" style="margin-right: 5px; margin-bottom: 20px"></i>student@student.telkomuniversity.ac.id</div>
        <div><i class="fa-solid fa-mobile" style="margin-right: 5px; margin-bottom: 20px"></i>+6212312312</div>
    </div>
@endsection

@section('contentRight2')
    <img src="images/ava.png" alt="ava" width="202px" style="margin-bottom: 5px; margin-top: 15px">
    <p style="font-weight: 600; font-size: 36px">Kelompok 7</p>
    <p style="font-size: 15px">Lorem ipsum dolor sit am consectetur adipisc ing elit. In sed et donec purus viverra. Sit justo</p>
    <div style="border: 1px solid #868383;"></div>
    <p style="font-size: 18px; font-weight: 700; margin-top: 25px">Follow Me</p>
    <a class="btn btn-primary" style="background-color: #FFA902; border-radius: 20px; width: 40px; height: 40px; margin-right: 5px" href="#!" role="button"><i class="fab fa-instagram"></i></a>
    <a class="btn btn-primary" style="background-color: #FFA902; border-radius: 20px; width: 40px; height: 40px; margin-right: 5px" href="#!" role="button"><i class="fab fa-twitter"></i></a>
@endsection