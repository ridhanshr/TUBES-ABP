<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scrolldown.css') }}">
    <title>{{ $title }}</title>
</head>

<body>
    <section id="sec1" class=@yield('bg')>
        <div class="container">
            @include('partials.navbar')

            <div class="container tengah">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div id="isitengah" class="col-lg-10">
                        <h1 style="font-size: 65px; font-weight: 700;margin-bottom: 30px">@yield('judulPage')</h1>
                        <p>@yield('isiPage')</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
    </section>

    <section id='sec2' class="mt-5">
        <div class="container">
            @yield('category')
            <h3 class="mt-5 md-5 mb-5" style="text-align: center; font-weight: 600; ">@yield('judul')</h3>
            <div class="d-flex bd-highlight">
                <div class="p-2 w-300 bd-highligt">
                    @yield('content')
                </div>  
                <div class="d-flex align-items-end flex-column bd-highlight mb-3">
                    <div class="p-2 bd-highligt mb-3" style="box-shadow:0px 1px 10px rgba(0,0,0,0.1); border-radius: 10px; height: @yield('heightBox1'); width: @yield('widthBox1');">
                        @yield('contentRight2')
                    </div>
                    <div class="p-2 bd-highligt" style="box-shadow:0px 1px 10px rgba(0,0,0,0.1); border-radius: 10px; height: @yield('heightBox2'); width: @yield('widthBox2');">
                        @yield('contentRight')
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>