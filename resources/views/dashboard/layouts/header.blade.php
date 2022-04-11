<nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
    {{-- <div class="d-flex justify-content-start"> --}}
        <button type="button" id="sidebarCollapse" class="btn btn-info" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-left"></i>
        </button>
    {{-- </div> --}}
    <div class="d-flex justify-content-end">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/" style="color: black">Home</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-white bg-white me-2">Logout <span><i class="fas fa-sign-out"></i></span> </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>