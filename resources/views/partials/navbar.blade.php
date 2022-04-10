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
    <link rel="stylesheet" href="{{ asset('css/navstyle.css') }}">
</head>
<body>
    <header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/home"
        class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-decoration-none brandheader">Lombok<span
            style="color: grey">Nation</span></a>

    <div class="col-md-4 mt-3">
        <div class="form-group searchicon">
            <span class="fa fa-search form-control-feedback"></span>
            <form action="/rekomendasi">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input type="search" name="search" class="form-control rounded-pill" placeholder="Search Location" value="{{ request('search') }}"
                    aria-label="search" style="margin-bottom: 10px">
            </form>
        </div>
    </div>

    <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-warning me-2">Login</button>
        <button type="button" class="btn btn-warning">Sign-Up</button>
    </div>
</header>

<nav class="stroke"> 
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 gap-5 navheader">
        <li><a href="/" class="nav-link {{ ($title == "Home") ? 'active' : '' }} px-2 text-dark">Home</a></li>
        <li><a href="/about" class="nav-link {{ ($title == "About") ? 'active' : '' }} px-2 text-dark">About</a></li>
        <li><a href="/rekomendasi" class="nav-link {{ ($title == "Post") ? 'active' : '' }} px-2 text-dark">Recommendation</a></li>
    </ul>
</nav>

</body>
</html>